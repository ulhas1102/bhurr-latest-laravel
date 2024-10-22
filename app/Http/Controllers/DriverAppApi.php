<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverApp;
use App\Models\DriverEnquiries;
use App\Models\Contractual;
use App\Models\DriverCarclass;
use DB;
use Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class DriverAppApi extends Controller
{
    public function checkDriverDocuments($driverId)
	{
		$driver = DriverApp::find($driverId);

		if (!$driver) {
			return response()->json(['success' => false, 'message' => 'Driver not found']);
		}

		$columnsToCheck = [
			'driving_licence',
			'pan_card',
			'aadhar_card',
			'aadhar_card_back',
			'police_verification',
			'electricity_bill',
			'profile_image',
		];

		foreach ($columnsToCheck as $column) {
			if (is_null($driver->$column)) {
				return response()->json(['success' => false, 'message' => 'Some documents are missing']);
			}
		}

		return response()->json(['success' => true, 'message' => 'All documents are filled']);
	}

	
		public function LocalTripRequest(Request $request)
		{
			$localEnquiry = new DriverEnquiries();

			$localEnquiry->driver_trip_type = $request->driver_trip_type;
			$localEnquiry->pickup_location = $request->pickup_location;
			$localEnquiry->drop_location = $request->drop_location;
			$localEnquiry->package = $request->package;
			$localEnquiry->pickup_date = $request->pickup_date;
			$localEnquiry->pickup_time = $request->pickup_time;
			$localEnquiry->ride_type = $request->input('ride_type');
			$localEnquiry->vehicle_class = $request->vehicle_class;
			$localEnquiry->vehicle_type = $request->vehicle_type;
			$localEnquiry->registration_type = $request->registration_type;
			$travelDetails = $this->getDistanceAndDuration($request->pickup_location, $request->drop_location);

			if (!isset($travelDetails['duration']) || !isset($travelDetails['distance'])) {
				return response()->json(['status' => 500, 'message' => 'Error in calculating distance or duration'], 500);
			}

			$total_hours = $this->convertHMSFormatToHours($travelDetails['duration']);
			$distance_km = $travelDetails['distance'];

			$localEnquiry->total_hours = $total_hours;
			$localEnquiry->distance_km = $distance_km;

			$carClass = DriverCarclass::where('carclass_name', $request->vehicle_class)->first();

			if (!$carClass) {
				return response()->json(['status' => 500, 'message' => 'Vehicle class not found'], 500);
			}

			$charges = null;
			$extra_hour_price = $carClass->local_extra_hour_charges;
			$base_hours = (int)$localEnquiry->package;

			if ($base_hours === 8) {
				$charges = $carClass->local_8_hrs_charges;

				if ($total_hours > 8 && $total_hours <= 10) {
					$extra_hours = $total_hours - 8;
					$charges += $extra_hours * $extra_hour_price;
				} elseif ($total_hours > 10 && $total_hours <= 12) {
					$charges = $carClass->local_12_hrs_charges;
				} elseif ($total_hours > 12) {
					$charges = $carClass->local_12_hrs_charges;
					$extra_hours = $total_hours - 12;
					$charges += $extra_hours * $extra_hour_price;
				}
			} elseif ($base_hours === 12) {
				$charges = $carClass->local_12_hrs_charges;

				if ($total_hours > 12) {
					$extra_hours = $total_hours - 12;
					$charges +=  $extra_hours * $extra_hour_price;
				}
			} else {
				return response()->json(['status' => 500, 'message' => 'Invalid package selected'], 500);
			}

			$localEnquiry->total_amount = $charges ;//+ ($localEnquiry->distance_km * 3);

			$localEnquiry->save();

			return response()->json([
				'status' => 200,
				'message' => 'Local data submitted successfully!',
				'enquiry_id' => $localEnquiry->enquiry_id,
			], 200);
	}

	public function OutstationTripRequest(Request $request)
	{
		$outstationEnquiry = new DriverEnquiries();
		$outstationEnquiry->driver_trip_type = $request->driver_trip_type;
		$outstationEnquiry->pickup_location = $request->pickup_location;
		$outstationEnquiry->drop_location = $request->drop_location;
		$outstationEnquiry->pickup_date = $request->pickup_date;
		$outstationEnquiry->pickup_time = $request->pickup_time;
		$outstationEnquiry->ride_type = $request->input('ride_type');
        $outstationEnquiry->drop_date = $request->input('drop_date');
		$outstationEnquiry->vehicle_class = $request->vehicle_class;
		$outstationEnquiry->vehicle_type = $request->vehicle_type;
		$outstationEnquiry->registration_type = $request->registration_type;
	
		$travelDetails = $this->getDistanceAndDuration($request->pickup_location, $request->drop_location);
		
		$total_hours = $this->convertHMSFormatToHours($travelDetails['duration']);
		$distance_km = $travelDetails['distance'];
	
		$outstationEnquiry->total_hours = $total_hours;
		$outstationEnquiry->distance_km = $distance_km;
	
		$carClass = DriverCarclass::where('carclass_name', $request->vehicle_class)->first();
	
		if (!$carClass) {
			return response()->json(['error' => 'Invalid vehicle class selected.'], 400);
		}
	
		$charges = null;

		$base_hours = 12;
		$outstation_base_fare = $carClass->outstation_base_fare;
		$extra_hour_price = $carClass->outstation_extra_hour_charges;
        
        $outstation_base_fare = $carClass->outstation_base_fare;
        $extra_hour_price = $carClass->outstation_extra_hour_charges;
		
        if ($total_hours > $base_hours) {
			$charges = $carClass->outstation_12_hrs_charges;
             $extra_hours = $total_hours - $base_hours;
             $charges += $outstation_base_fare + ($extra_hour_price * $extra_hours);
         } else {
				$charges = $carClass->outstation_12_hrs_charges;
             $charges += $outstation_base_fare;
        }
	
		$outstationEnquiry->total_amount = $charges; //+ ($localEnquiry->distance_km * 3);
	
		$outstationEnquiry->save();
		$id = $outstationEnquiry->enquiry_id;

		return response()->json([
			'status' => 200,
			'message' => 'Outstaion data Submitted Successfully!',
			'enquiry_id' => $id,
		], 200);
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
            $distance = $data['rows'][0]['elements'][0]['distance']['value'] / 1000;
            $durationInSeconds = $data['rows'][0]['elements'][0]['duration']['value'];

            $hours = floor($durationInSeconds / 3600);
            $minutes = floor(($durationInSeconds % 3600) / 60);
            $seconds = $durationInSeconds % 60;

            $formattedDuration = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

            return [
                'distance' => $distance,
                'duration' => $formattedDuration
            ];
        }
	
	private function convertHMSFormatToHours($hms)
	{
		list($hours, $minutes, $seconds) = explode(':', $hms);

		return $hours + ($minutes / 60) + ($seconds / 3600);
	}
	
	public function ContractualTripRequest(Request $request)
	{
		$enquiry = new Contractual();
		$enquiry->name = $request->name;
		$enquiry->email = $request->email;
		$enquiry->mobile_no = $request->mobile_no;
		$enquiry->duration = $request->duration;
		$enquiry->registration_type = $request->registration_type;
		$enquiry->comment = $request->comment;
		$enquiry->customer_id = $request->customer_id;
		$enquiry->status = 1;
		
		$enquiry->save();
		
		return response()->json([
				'status' => 200,
				'message' => 'Contractual Enquiry Submitted Successfully!!',
			], 200);
	}
	
	public function postPersonalInfo(Request $request)
	{
		$validated = $request->validate([
			'enquiry_id' => 'required|integer|exists:driver_enquiries,enquiry_id',
			'customer_name' => 'required|string|max:255',
			'customer_email' => 'required|email|max:255',
			'customer_gender' => 'required|string|max:255',
			'mobile_no' => 'required|string|max:15',
			'alternate_mobile_no' => 'nullable|string|max:15',
			'address' => 'required|string|max:255',
			'driver_language' => 'required|array',
			'otherLanguage' => 'nullable|string|max:50'
		]);

		$localEnquiry = DriverEnquiries::find($validated['enquiry_id']);

		$driver_languages = $validated['driver_language'];
		if (in_array('Other', $driver_languages)) {
			$other_language = $request->input('otherLanguage');
			$driver_languages = array_diff($driver_languages, ['Other']);
			if (!empty($other_language)) {
				$driver_languages[] = $other_language;
			}
		}
		
		$driver_languages_string = implode(',', $driver_languages);
		$localEnquiry->customer_name = $validated['customer_name'];
		$localEnquiry->customer_email = $validated['customer_email'];
		$localEnquiry->customer_gender = $validated['customer_gender'];
		$localEnquiry->customer_id = $request->customer_id;
		$localEnquiry->mobile_no = $validated['mobile_no'];
		$localEnquiry->alternate_mobile_no = $validated['alternate_mobile_no'] ?? null;
		$localEnquiry->address = $validated['address'];
		$localEnquiry->enquiry_status = 1;
		$localEnquiry->driver_language = $driver_languages_string;
		$localEnquiry->save();
		return response()->json([
			'status' => 200,
			'message' => 'Personal Information Submmited Successfully!',
			'enquiry_id' => $localEnquiry->enquiry_id,
		], 200);
	}

	public function reviewTripDetails(Request $request, $id)
	{
		$enquiries = DriverEnquiries::where('enquiry_id', $id)->first();
		if(!$enquiries){
			return response()->json([
				'status' => 404,
				'message' => 'Id not found',
			], 404);
		}
		
		return response()->json([
			'status' => 200,
			'message' => 'Review trip details',
			'enquiries' => $enquiries,
		], 200);
	}
	
	public function allEnquiryRequest(Request $request, $customer_id)
	{
		$enquiries = DriverEnquiries::whereIn('driver_trip_type', ['local', 'outstation'])
			->where('customer_id', $customer_id)
			->whereIn('enquiry_status', [1,2,3,4,5])
			->select('pickup_location','drop_location','enquiry_status','pickup_date','drop_date','enquiry_id')
			->get()
			->map(function ($enquiry) {
					// Modify package_type based on its value
				switch ($enquiry->enquiry_status) {
					case 1:
						$enquiry->enquiry_status = 'Upcoming';
						break;
					case 2:
						$enquiry->enquiry_status = 'Sheduled';
						break;
					case 3:
						$enquiry->enquiry_status = 'Completed';
						break;
					case 5:
						$enquiry->enquiry_status = 'Cancelled';
						break;
					default:
						$enquiry->enquiry_status = 'Unknown';
					}
					return $enquiry;
				});
		
		if(!$enquiries){
			return response()->json([
				'status' => 404,
				'message' => 'Enquiry not found',
			], 404);
		}
		
		return response()->json([
			'status' => 200,
			'message' => 'All Request',
			'enquiries' => $enquiries,
		], 200);
		
	}
	
	public function SpecificEnquiryRequest(Request $request, $enquiry_id)
	{
		$enquiry = DriverEnquiries::whereIn('driver_trip_type', ['local', 'outstation'])
			->where('enquiry_id', $enquiry_id)
			->first();

		if (!$enquiry) {
			return response()->json([
				'status' => 404,
				'message' => 'Enquiry not found',
			], 404);
		}

		switch ($enquiry->enquiry_status) {
			case 1:
				$enquiry->enquiry_status = 'Upcoming';
				break;
			case 2:
				$enquiry->enquiry_status = 'Scheduled';
				break;
			case 3:
				$enquiry->enquiry_status = 'Completed';
				break;
			case 5:
				$enquiry->enquiry_status = 'Cancelled';
				break;
			default:
				$enquiry->enquiry_status = 'Unknown';
		}

		return response()->json([
			'status' => 200,
			'message' => 'Enquiry Request Data',
			'enquiry' => $enquiry,
		], 200);
	}
	
	public function AllContractualEnquiryRequest(Request $request, $customer_id)
	{
	
		$enquiries = Contractual::where('customer_id', $customer_id)
			->whereIn('status', [1,2,3,4,5])
			->get()
			->map(function ($enquiry) {
					// Modify package_type based on its value
				switch ($enquiry->status) {
					case 1:
						$enquiry->status = 'Upcoming';
						break;
					case 2:
						$enquiry->status = 'Sheduled';
						break;
					case 3:
						$enquiry->status = 'Completed';
						break;
					case 5:
						$enquiry->status = 'Cancelled';
						break;
					default:
						$enquiry->enquiry_status = 'Unknown';
					}
					return $enquiry;
				});
		
		if(!$enquiries){
			return response()->json([
				'status' => 404,
				'message' => 'Contractual Enquiry not found',
			], 404);
		}
		
		return response()->json([
			'status' => 200,
			'message' => 'All Contractual Request',
			'enquiries' => $enquiries,
		], 200);
	
	
	}
	
	public function SpecificContratualEnquiryRequest(Request $request, $enquiry_id)
	{
		$enquiry = Contractual::where('id', $enquiry_id)
				->first();
			
				switch ($enquiry->status) {
					case 1:
						$enquiry->status = 'Upcoming';
						break;
					case 2:
						$enquiry->status = 'Sheduled';
						break;
					case 3:
						$enquiry->status = 'Completed';
						break;
					case 5:
						$enquiry->status = 'Cancelled';
						break;
					default:
						$enquiry->status = 'Unknown';
					}
					return $enquiry;
				
		
		if(!$enquiry){
			return response()->json([
				'status' => 404,
				'message' => 'Contractual Enquiry not found',
			], 404);
		}
		
		return response()->json([
			'status' => 200,
			'message' => 'Specific Contractual Request',
			'enquiries' => $enquiry,
		], 200);
	
	
	}


	public function reviewContractualDetails(Request $request)
	{
		$enquiries = Contractual::where('status', 1)->latest()->first();
		
			return response()->json([
				'status' => 200,
				'message' => 'New Contractual Request',
				'enquiries' => $enquiries,
			], 200);

		return response()->json([
			'status' => 404,
			'message' => 'Contractual Enquiry not found',
		], 404);
	}
	
}
