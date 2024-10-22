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
use App\Models\Extrakilometers;
use App\Models\ExtraExpences;
use App\Models\Refund;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\PriceGroup;
use App\Models\ClassWiseCar;

class CustomerAppCabController extends Controller
{
	public function PostCabbookingOneWay(Request $request)
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
        return response()->json(['success' => true, 'message' => 'Booking submitted successfully','enquiry_id' => $id]);
    }
	
	public function PostCabbookingRoundTrip(Request $request)
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
        return response()->json(['success' => true, 'message' => 'Booking submitted successfully','enquiry_id' => $id]);
    }
	
	public function PostCabbookingLocalTrip(Request $request)
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
        return response()->json(['success' => true, 'message' => 'Booking submitted successfully','enquiry_id' => $id]);
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
	
	public function PostCarDetailsAndPricing(Request $request)
    {
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
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
        return response()->json(['success' => true, 'message' => 'Class and pricing submitted successfully','enquiry_id' => $enquiry->enquiry_id]);
    }
	
	
	public function postBookingDetails(Request $request)
    {
       // dd($request);
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        $enquiry->customer_name = $request->input('first_name') .' '. $request->input('last_name');        
        $enquiry->aadharnumber =$request->input('aadharnumber');
        $enquiry->companyname =$request->input('companyname');
        $enquiry->picklocation =$request->input('picklocation');
        $enquiry->customer_email =$request->input('contactemail');
        $enquiry->customer_mobile =$request->input('customer_mobile');
        $enquiry->address =$request->input('address');
        $enquiry->t_c =$request->input('t&c');
        if (isset($request->alternate_customer_mobile) && is_array($request->alternate_customer_mobile)) {
            $enquiry->alternate_customer_mobile = implode('/', $request->alternate_customer_mobile);
        }else {
            $enquiry->alternate_customer_mobile = null;
        }
        $enquiry->save();
        // return redirect('booking-review?id=' . $enquiryId);
       return response()->json(['success' => true, 'message' => 'Booking Details submitted successfully','enquiry_id' => $enquiry->enquiry_id]);
    }
	
	
	public function submitPaymentForm(Request $request)
	{
       // dd($request);
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);

        $TotalAmount = $enquiry->remaining_amount;
        $AdvanceAmount = $request->input('amount');
        $advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;
        $RemaingAmount = $TotalAmount - $advance;
        $enquiry->prefer_driver_language = implode(',', $request->language);
        $enquiry->advance_amount = $request->input('amount');
		$enquiry->overallpaidamount = $request->input('amount');
        $enquiry->babyseat = $request->input('babyseat');
        $enquiry->customer_id = $request->input('customer_id');
		$enquiry->percent_advance = $request->input('payment');
        $enquiry->remaining_amount = $RemaingAmount;
        $enquiry->confirm_status = 2;
		$enquiry->booking_datetime = now();
        $enquiry->save();

        // $amount = 10; // Example amount
        // $merchantId = 'PGTESTPAYUAT86'; // Your merchant ID
        // $apiKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399'; // Your API key
        // $redirectUrl = "http://127.0.0.1:8000"; // Your redirect URL
        // $order_id = uniqid(); // Example: generate a unique order ID
        
        // $transaction_data = array(
        //     'merchantId' => $merchantId,
        //     'merchantTransactionId' => $order_id,
        //     'merchantUserId' => $order_id,
        //     'amount' => $amount * 100, // PhonePe expects amount in paisa, hence multiply by 100
        //     'redirectUrl' => $redirectUrl,
        //     'redirectMode' => "POST",
        //     'callbackUrl' => $redirectUrl,
        //     'paymentInstrument' => array(    
        //         'type' => 'PAY_PAGE',
        //     )
        // );
    
        // // Encode transaction data
        // $encode = json_encode($transaction_data);
        // $payloadMain = base64_encode($encode);
        // $salt_index = 1; // Example: salt index
        // $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
        // $sha256 = hash("sha256", $payload);
        // $final_x_header = $sha256 . '###' . $salt_index;
        // $requestPayload = json_encode(array('request' => $payloadMain));
        
        // // Initialize cURL session
        // $curl = curl_init();
    
        // // Set cURL options
        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => $requestPayload,
        //     CURLOPT_HTTPHEADER => [
        //         "Content-Type: application/json",
        //         "X-VERIFY: " . $final_x_header,
        //         "accept: application/json"
        //     ],
        // ]);
    
        // // Execute cURL request
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
    
        // // Close cURL session
        // curl_close($curl);
    
        // // Handle cURL errors
        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     // Parse JSON response
        //     $res = json_decode($response);
    
        //     // Check for PAYMENT_INITIATED status
        //     if (isset($res->code) && $res->code == 'PAYMENT_INITIATED') {
        //         $payUrl = $res->data->instrumentResponse->redirectInfo->url;
        //         return redirect()->away($payUrl);
        //     } else {
        //         // Handle other error scenarios
        //         dd($res);
        //     }
        // }
        return response()->json(['success' => true, 'message' => 'Booking Details submitted successfully','enquiry_id' => $enquiry->enquiry_id]);
    }
	
	public function CustomerAllTrips(Request $request, $customer_id)
	{
		$enquirys = Enquiries::where('customer_id', $customer_id)
					->select('enquiry_id','from_location', 'to_location', 'start_journy_date', 'package_type','trip_status')
					->get()
					->map(function ($enquiry) {
						switch ($enquiry->package_type) {
							case 1:
								$enquiry->package_type = 'Local';
								break;
							case 2:
								$enquiry->package_type = 'Outstation';
								break;
							case 3:
								$enquiry->package_type = 'One Way';
								break;
							default:
								$enquiry->package_type = 'Unknown';
						};
						switch ($enquiry->trip_status) {
							case 0:
								$enquiry->trip_status = 'Upcoming';
								break;
							case 1:
								$enquiry->trip_status = 'Completed';
								break;
							case 2:
								$enquiry->trip_status = 'Ongoing';
								break;
							case 3:
								$enquiry->trip_status = 'Cancelled';
								break;
							default:
								$enquiry->package_type = 'Unknown';
						}
						return $enquiry;
					});
			return response()->json(['success' => true, 'message' => 'Enquiry Data', 'enquirys' => $enquirys]);
		}
	
	public function SpecificTripData(Request $request, $id)
	{
		$enquiry = Enquiries::where('enquiry_id', $id)
			->whereIn('confirm_status',[1,2])
			->select('enquiry_id', 'from_location', 'to_location', 'start_journy_date', 'package_type', 'vehicle_name', 'vehicle_class', 'vehicle_type', 'customer_pincode', 'customer_address', 'alternate_customer_mobile', 'customer_mobile', 'customer_email', 'customer_name', 'total_distance', 'number_of_days_trip', 'number_of_persons','trip_otp')
			->first();

		if (!$enquiry) {
			return response()->json([
				'status' => 404,
				'message' => 'No enquiry found',
			], 404);
		}

		switch ($enquiry->package_type) {
			case 1:
				$enquiry->package_type = 'Local';
				break;
			case 2:
				$enquiry->package_type = 'Outstation';
				break;
			case 3:
				$enquiry->package_type = 'One Way';
				break;
			default:
				$enquiry->package_type = 'Unknown'; 
		}

		$paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiry->enquiry_id)->get();
		$extraHours = ExtraHours::where('enquiry_id', $enquiry->enquiry_id)->get();
		$extraKilometers = Extrakilometers::where('enquiry_id', $enquiry->enquiry_id)->get();
		$extraExpences = ExtraExpences::where('enquiry_id', $enquiry->enquiry_id)->get();
		$enquiry->payment_history = $paymentHistorys;
		$enquiry->extra_hours = $extraHours;
		$enquiry->extra_kilometers = $extraKilometers;
		$enquiry->extra_expences = $extraExpences;
		
		return response()->json([
			'status' => 200,
			'message' => 'Completed Trip',
			'enquiries' => $enquiry,
		], 200);
	}

}