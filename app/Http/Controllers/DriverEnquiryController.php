<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverEnquiries;
use App\Models\DriverCarclass;
use App\Models\Contractual;
use Auth;


class DriverEnquiryController extends Controller
{
    public function postDriverEnquiry(Request $request)
    {
		 $request->validate([
            'driver_trip_type' => 'required',
			'pickup_location' => 'required',
			'drop_location' => 'required',
			'pickup_date' => 'required|date',
			'pickup_time' => 'required',
			'drop_date' => 'nullable|date',
        ]);
		
        $driverEnquiry = new DriverEnquiries();

        $driverEnquiry->driver_trip_type = $request->input('driver_trip_type');
        $driverEnquiry->pickup_location = $request->input('pickup_location');
        $driverEnquiry->drop_location = $request->input('drop_location');
        $driverEnquiry->pickup_date = $request->input('pickup_date');
        $driverEnquiry->pickup_time = $request->input('pickup_time');
        $driverEnquiry->package = $request->input('package');
        $driverEnquiry->ride_type = $request->input('ride_type');
        $driverEnquiry->drop_date = $request->input('drop_date');

        $driverEnquiry->save();

       return redirect('/driver/passenger-details/'. $driverEnquiry->enquiry_id);
    }

   public function getReviewBooking($enquiry_id)
    {
        $driverEnquiry = DriverEnquiries::find($enquiry_id);
        return view('frontend.driver.review-booking-payment', compact('driverEnquiry'));
    }
	
	public function getPassengerDetails($enquiry_id)
    {
		$carclasses = DriverCarclass::all();
        $driverEnquiry = DriverEnquiries::find($enquiry_id);
        return view('frontend.driver.passenger-details', compact('driverEnquiry','carclasses'));
    }

    public function postPassengerDetails(Request $request, $enquiry_id)
    {
        $driverEnquiry = DriverEnquiries::findOrFail($enquiry_id);

    
          // Get the selected languages from the request
        $driver_languages = $request->input('driver_language', []);

        // Check if 'Other' language was selected
        if (in_array('other', $driver_languages)) {
            // Get the value of the 'Other' language input
            $other_language = $request->input('otherLanguage');
            
            // Remove 'other' from the array
            $driver_languages = array_diff($driver_languages, ['other']);
            
            // Add the actual value from the input field
            if (!empty($other_language)) {
                $driver_languages[] = $other_language;
            }
        }
    
        $driverEnquiry->vehicle_class = $request->input('vehicle_class');
        $driverEnquiry->vehicle_type = $request->input('vehicle_type');
        $driverEnquiry->registration_type = implode(',', $request->input('registration_type', []));
        $driverEnquiry->driver_language = implode(',', $driver_languages);
    
        // Calculate total travel time and distance
        $travelDetails = $this->calculateTravelDetails($driverEnquiry->pickup_location, $driverEnquiry->drop_location);
        $total_hours = $travelDetails['total_hours'];
        $distance_km = $travelDetails['distance_km'];
    
        // Store travel time and distance
        $driverEnquiry->total_hours = $total_hours;
        $driverEnquiry->distance_km = $distance_km;
    
        // Retrieve car class
        $carClass = DriverCarclass::where('carclass_name', $driverEnquiry->vehicle_class)->first();
    
        if (!$carClass) {
            return redirect()->back()->with('error', 'Invalid vehicle class selected.');
        }
    
        $charges = null;
        $extra_hour_price = $carClass->local_extra_hour_charges; 
    
        // Determine charges based on trip type and package
        if ($driverEnquiry->driver_trip_type === 'local') {
            if ($driverEnquiry->package === '8') {
                $base_hours = 8;
                $charges = $carClass->local_8_hrs_charges;
    
                if ($total_hours > $base_hours) {
                    $extra_hours = $total_hours - $base_hours;
                    $charges += $extra_hour_price * $extra_hours;
                }
            } elseif ($driverEnquiry->package === '12') {
                $base_hours = 12;
                $charges = $carClass->local_12_hrs_charges;
    
                if ($total_hours > $base_hours) {
                    $extra_hours = $total_hours - $base_hours;
                    $charges += $extra_hour_price * $extra_hours;
                }
            } else {
                return response()->json(['error' => 'Invalid package selected'], 400);
            }
        }

        if ($driverEnquiry->driver_trip_type === 'outstation') {
            $base_hours = 12;
        
            // Retrieve the necessary charges from the car class
            $outstation_base_fare = $carClass->outstation_base_fare;
            $extra_hour_price = $carClass->outstation_extra_hour_charges;
            // Check if total hours exceed the base hours (12 hours)
            if ($total_hours > $base_hours) {
                // Calculate extra hours
                $extra_hours = $total_hours - $base_hours;
                // Apply the extra hour charges based on distance (charges per km)
                $charges = $outstation_base_fare + ($extra_hour_price * $extra_hours);
            } else {
                // If total hours are within the base limit, use the base fare
                $charges = $outstation_base_fare;
            }
        }
        
    
        // Save calculated amount and other data
        $driverEnquiry->total_amount = $charges + ($driverEnquiry->distance_km * 3);
        $driverEnquiry->save();
    
        // Redirect based on authentication status
        if (Auth::check()) {
            return redirect('/driver/review-booking-payment/' . $enquiry_id);
        } else {
            return redirect('customer-login2?id=' . $enquiry_id);
        }
    }
    

    public function postDriverBooking(Request $request)
    {
        $user = Auth::user();
        $driverEnquiry = DriverEnquiries::latest()->first();

        $driverEnquiry->enquiry_status = 1;
        $driverEnquiry->customer_id = $user->id;
        $driverEnquiry->save();
        
        $driverEnquiry->customer_name = $user->name;
        $driverEnquiry->customer_email = $user->email;
        $driverEnquiry->mobile_no = $user->mobile_number;
        $driverEnquiry->save();

        return redirect('/driver')->with('success', 'Enquiry Saved!!');
    }
    
   
private function calculateTravelDetails($pickup_location, $drop_location)
{
    $apiKey = 'AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE'; // Replace with your actual Google API key

    // Properly encode the pickup and drop locations to avoid special character issues
    $pickup_location = urlencode($pickup_location);
    $drop_location = urlencode($drop_location);

    // Build the API URL with encoded locations
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins={$pickup_location}&destinations={$drop_location}&key={$apiKey}";

    // Send the GET request to the Distance Matrix API
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    // Check if the response contains valid data
    if (!empty($data['rows'][0]['elements'][0])) {
        $element = $data['rows'][0]['elements'][0];

        // Get travel time in seconds
        $travelTimeInSeconds = $element['duration']['value'];
        $total_hours = $travelTimeInSeconds / 3600; // Convert to hours

        // Get distance in meters
        $distanceInMeters = $element['distance']['value'];
        $distanceInKm = $distanceInMeters / 1000; // Convert to kilometers

        return [
            'total_hours' => round($total_hours, 2),
            'distance_km' => round($distanceInKm, 2)
        ]; // Return both travel time and distance rounded to two decimal places
    } else {
        // Handle the case when API returns invalid data
        return [
            'total_hours' => 0,
            'distance_km' => 0
        ]; // Default values if the API call fails
    }
}

    
    

    public function postAddConsensualEnquiry(Request $request)
    {
        $user = Auth::user();
		
        $contractualEnquiries = new Contractual();
        $contractualEnquiries->name = $request->name;
        $contractualEnquiries->email = $request->email;
        $contractualEnquiries->mobile_no = $request->mobile_no;
        $contractualEnquiries->duration = $request->duration;
        $contractualEnquiries->comment = $request->comment;
        $contractualEnquiries->registration_type = $request->registration_type;
		$contractualEnquiries->customer_id = $user->id;
        $contractualEnquiries->status = 1;
		
        $contractualEnquiries->save();

        return redirect('/driver')->with('success', 'Contractual Enquiry Added Successfully!!');
    }

    


}
