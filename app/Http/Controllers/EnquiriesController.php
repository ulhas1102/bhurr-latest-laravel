<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Exception;
use App\Models\PaymentHistorys;
use App\Models\Enquiries;
use App\Models\Carclass;
use App\Models\CarTypes;
use App\Models\ExtraHours;
use Carbon\Carbon;
use App\Models\Extrakilometers;
use App\Models\ExtraExpences;
class EnquiriesController extends Controller
{

    public function AddnewEnquiries(Request $request)
    {

        // Get input data
        $fromLocation = $request->input('from_location');
        $toLocation = $request->input('to_location');
        // Calculate distance and duration
        $distanceData = $this->getDistanceAndDuration($fromLocation, $toLocation);
        $vehicleClass = $request->input('vehicle_class');
        $Carclass = Carclass::where('car_class', $vehicleClass)->first();
        $Totaldistance = $distanceData['distance'];

        $Total = '';

        if($request->package_type == 1){ //Local

            $perkmCharges = '';

            if ($request->vehicle_type == 'Diesel Car') {
                $perkmCharges = $Carclass->oneway_disel_per_km_charges;
            } elseif ($request->vehicle_type == 'CNG Car') {
                $perkmCharges = $Carclass->oneway_cng_per_km_charges;
            }elseif ($request->vehicle_type == 'Electric Car') {
                $perkmCharges = $Carclass->electric_per_km_charges;
            }

            $Basefare = $Carclass->local_base_fare;
            $Total = ($Totaldistance * $perkmCharges) + $Basefare;

        }elseif($request->package_type == 2){ //Outstation 

            $perkmCharges = '';

            if ($request->vehicle_type == 'Diesel Car') {
                $perkmCharges = $Carclass->outstation_disel_per_km_charges;
            } elseif ($request->vehicle_type == 'CNG Car') {
                $perkmCharges = $Carclass->outstation_cng_per_km_charges;
            }elseif ($request->vehicle_type == 'Electric Car') {
                $perkmCharges = $Carclass->electric_per_km_charges;
            }

            $Basefare = $Carclass->outstation_base_fare;
            $returnandOnewaydistance = $Totaldistance + $Totaldistance;
            $dailyLimit = 300;
            // if($returnandOnewaydistance == 300){
            //     $Total = ( $Totaldistance * $perkmCharges) + $Basefare;
            // }elseif($returnandOnewaydistance <= 300){
            //     $Total = (300 * $perkmCharges) + $Basefare;
            // }else{
            //     $dailyLimit = 300;
            //     $excessDistance = $returnandOnewaydistance > $dailyLimit ? $returnandOnewaydistance - $dailyLimit : 0;
                
            //    // $Total = ($returnandOnewaydistance * $perkmCharges) + $Basefare;

            //     $Total = 2 * (300 * $perkmCharges) + 2 * ($excessDistance * $perkmCharges) + $Basefare;
            // }

            if ($returnandOnewaydistance <= $dailyLimit) {
                // No excess distance, calculate total normally
                $Total = 2 * ($returnandOnewaydistance * $perkmCharges) + $Basefare;
            } elseif ($returnandOnewaydistance > $dailyLimit && $returnandOnewaydistance <= 2 * $dailyLimit) {
                // Excess distance up to 2 times the daily limit
                $excessDistance = $returnandOnewaydistance - $dailyLimit;
                $Total = 2 * (300 * $perkmCharges) + 2 * ($excessDistance * $perkmCharges) + $Basefare;
            } elseif ($returnandOnewaydistance > 2 * $dailyLimit) {
                // Excess distance above 2 times the daily limit
                $excessDistance = $returnandOnewaydistance - 3 * $dailyLimit;
                $Total = 3 * (300 * $perkmCharges) + 3 * ($excessDistance * $perkmCharges) + $Basefare;
            }



        }elseif($request->package_type == 3){ //one way

            $perkmCharges = '';
            
            if ($request->vehicle_type == 'Diesel Car') {
                $perkmCharges = $Carclass->outstation_disel_per_km_charges;
            } elseif ($request->vehicle_type == 'CNG Car') {
                $perkmCharges = $Carclass->outstation_cng_per_km_charges;
            }elseif ($request->vehicle_type == 'Electric Car') {
                $perkmCharges = $Carclass->electric_per_km_charges;
            }

            $Basefare = $Carclass->oneway_base_fare;

            $returnandOnewaydistance = $Totaldistance + $Totaldistance;

            $dailyLimit = 300;
            // if($returnandOnewaydistance == 300){
            //     $Total = ( $Totaldistance * $perkmCharges) + $Basefare;

            // }elseif($returnandOnewaydistance <= 300){
            //     $Total = (300 * $perkmCharges) + $Basefare;

            // }else{
            //     $Total = ($returnandOnewaydistance * $perkmCharges) + $Basefare;

            // }


            if ($returnandOnewaydistance <= $dailyLimit) {
                // No excess distance, calculate total normally
                $Total = 2 * ($returnandOnewaydistance * $perkmCharges) + $Basefare;
            } elseif ($returnandOnewaydistance > $dailyLimit && $returnandOnewaydistance <= 2 * $dailyLimit) {
                // Excess distance up to 2 times the daily limit
                $excessDistance = $returnandOnewaydistance - $dailyLimit;
                $Total = 2 * (300 * $perkmCharges) + 2 * ($excessDistance * $perkmCharges) + $Basefare;
            } elseif ($returnandOnewaydistance > 2 * $dailyLimit) {
                // Excess distance above 2 times the daily limit
                $excessDistance = $returnandOnewaydistance - 3 * $dailyLimit;
                $Total = 3 * (300 * $perkmCharges) + 3 * ($excessDistance * $perkmCharges) + $Basefare;
            }


        }

        // $RemaingAmount = $Total - $AdvanceAmount;
        
        $start_journy_date = $request->input('start_journy_date');
        $end_journy_date = $request->input('end_journy_date');
        $start_date = Carbon::parse($start_journy_date);
        $end_date = Carbon::parse($end_journy_date);
        $number_of_days = $start_date->diffInDays($end_date);
       
        
        //dd($request);
        $enquiry = new Enquiries();
        $enquiry->customer_name = $request->input('customer_name');
        $enquiry->customer_email = $request->input('customer_email');
        $enquiry->customer_mobile = $request->input('customer_mobile');
        $enquiry->alternate_customer_mobile = $request->input('alternate_customer_mobile');
        $enquiry->customer_address = $request->input('customer_address');
        $enquiry->customer_pincode = $request->input('customer_pincode');
        $enquiry->package_type = $request->input('package_type');
        $enquiry->from_location = $request->input('from_location');
        $enquiry->to_location = $request->input('to_location');
        $enquiry->start_journy_date = $request->input('start_journy_date');
        $enquiry->end_journy_date = $request->input('end_journy_date');

        if ($number_of_days == 0.0) {
            $enquiry->number_of_days_trip = 1;
        }else{
            $enquiry->number_of_days_trip = $number_of_days;
        }
        $enquiry->number_of_persons = $request->input('number_of_persons');
        $enquiry->vehicle_name = $request->input('vehicle_name');
        $enquiry->vehicle_type = $request->input('vehicle_type');
        $enquiry->vehicle_class = $request->input('vehicle_class');
        $enquiry->driver_id = $request->input('driver_id');
        $enquiry->vendor_id = $request->input('vendor_id');
        $enquiry->confirm_status = $request->input('trip_confirm');
        $enquiry->trip_status = $request->input('trip_status');
        $enquiry->total_distance = $distanceData['distance'];
        $enquiry->duration = $distanceData['duration'];
        $enquiry->total_amount = $Total;
        // $enquiry->advance_amount = $request->input('advance_amount');
        $enquiry->remaining_amount = $Total;
        $enquiry->per_km_charges = $perkmCharges;
        $enquiry->save();

        $request->session()->flash('success', 'Enquiry submitted successfully!');

        return redirect()->route('all-enquiries');

    }

    private function getDistanceAndDuration($fromLocation, $toLocation)
    {
        $apiKey = 'AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE';
        $client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/distancematrix/json', [
            'query' => [
                'origins' => $fromLocation,
                'destinations' => $toLocation,
                'key' => $apiKey
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        $distance = $data['rows'][0]['elements'][0]['distance']['value'] / 1000; // distance in km
        $duration = $data['rows'][0]['elements'][0]['duration']['value'] / 60; // duration in minutes

        return [
            'distance' => $distance,
            'duration' => round($duration)
        ];
    }

    public function EditEnquiries(Request $request)
    {

        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);

        $TotalAmount = $enquiry->total_amount;
        $AdvanceAmount = $request->input('advance_amount');
        $advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;
        $RemaingAmount = $TotalAmount - $advance;

        $start_journy_date = $request->input('start_journy_date');
        $end_journy_date = $request->input('end_journy_date');

        $start_date = Carbon::parse($start_journy_date);
        $end_date = Carbon::parse($end_journy_date);
        $number_of_days = $start_date->diffInDays($end_date);

        //dd($number_of_days);
        if ($number_of_days == 0) {
            $enquiry->number_of_days_trip = 1;
        }else{
            $enquiry->number_of_days_trip = $number_of_days;
        }

        $enquiry->customer_name = $request->input('customer_name');
        $enquiry->customer_email = $request->input('customer_email');
        $enquiry->customer_mobile = $request->input('customer_mobile');
        $enquiry->alternate_customer_mobile = $request->input('alternate_customer_mobile');
        $enquiry->customer_address = $request->input('customer_address');
        $enquiry->customer_pincode = $request->input('customer_pincode');
        $enquiry->package_type = $request->input('package_type');
        $enquiry->from_location = $request->input('from_location');
        $enquiry->to_location = $request->input('to_location');
        $enquiry->start_journy_date = $request->input('start_journy_date');
        $enquiry->end_journy_date = $request->input('end_journy_date');
        $enquiry->number_of_persons = $request->input('number_of_persons');
        $enquiry->vehicle_name = $request->input('vehicle_name');
        $enquiry->vehicle_type = $request->input('vehicle_type');
        $enquiry->vehicle_class = $request->input('vehicle_class');
        $enquiry->driver_id = $request->input('driver_id');
        $enquiry->vendor_id = $request->input('vendor_id');
		if($enquiry->trip_otp == null){
			$otp = rand(1000, 9999);
			$enquiry->trip_otp = 1122;
		}
        $enquiry->confirm_status = $request->input('trip_confirm');
        $enquiry->trip_status = $request->input('trip_status');
        $enquiry->advance_amount = $request->input('advance_amount');
        $enquiry->remaining_amount = $RemaingAmount;
        $enquiry->save();

        $request->session()->flash('success', 'Enquiry updated successfully!');

        return redirect()->route('all-enquiries');

    }

    public function deleteEnquiry(Request $request)
    {
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        $enquiry->delete();

        $request->session()->flash('success', 'Enquiry deleted successfully!');

        return redirect()->route('all-enquiries');

    }

    //
    public function generatePhonePayRequest(Request $request)
    {
        // Validate the request if necessary
        $request->validate([
            'amount' => 'required|numeric',
            'customer_mobile' => 'required|regex:/[0-9]{10}/' // Assuming Indian phone number format
        ]);

        // Retrieve inputs from the form
        $amount = $request->input('amount');
        $customerMobile = $request->input('customer_mobile');

        // Initialize Guzzle HTTP client
        $client = new Client();

        // Replace 'YOUR_PHONE_PAY_API_ENDPOINT' with the actual endpoint provided by Phone Pay
        $phonePayEndpoint = 'https://api.phonepay.com/payment/request'; // Example endpoint

        try {
            // Make a POST request to Phone Pay API
            $response = $client->request('POST', $phonePayEndpoint, [
                'json' => [
                    'amount' => $amount,
                    'mobile_number' => $customerMobile,
                    'description' => 'Payment request for services', // Example description
                    // Add any other required parameters according to Phone Pay API documentation
                ]
            ]);

            // Assuming Phone Pay responds with JSON data
            $responseData = json_decode($response->getBody(), true);

            // Handle response accordingly
            return response()->json($responseData);
        } catch (Exception $e) {
            // Handle exception (e.g., log error, return error response)
            return response()->json(['error' => 'Failed to send payment request to Phone Pay: ' . $e->getMessage()], 500);
        }
    }

    public function addPaymentHistory(Request $request)
    {

        $paymentHistory = new PaymentHistorys();
        $paymentHistory->enquiry_id = $request->input('enquiry_id');
        $paymentHistory->paid_amount = $request->input('paid_amount');
        $paymentHistory->payment_date = $request->input('payment_date');
        $paymentHistory->payment_mode = $request->input('payment_mode');
        $paymentHistory->comment = $request->input('comment');
        $paymentHistory->save();

        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);

        $remainingAmount = $enquiry->remaining_amount - $request->input('paid_amount');
        $enquiry->remaining_amount =  $remainingAmount;

        $AdvanceAmount = $enquiry->advance_amount;
        $advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;
        
        $payment = PaymentHistorys::where('enquiry_id', $enquiryId)->sum('paid_amount');
      
        $overallPaidAmount = $advance + $payment;
        $enquiry->overallpaidamount = $overallPaidAmount;
        $enquiry->save();
        // dd($enquiry);

        $request->session()->flash('success', 'Payment saved successfully!');

        return redirect()->back();

    }

    public function updatePaymentHistory(Request $request, $id)
    {

        // Find the payment history record by ID and update it
        $paymentHistory = PaymentHistorys::find($id);
        $paymentHistory->payment_mode = $request->input('payment_mode');
        $paymentHistory->payment_date = $request->input('payment_date');
        $paymentHistory->paid_amount = $request->input('paid_amount');
        $paymentHistory->comment = $request->input('comment');
        $paymentHistory->save();

        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);

        $remainingAmount = $enquiry->remaining_amount - $request->input('paid_amount');
        $enquiry->remaining_amount =  $remainingAmount;

        $AdvanceAmount = $enquiry->advance_amount;
        $advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;
        
        $payment = PaymentHistorys::where('enquiry_id', $enquiryId)->sum('paid_amount');
      
        $overallPaidAmount = $advance + $payment;
        $enquiry->overallpaidamount = $overallPaidAmount;
        
        $enquiry->save();

        //dd($enquiry);
        $request->session()->flash('success', 'Payment details updated successfully!');

        return redirect()->back();
    }



    public function deletepaymentHistory(Request $request)
    {
        $payment_historyId = $request->payment_history_id;
        $paymentHistory = PaymentHistorys::find($payment_historyId);

        $paymentHistory->delete();

        $request->session()->flash('success', 'Payment details deleted successfully!');

        return redirect()->back();

    }


    public function addExtraHours(Request $request)
{
    // Add new extra hours
    $extrahours = new ExtraHours();
    $extrahours->enquiry_id = $request->input('enquiry_id');
    $extrahours->extra_hours = $request->input('extra_hours');
    $extrahours->date = $request->input('date');
    $extrahours->start_time = $request->input('start_time');
    $extrahours->end_time = $request->input('end_time');
    $extrahours->comment = $request->input('comment');
    $extrahours->save();

    // Retrieve related enquiry
    $enquiryId = $request->enquiry_id;
    $enquiry = Enquiries::find($enquiryId);
    $vehicleClass = $enquiry->vehicle_class;
    $remainingAmount = $enquiry->remaining_amount;

    // Retrieve the per hour charges for the vehicle class
    $Carclass = Carclass::where('car_class', $vehicleClass)->first();
    $ExtrahoursCharges = $Carclass->per_hour_charges;

    // Calculate new extra hours and charges
    $newExtraHours = $request->input('extra_hours');
    $newExtraHourCharges = $newExtraHours * $ExtrahoursCharges;

    // Update the enquiry with new totals
    $enquiry->extra_hours += $newExtraHours;
    $enquiry->extra_hours_amount += $newExtraHourCharges;
    $enquiry->remaining_amount += $newExtraHourCharges;
    $enquiry->extra_hour_charges = $ExtrahoursCharges;
    $enquiry->save();

    // Set success message and redirect back
    $request->session()->flash('success', 'Extra hours added successfully!');
    return redirect()->back();
}


    public function deleteExtraHours(Request $request)
    {

        $extra_hours_Id = $request->extra_hours_id;
        $extrahours = ExtraHours::find($extra_hours_Id);
        $extrahours->delete();
        $request->session()->flash('success', 'Extra hours deleted successfully!');

        return redirect()->back();

    }


    public function updateExtarHours(Request $request, $id)
{
    // Find the existing extra hours record
    $extrahours = ExtraHours::find($id);

    // Store the original extra hours value
    $originalExtraHours = $extrahours->extra_hours;

    // Update the extra hours record with new values
    $extrahours->enquiry_id = $request->input('enquiry_id');
    $extrahours->extra_hours = $request->input('extra_hours');
    $extrahours->date = $request->input('date');
    $extrahours->start_time = $request->input('start_time');
    $extrahours->end_time = $request->input('end_time');
    $extrahours->comment = $request->input('comment');
    $extrahours->save();

    // Retrieve related enquiry
    $enquiryId = $request->enquiry_id;
    $enquiry = Enquiries::find($enquiryId);
    $vehicleClass = $enquiry->vehicle_class;
    $remainingAmount = $enquiry->remaining_amount;

    // Calculate the difference in extra hours
    $newExtraHours = $request->input('extra_hours');
    $hoursDifference = $newExtraHours - $originalExtraHours;

    // Retrieve the per hour charges for the vehicle class
    $Carclass = Carclass::where('car_class', $vehicleClass)->first();
    $ExtrahoursCharges = $Carclass->per_hour_charges;

    // Calculate the adjustment in extra hour charges
    $adjustmentAmount = $hoursDifference * $ExtrahoursCharges;

    // Update the enquiry with new totals
    $enquiry->extra_hours += $hoursDifference;
    $enquiry->extra_hours_amount += $adjustmentAmount;
    $enquiry->remaining_amount += $adjustmentAmount;
    $enquiry->extra_hour_charges = $ExtrahoursCharges;
    $enquiry->save();

    // Set success message and redirect back
    $request->session()->flash('success', 'Extra hours updated successfully!');
    return redirect()->back();
}

    public function CustomizeInvoice(Request $request, $id)
    {
     
        $enquiry = Enquiries::find($id);
        $enquiry->cleaning_charges = $request->input('cleaning_charges');
        $enquiry->tax_amount = $request->input('tax_amount');
        $enquiry->toll_amount = $request->input('toll_amount');
        $enquiry->save();


        $enquiredata = Enquiries::find($id);

        $cleaningCharges = $enquiry->cleaning_charges;
        $taxAmount = $enquiry->tax_amount;
        $tollAmount = $enquiry->toll_amount;
        $rermainingAmount = $enquiry->remaining_amount;

        $totalRemainingAmount = $rermainingAmount + $cleaningCharges + $taxAmount + $tollAmount;

        $enquiredata->remaining_amount = $totalRemainingAmount;
        $enquiredata->save();

        $request->session()->flash('success', 'Invoice updated successfully!');
        return redirect()->back();

    }


    public function addExtraKilometers(Request $request)
    {
        // Add new extra hours
        $extraKilometer = new Extrakilometers();
        $extraKilometer->enquiry_id = $request->input('enquiry_id');
        $extraKilometer->kilometers = $request->input('kilometers');
        $extraKilometer->date = $request->input('date');
        $extraKilometer->comment = $request->input('comment');
        $extraKilometer->save();
    
        // Retrieve related enquiry
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        $vehicleClass = $enquiry->vehicle_class;
        $remainingAmount = $enquiry->remaining_amount;
    
        // Retrieve the per hour charges for the vehicle class
        $Carclass = Carclass::where('car_class', $vehicleClass)->first();
        $ExtraKiloemeterCharges = $Carclass->per_km_charges;
    
        // Calculate new extra hours and charges
        $newExtraKilometers = $request->input('kilometers');
        $newExtraKilometerCharges = $newExtraKilometers * $ExtraKiloemeterCharges;
    
        // Update the enquiry with new totals
        $enquiry->kilometers += $newExtraKilometers;
        $enquiry->extra_kilometers_amount += $newExtraKilometerCharges;
        $enquiry->remaining_amount += $newExtraKilometerCharges;
        $enquiry->extra_kilometer_charges = $ExtraKiloemeterCharges;
        $enquiry->save();
    
        // Set success message and redirect back
        $request->session()->flash('success', 'Extra Kilometers added successfully!');
        return redirect()->back();
    }
	
	
	public function addExtraExpences(Request $request)
    {
        // Add new extra hours
        $extraExpence = new ExtraExpences();
        $extraExpence->enquiry_id = $request->input('enquiry_id');
        $extraExpence->date = $request->input('date');
        $extraExpence->time = $request->input('time');
		$extraExpence->amount = $request->input('amount');
        $extraExpence->comment = $request->input('comment');
        $extraExpence->save();
    
        // Retrieve related enquiry
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        $remainingAmount = $enquiry->remaining_amount;
    
        // Calculate new extra hours and charges
        $newExtraExpence = $request->input('amount');
        $newExtraExpenceCharges = $newExtraExpence;
		
        $enquiry->extra_expence_amount += $newExtraExpenceCharges;
        $enquiry->remaining_amount += $newExtraExpenceCharges;
        $enquiry->save();
 
        // Set success message and redirect back
        $request->session()->flash('success', 'Extra Expence added successfully!');
        return redirect()->back();
    }


    public function updateExtarKilometers(Request $request, $id)
{
    // Find the existing extra hours record
    $extraKilometer = Extrakilometers::find($id);

    // Store the original extra hours value
    $originalExtraKilometers = $extraKilometer->kilometers;

    // Update the extra hours record with new values
    $extraKilometer->enquiry_id = $request->input('enquiry_id');
    $extraKilometer->kilometers = $request->input('kilometers');
    $extraKilometer->date = $request->input('date');
    $extraKilometer->comment = $request->input('comment');
    $extraKilometer->save();

    // Retrieve related enquiry
    $enquiryId = $request->enquiry_id;
    $enquiry = Enquiries::find($enquiryId);
    $vehicleClass = $enquiry->vehicle_class;
    $remainingAmount = $enquiry->remaining_amount;

    // Calculate the difference in extra hours
    $newExtraKilometers = $request->input('kilometers');
    $hoursDifference = $newExtraKilometers - $originalExtraKilometers;

    // Retrieve the per hour charges for the vehicle class
    $Carclass = Carclass::where('car_class', $vehicleClass)->first();
    $ExtraKilometersCharges = $Carclass->per_km_charges;

    // Calculate the adjustment in extra hour charges
    $adjustmentAmount = $hoursDifference * $ExtraKilometersCharges;

    // Update the enquiry with new totals
    $enquiry->kilometers += $hoursDifference;
    $enquiry->extra_kilometers_amount += $adjustmentAmount;
    $enquiry->remaining_amount += $adjustmentAmount;
    $enquiry->extra_kilometer_charges = $ExtraKilometersCharges;
    $enquiry->save();

    // Set success message and redirect back
    $request->session()->flash('success', 'Extra kilometers updated successfully!');
    return redirect()->back();
}
	
	public function updateExtarExpences(Request $request, $id)
	{
		// Find the existing extra amount record
		$extraExpence = ExtraExpences::find($id);
		// Store the original extra amount value
		$originalExtraExpence = $extraExpence->amount;
		// Update the extra amount record with new values
		$extraExpence->enquiry_id = $request->input('enquiry_id');
		$extraExpence->amount = $request->input('amount');
		$extraExpence->date = $request->input('date');
		$extraExpence->time = $request->input('time');
		$extraExpence->comment = $request->input('comment');
		$extraExpence->save();

		$enquiryId = $request->enquiry_id;
		$enquiry = Enquiries::find($enquiryId);

		$newExtraExpence = $request->input('amount');
		$amountDifference = $newExtraExpence - $originalExtraExpence;

		$enquiry->extra_expence_amount += $amountDifference;
		$enquiry->remaining_amount += $amountDifference;
		$enquiry->save();

		$request->session()->flash('success', 'Extra Expense updated successfully!');
		return redirect()->back();
	}

    public function deleteExtraKilometers(Request $request)
    {

        $extra_kilometers_Id = $request->extra_kilometers_id;
        $extraKilometer = Extrakilometers::find($extra_kilometers_Id);
        $extraKilometer->delete();
        $request->session()->flash('success', 'Extra kilometer deleted successfully!');

        return redirect()->back();

    }

    
}
