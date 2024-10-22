<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Exception;
use App\Models\PaymentHistorys;
use App\Models\Enquiries;
use App\Models\Carclass;
use App\Models\CarTypes;
use App\Models\CarDetail;
use App\Models\Cancellation;
use App\Models\ExtraHours;
use App\Models\Refund;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\Grivence;
use App\Mail\GrivenceForm;
use App\Mail\AdminGrivenceForm;
use App\Models\Contactus;
use App\Mail\ContactForm;
use App\Mail\AdminContactForm;
use App\Models\SpecialBookingForm;
use App\Mail\SpecialBooking;
use App\Mail\AdminSpecialBookingForm;
use Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\PriceGroup;
use App\Models\ClassWiseCar;

class FrontendEnquiryController extends Controller
{
    //
    public function AddnewEnquiry(Request $request)
    {

        $fromLocation = $request->input('from');
        $toLocation = $request->input('to');
    
        $enquiry = new Enquiries();
        $enquiry->package_type = $request->input('package_type');
        $enquiry->from_location = $request->input('from');
        $enquiry->to_location = $request->input('to');
        $enquiry->start_journy_date = $request->input('pick_up');
        $enquiry->start_journy_time = $request->input('pick_up_at');
        $enquiry->round_return = $request->input('round_return');
        $enquiry->number_of_persons = $request->input('no_of_person');
        if($request->package_type == 3){
        $distanceData = $this->getDistanceAndDuration($fromLocation, $toLocation);
        $enquiry->duration = $distanceData['duration'];
        $enquiry->total_distance = $distanceData['distance'];
        $dailyDistanceLimit = 350; 
        $totalDistance = $distanceData['distance'];
        $numberOfDays = ceil($totalDistance / $dailyDistanceLimit);
        $enquiry->number_of_days_trip = $numberOfDays;
        }else if($request->package_type == 2){
        $distanceData = $this->getDistanceAndDuration($fromLocation, $toLocation);
        $enquiry->duration = $distanceData['duration'];
        $enquiry->total_distance = $distanceData['distance'];
        $dailyDistanceLimit = 350; 
        $totalDistance = $distanceData['distance'];
        $numberOfDays = ceil($totalDistance / $dailyDistanceLimit);
        $enquiry->number_of_days_trip = $numberOfDays;
        }else{
            $enquiry->total_distance = $request->input('distance');
            $dailyDistanceLimit = 350; 
            $totalDistance =$request->input('distance');
            $numberOfDays = ceil($totalDistance / $dailyDistanceLimit);
            $enquiry->number_of_days_trip = $numberOfDays;
        }
        $enquiry->save();

        $id = $enquiry->enquiry_id;

        return response()->json(['success' => true, 'message' => 'Booking submitted successfully','id' => $id]);

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


public function submitcarlisting(Request $request)
    {
        //dd($request);
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        //$enquiry->vehicle_type = $request->input('vehicle_type');
        if($request->vehicle_type == 'diesel'){
            $enquiry->vehicle_type = 'Diesel/Petrol';
        }
        if($request->vehicle_type == 'cng'){
            $enquiry->vehicle_type = 'CNG';
        }
        if($request->vehicle_type == 'electric'){
            $enquiry->vehicle_type = 'Electric';
        }
        $enquiry->vehicle_class = $request->input('car_class');
        $enquiry->total_amount = $request->input('total_amount');
        $enquiry->remaining_amount = $request->input('total_amount');
        $enquiry->save();
         if(Auth::check()){
            return redirect('booking-details?id=' . $enquiryId . '&from=' . $enquiry->from_location . '&to=' . $enquiry->to_location);
         }else{
            return redirect('customer-login?id=' . $enquiryId);
         }
    }

    public function postBookingDetails(Request $request)
    {
       // dd($request);
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        $enquiry->customer_name = $request->input('firstname') .' '. $request->input('lastname');        
        $enquiry->aadharnumber =$request->input('aadharnumber');
        $enquiry->companyname =$request->input('companyname');
        $enquiry->gstno =$request->input('gstno');
        $enquiry->picklocation =$request->input('picklocation');
        $enquiry->customer_email =$request->input('contactemail');
        $enquiry->customer_mobile =$request->input('customer_mobile');
        $enquiry->address =$request->input('address');
        $enquiry->t_c =$request->input('t&c');
        if (isset($request->contactmobile) && is_array($request->contactmobile)) {
            $enquiry->alternate_customer_mobile = implode('/', $request->contactmobile);
        } else {
            $enquiry->alternate_customer_mobile = null;
        }
        $enquiry->save();
        // return redirect('booking-review?id=' . $enquiryId);
        return redirect('booking-review?id=' . $enquiryId . '&from=' . $enquiry->from_location . '&to=' . $enquiry->to_location);

    }
	
	public function cancelRide(Request $request)
{
    $rideId = $request->input('ride_id');
    $cancelTime = Carbon::parse($request->input('cancel_time'));
    $currentTime = Carbon::now();
    //dd($cancelTime);
    // Fetch ride details from database
    $ride = Enquiries::find($rideId);
    $rideStartTime = Carbon::parse($ride->booking_datetime);
    $advancePayment = $ride->advance_amount;

   

    $refundAmount = 0;
   
    // $cancelTime is after $rideStartTime
    $minutesDiff = $rideStartTime->diffInMinutes($cancelTime);
    $hoursDiff = $rideStartTime->diffInHours($cancelTime);
	//dd($minutesDiff,$hoursDiff);
	if($ride->package_type == 1){
		$cancellation = Cancellation::where('package_type', 'local')->first();
		$c6hourspercentage = $cancellation->c6_hours_before;
		$c30minutespercentage = $cancellation->c30_minu_before;
    if ($minutesDiff <= 30) {
        //$refundAmount = $advancePayment;
		$refundAmount = $c30minutespercentage/100 * $advancePayment;
		} elseif ($hoursDiff <= 6) {
			// Assuming $ride->percent_advance is "50%", "20%", or "100%"
			if ($ride->percent_advance == "50" || $ride->percent_advance == "20" || $ride->percent_advance == "100") {
				//$refundAmount = $advancePayment * 0.5;
				$refundAmount = $c6hourspercentage/100 * $advancePayment;
			}
		}
	}else if($ride->package_type == 2){
	$cancellation = Cancellation::where('package_type', 'outstation')->first();
		$c6hourspercentage = $cancellation->c6_hours_before;
		$c30minutespercentage = $cancellation->c30_minu_before;
	if ($minutesDiff <= 30) {
		$refundAmount = $c30minutespercentage/100 * $advancePayment;
        //$refundAmount = $advancePayment;
		} elseif ($hoursDiff <= 6) {
			// Assuming $ride->percent_advance is "50%", "20%", or "100%"
			//if ($ride->percent_advance == "50" || $ride->percent_advance == "20" || $ride->percent_advance == "100") {
				//$refundAmount = $advancePayment * 0.5;
				$refundAmount = $c6hourspercentage/100 * $advancePayment;
			//}
		}
	
	}else if($ride->package_type == 3){
	$cancellation = Cancellation::where('package_type', 'One way')->first();
		$c6hourspercentage = $cancellation->c6_hours_before;
		$c30minutespercentage = $cancellation->c30_minu_before;
	if ($minutesDiff <= 30) {
		$refundAmount = $c30minutespercentage/100 * $advancePayment;
        //$refundAmount = $advancePayment;
		} elseif ($hoursDiff <= 6) {
			// Assuming $ride->percent_advance is "50%", "20%", or "100%"
			//if ($ride->percent_advance == "50" || $ride->percent_advance == "20" || $ride->percent_advance == "100") {
				//$refundAmount = $advancePayment * 0.5;
				$refundAmount = $c6hourspercentage/100 * $advancePayment;
			//}
		}
	
	}
	


    // Save refund details
    $refund = new Refund();
    $refund->enquiry_id = $rideId;
    $refund->refund_amount = $refundAmount;
    $refund->refund_time = $currentTime;
    $refund->save();

    // Update ride status to cancelled
	$ride->refund_status = 1;
	$ride->refund_time = $refundAmount;
	$ride->refund_amount = 	$currentTime;
    $ride->trip_status = 2;
	$ride->refund_paid_status = 0;
    $ride->save();

    // Flash success message
    $request->session()->flash('success', 'Booking cancelled successfully! Your refund amount will credit to your account.');

    // Redirect back with a success message
    return redirect()->back();
}
	
public function gePriceDetails(Request $request)
{
    $enquiryId = $request->query('enquiry_id');
    $enquiry = Enquiries::find($enquiryId);

    $id = $request->query('dataid');
    $fromLocation = $request->query('from_location');
    $userCoordinates = $this->convertAddressToLatLng($fromLocation);

    if (!$userCoordinates) {
        return response()->json(['error' => 'Unable to retrieve user location.'], 400);
    }

    $carClasses = Carclass::where('car_class', $id)->get();
    $formattedData = [];

    foreach ($carClasses as $carClass) {
        $priceGroups = PriceGroup::where('car_class_id', $carClass->carclass_id)->get();
        $appliedPriceGroup = null;

        foreach ($priceGroups as $priceGroup) {
            $priceGroupCoordinates = $this->convertAddressToLatLng($priceGroup->from_location);
            if ($priceGroupCoordinates) {
                $cityDiameter = floatval(str_replace(',', '', $priceGroup->city_diameter));
                $distance = $this->calculateDistance(
                    $userCoordinates['lat'], 
                    $userCoordinates['lng'], 
                    $priceGroupCoordinates['lat'], 
                    $priceGroupCoordinates['lng']
                );

                if ($distance <= $cityDiameter) {
                    $appliedPriceGroup = $priceGroup;
                    break;
                }
            }
        }

        $carNames = ClassWiseCar::where('class_name', $carClass->car_class)
            ->pluck('car_name')
            ->toArray();
        if (empty($carNames)) {
            $carNames = ['No cars'];
        }

        $classData = [
            'car_class' => $carClass->car_class,
            'seating_capacity' => $carClass->seating_capacity,
            'luggage_capacity' => $carClass->luggage_capacity,
            'oneway_disel_per_km_charges' => $appliedPriceGroup ? $appliedPriceGroup->oneway_disel_per_km_charges : $carClass->oneway_disel_per_km_charges,
            'oneway_base_fare' => $appliedPriceGroup ? $appliedPriceGroup->oneway_base_fare : $carClass->oneway_base_fare,
            'oneway_cng_per_km_charges' => $appliedPriceGroup ? $appliedPriceGroup->oneway_cng_per_km_charges : $carClass->oneway_cng_per_km_charges,
            'electric_per_km_charges' => $appliedPriceGroup ? $appliedPriceGroup->electric_per_km_charges : $carClass->electric_per_km_charges,
            'local_disel_per_km_charges' => $appliedPriceGroup ? $appliedPriceGroup->local_disel_per_km_charges : $carClass->local_disel_per_km_charges,
            'local_cng_per_km_charges' => $appliedPriceGroup ? $appliedPriceGroup->local_cng_per_km_charges : $carClass->local_cng_per_km_charges,
            'local_base_fare' => $appliedPriceGroup ? $appliedPriceGroup->local_base_fare : $carClass->local_base_fare,
            'outstation_base_fare' => $appliedPriceGroup ? $appliedPriceGroup->outstation_base_fare : $carClass->outstation_base_fare,
            'outstation_cng_per_km_charges' => $appliedPriceGroup ? $appliedPriceGroup->outstation_cng_per_km_charges : $carClass->outstation_cng_per_km_charges,
            'outstation_disel_per_km_charges' => $appliedPriceGroup ? $appliedPriceGroup->outstation_disel_per_km_charges : $carClass->outstation_disel_per_km_charges,
            'class_image' => $carClass->class_image,
            'cars' => $carNames
        ];

        $formattedData[] = $classData;
    }

    $packageType = $enquiry->package_type;
    $distance = $enquiry->total_distance;

    // Assuming the first car class is used for calculations
    if (count($formattedData) > 0) {
        $carClassData = $formattedData[0];

        if ($packageType == 1) {
            $bothTwoWayDistance = $distance * 2;
            $diselTotal = 0;
            $cngTotal = 0;
            $electricTotal = 0;

            // Diesel Calculation
            if ($bothTwoWayDistance <= 300) {
                $diselTotal = (2 * ($bothTwoWayDistance * (float)$carClassData['local_disel_per_km_charges']) + (float)$carClassData['local_base_fare']);
            } elseif ($bothTwoWayDistance > 300 && $bothTwoWayDistance <= 600) {
                $excessDistance = $bothTwoWayDistance - 300;
                $diselTotal = (2 * (300 * (float)$carClassData['local_disel_per_km_charges'])) + (2 * ($excessDistance * (float)$carClassData['local_disel_per_km_charges'])) + (float)$carClassData['local_base_fare'];
            } elseif ($bothTwoWayDistance > 600) {
                $excessDistance = $bothTwoWayDistance - 900;
                $diselTotal = (3 * (300 * (float)$carClassData['local_disel_per_km_charges'])) + (3 * ($excessDistance * (float)$carClassData['local_disel_per_km_charges'])) + (float)$carClassData['local_base_fare'];
            }

            // CNG Calculation
            if ($bothTwoWayDistance <= 300) {
                $cngTotal = (2 * ($bothTwoWayDistance * (float)$carClassData['local_cng_per_km_charges']) + (float)$carClassData['local_base_fare']);
            } elseif ($bothTwoWayDistance > 300 && $bothTwoWayDistance <= 600) {
                $excessDistance = $bothTwoWayDistance - 300;
                $cngTotal = (2 * (300 * (float)$carClassData['local_cng_per_km_charges'])) + (2 * ($excessDistance * (float)$carClassData['local_cng_per_km_charges'])) + (float)$carClassData['local_base_fare'];
            } elseif ($bothTwoWayDistance > 600) {
                $excessDistance = $bothTwoWayDistance - 900;
                $cngTotal = (3 * (300 * (float)$carClassData['local_cng_per_km_charges'])) + (3 * ($excessDistance * (float)$carClassData['local_cng_per_km_charges'])) + (float)$carClassData['local_base_fare'];
            }

            // Electric Calculation
            if ($bothTwoWayDistance <= 300) {
                $electricTotal = (2 * ($bothTwoWayDistance * (float)$carClassData['electric_per_km_charges']) + (float)$carClassData['local_base_fare']);
            } elseif ($bothTwoWayDistance > 300 && $bothTwoWayDistance <= 600) {
                $excessDistance = $bothTwoWayDistance - 300;
                $electricTotal = (2 * (300 * (float)$carClassData['electric_per_km_charges'])) + (2 * ($excessDistance * (float)$carClassData['electric_per_km_charges'])) + (float)$carClassData['local_base_fare'];
            } elseif ($bothTwoWayDistance > 600) {
                $excessDistance = $bothTwoWayDistance - 900;
                $electricTotal = (3 * (300 * (float)$carClassData['electric_per_km_charges'])) + (3 * ($excessDistance * (float)$carClassData['electric_per_km_charges'])) + (float)$carClassData['local_base_fare'];
            }

            return response()->json([
                'diesel_total' => number_format($diselTotal, 2),
                'cng_total' => number_format($cngTotal, 2),
                'electric_total' => number_format($electricTotal, 2),
				'formattedData' => $formattedData
            ]);
        }else if ($packageType == 2) {
			$bothTwoWaydistance = $distance * 2;

			// Calculate Diseltotal
			$Diseltotal = 0;
			if ($bothTwoWaydistance <= 300) {
				$Diseltotal = (2 * ($bothTwoWaydistance * (float)$carClassData['outstation_disel_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			} elseif ($bothTwoWaydistance > 300 && $bothTwoWaydistance <= 600) { // 2 * 300 = 600
				$excessDistance = $bothTwoWaydistance - 300;
				$Diseltotal = (2 * (300 * (float)$carClassData['outstation_disel_per_km_charges'])) + (2 * ($excessDistance * (float)$carClassData['outstation_disel_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			} elseif ($bothTwoWaydistance > 600) {
				$excessDistance = $bothTwoWaydistance - 600;
				$Diseltotal = (3 * (300 * (float)$carClassData['outstation_disel_per_km_charges'])) + (3 * ($excessDistance * (float)$carClassData['outstation_disel_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			}
			$Diseltotal = number_format($Diseltotal, 2); 

			// Calculate Cngtotal
			$Cngtotal = 0;
			if ($bothTwoWaydistance <= 300) {
				$Cngtotal = (2 * ($bothTwoWaydistance * (float)$carClassData['outstation_cng_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			} elseif ($bothTwoWaydistance > 300 && $bothTwoWaydistance <= 600) {
				$excessDistance = $bothTwoWaydistance - 300;
				$Cngtotal = (2 * (300 * (float)$carClassData['outstation_cng_per_km_charges'])) + (2 * ($excessDistance * (float)$carClassData['outstation_cng_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			} elseif ($bothTwoWaydistance > 600) {
				$excessDistance = $bothTwoWaydistance - 600;
				$Cngtotal = (3 * (300 * (float)$carClassData['outstation_cng_per_km_charges'])) + (3 * ($excessDistance * (float)$carClassData['outstation_cng_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			}
			$Cngtotal = number_format($Cngtotal, 2);
			

			// Calculate Elctrictotal
			$Elctrictotal = 0;
			if ($bothTwoWaydistance <= 300) {
				$Elctrictotal = (2 * ($bothTwoWaydistance * (float)$carClassData['electric_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			} elseif ($bothTwoWaydistance > 300 && $bothTwoWaydistance <= 600) {
				$excessDistance = $bothTwoWaydistance - 300;
				$Elctrictotal = (2 * (300 * (float)$carClassData['electric_per_km_charges'])) + (2 * ($excessDistance * (float)$carClassData['electric_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			} elseif ($bothTwoWaydistance > 600) {
				$excessDistance = $bothTwoWaydistance - 600;
				$Elctrictotal = (3 * (300 * (float)$carClassData['electric_per_km_charges'])) + (3 * ($excessDistance * (float)$carClassData['electric_per_km_charges'])) + (float)$carClassData['outstation_base_fare'];
			}
			$Elctrictotal = number_format($Elctrictotal, 2);
			
			
			return response()->json([
                'diesel_total' => $Diseltotal,
                'cng_total' => $Cngtotal,
                'electric_total' => $Elctrictotal,
				'formattedData' => $formattedData
            ]);
		}else if ($packageType == 3) {
			$bothTwoWaydistance = $distance * 2;
			$Diseltotal = 0;
			// Diesel Total Calculation
			if ($bothTwoWaydistance <= 300) {
				$Diseltotal = (2 * ($bothTwoWaydistance * floatval($carClassData['oneway_disel_per_km_charges'])) + floatval($carClassData['oneway_base_fare']));
			} elseif ($bothTwoWaydistance > 300 && $bothTwoWaydistance <= 2 * 300) {
				// Excess distance up to 2 times the daily limit
				$excessDistance = $bothTwoWaydistance - 300;
				$Diseltotal = (2 * (300 * floatval($carClassData['oneway_disel_per_km_charges'])) + 
							  2 * ($excessDistance * floatval($carClassData['oneway_disel_per_km_charges'])) + 
							  floatval($carClassData['oneway_base_fare']));
			} elseif ($bothTwoWaydistance > 2 * 300) {
				// Excess distance above 2 times the daily limit
				$excessDistance = $bothTwoWaydistance - 3 * 300;
				$Diseltotal = (3 * (300 * floatval($carClassData['oneway_disel_per_km_charges'])) + 
							  3 * ($excessDistance * floatval($carClassData['oneway_disel_per_km_charges'])) + 
							  floatval($carClassData['oneway_base_fare']));
			}
			$Diseltotal = number_format($Diseltotal, 2);
			
			$Cngtotal = 0;
			// CNG Total Calculation
			if ($bothTwoWaydistance <= 300) {
				$Cngtotal = (2 * ($bothTwoWaydistance * floatval($carClassData['oneway_cng_per_km_charges'])) + floatval($carClassData['oneway_base_fare']));
			} elseif ($bothTwoWaydistance > 300 && $bothTwoWaydistance <= 2 * 300) {
				$excessDistance = $bothTwoWaydistance - 300;
				$Cngtotal = (2 * (300 * floatval($carClassData['oneway_cng_per_km_charges'])) + 
							 2 * ($excessDistance * floatval($carClassData['oneway_cng_per_km_charges'])) + 
							 floatval($carClassData['oneway_base_fare']));
			} elseif ($bothTwoWaydistance > 2 * 300) {
				$excessDistance = $bothTwoWaydistance - 3 * 300;
				$Cngtotal = (3 * (300 * floatval($carClassData['oneway_cng_per_km_charges'])) + 
							 3 * ($excessDistance * floatval($carClassData['oneway_cng_per_km_charges'])) + 
							 floatval($carClassData['oneway_base_fare']));
			}
			$Cngtotal = number_format($Cngtotal, 2);
			
				$Elctrictotal = 0;
			// Electric Total Calculation
			if ($bothTwoWaydistance <= 300) {
				$Elctrictotal = (2 * ($bothTwoWaydistance * floatval($carClassData['electric_per_km_charges'])) + floatval($carClassData['oneway_base_fare']));
			} elseif ($bothTwoWaydistance > 300 && $bothTwoWaydistance <= 2 * 300) {
				$excessDistance = $bothTwoWaydistance - 300;
				$Elctrictotal = (2 * (300 * floatval($carClassData['electric_per_km_charges'])) + 
								 2 * ($excessDistance * floatval($carClassData['electric_per_km_charges'])) + 
								 floatval($carClassData['oneway_base_fare']));
			} elseif ($bothTwoWaydistance > 2 * 300) {
				$excessDistance = $bothTwoWaydistance - 3 * 300;
				$Elctrictotal = (3 * (300 * floatval($carClassData['electric_per_km_charges'])) + 
								 3 * ($excessDistance * floatval($carClassData['electric_per_km_charges'])) + 
								 floatval($carClassData['oneway_base_fare']));
			}
			$Elctrictotal = number_format($Elctrictotal, 2);
			
			return response()->json([
                'diesel_total' => $Diseltotal,
                'cng_total' => $Cngtotal,
                'electric_total' => $Elctrictotal,
				'formattedData' => $formattedData
            ]);


		}

    }

    return response()->json($formattedData);
}


    private function convertAddressToLatLng($address)
    {
        $apiKey = 'AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE';  
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($address) . "&key=" . $apiKey;

        $response = Http::get($url);
        $data = $response->json();

        if (isset($data['results'][0]['geometry']['location'])) {
            return [
                'lat' => $data['results'][0]['geometry']['location']['lat'],
                'lng' => $data['results'][0]['geometry']['location']['lng'],
            ];
        }

        return null;
    }

    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadiusKm = 6371;

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
             cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
             sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadiusKm * $c;
    }
	
	
	 public function blogs(Request $request)
    {
        $blogs = Blog::where('status', "Published")->get();
        return view('frontend.view-blogs', compact('blogs'));
    }

    public function blogSingle($category, $slug)
    {
        $catename = str_replace('-', ' ', $category);
        $blog = Blog::where('category_name', $catename)->where('slug', $slug)->where('status', "Published")->first();
        $featuredBlogs=Blog::where('status', "Published")->inRandomOrder()->limit(3)->get();
        $tags= Tag::all();
        return view('frontend.individual-blog', compact('blog', 'featuredBlogs', 'tags'));
    }
	
	public function blogSinglenew($subcategory, $category, $slug)
    {
        $catename = str_replace('-', ' ', $category);
        $subcatename = str_replace('-', ' ', $subcategory);
        $blog = Blog::where('category_name', $catename)->where('child_category_name', $subcatename)->where('slug', $slug)->where('status', "Published")->first();
        $featuredBlogs=Blog::where('status', "Published")->inRandomOrder()->limit(3)->get();
        $tags= Tag::all();
        return view('frontend.individual-blog', compact('blog', 'featuredBlogs', 'tags'));
    }

    public function tagname($tag){
        $demotag = str_replace('-', ' ', $tag);
        $blogs = Blog::where('tags_name', 'like', '%' . $demotag . '%')
                     ->where('status', 'Published')
                     ->get(); // Use get() to retrieve all matching blogs
        
        return view('frontend.tag-single', compact('blogs'));
    }
	
	public function postGrivenceResolutionForm(Request $request)
	{
		$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'mobile_no' => 'required|string|max:15',
            'trip_details' => 'required|string|max:500',
            'incident_date' => 'required|string|max:500',
            'incident_location' => 'required|string|max:500',
            'description' => 'required|string|max:500',
        ]);
		
		$grivence = new Grivence();
		
		$grivence->name = $request->name;
		$grivence->email = $request->email;
		$grivence->mobile_no = $request->mobile_no;
		$grivence->trip_details = $request->trip_details;
		$grivence->incident_date = $request->incident_date;
		$grivence->incident_location = $request->incident_location;
		$grivence->description = $request->description;
		
		$grivence->save();
		
   		 Mail::to($grivence->email)->send(new GrivenceForm($grivence));
   		 Mail::to("admin@bhurr.co.in")->send(new AdminGrivenceForm($grivence));
		
		
		return redirect()->back()->with('success', 'Form Submitted Successfully!!');
	}
	
	public function postContactForm(Request $request)
	{
		$request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'mobile_no' => 'required|string|max:500',
            'description' => 'required|string|max:500',
        ]);
		
		$contact = new Contactus();
		
		$contact->first_name = $request->first_name;
		$contact->last_name = $request->last_name;
		$contact->email = $request->email;
		$contact->mobile_no = $request->mobile_no;
		$contact->description = $request->description;
	
		$contact->save();
		
   		 Mail::to($contact->email)->send(new ContactForm($contact));
		 Mail::to("admin@bhurr.co.in")->send(new AdminContactForm($contact));
		
		return redirect()->back()->with('success', 'Form Submitted Successfully!!');
	}
	
	public function postSpecialBookingForm(Request $request)
	{
		$specialBooking = new SpecialBookingForm();
		
		$specialBooking->name = $request->name;
		$specialBooking->email = $request->email;
		$specialBooking->mobile_no = $request->mobile_no;
		$specialBooking->address = $request->address;
		$specialBooking->car_class = $request->car_class;
		$specialBooking->vehicle_volume = $request->vehicle_volume;
		$specialBooking->company_contact_number = $request->company_contact_number;
		$specialBooking->company_email = $request->company_email;

		$specialBooking->save();
		
		 Mail::to($specialBooking->email)->send(new SpecialBooking($specialBooking));
		 Mail::to("ulhasjohari269@gmail.com")->send(new AdminSpecialBookingForm($specialBooking));
		
		return redirect()->back()->with('success', 'Booking Saved Successfully!!');
		
		
	}


}
