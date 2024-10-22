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
use Illuminate\Support\Facades\Auth;


class MobileEnquiryController extends Controller
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
            $enquiry->vehicle_type = 'Diesel Car';
        }
        if($request->vehicle_type == 'cng'){
            $enquiry->vehicle_type = 'CNG Car';
        }
        if($request->vehicle_type == 'electric'){
            $enquiry->vehicle_type = 'Electric Car';
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
        $enquiry->name_title =$request->input('name_title');
        $enquiry->customer_name = $request->input('firstname') . ' ' . $request->input('middlename').' '. $request->input('lastname');        
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

}
