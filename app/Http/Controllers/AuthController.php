<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Customer;
use App\Models\Enquiries;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeEmail;
use App\Services\FirebaseService;

class AuthController extends Controller
{
    // protected $firebaseService;

    // public function __construct(FirebaseService $firebaseService)
    // {
    //     $this->firebaseService = $firebaseService;
    // }

    public function CustomerRegister(Request $request)
    {
        // Validate and store data
        $user = new User();
        $user->name = $request->input('firstname') . ' ' . $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->save();
    
        return response()->json([
            'status' => 200,
            'message' => 'User registered successfully',
            'id'=> $user->id,
        ]);
    }    
        
    

    public function Authlogin(Request $request)
    {
        $mobile_number = $request->input('mobile_number');

        $user = User::where('mobile_number', $mobile_number)->where('access_id', 1)->where('verified_status', 1)->first();

        if ($user) {
            // Generate and save OTP
            $otp = rand(100000, 999999);
           // $user->otp = $otp;
			$user->otp = 112233;
            $user->save();

         //  $this->sendOTP($user->mobile_number, $otp, $user->country_code);
           // $response = $this->firebaseService->sendOtp($user->country_code . $user->mobile_number);
            //$response = $firebaseService->sendOtp($user->country_code . $user->mobile_number);
            return response()->json(['status' => 'otp_required']);
            return redirect('/driver/review-booking-payment');
        }

        return response()->json(['status' => 'error', 'message' => 'Invalid mobile number or access ID']);
    }

    

    public function verifyOtp(Request $request)
    {
        $mobile_number = $request->input('mobile_number');
        $otp = $request->input('otp');
        $enquiryId = $request->input('enquiry_id');
        $enquiry = Enquiries::find($enquiryId);

        $user = User::where('mobile_number', $mobile_number)->where('otp', $otp)->first();

        if ($user) {
            // Clear OTP and authenticate user
            $user->otp = null;
            $user->verified_status = 1;
            $user->save();
            Auth::login($user);

            // return redirect('booking-details?id=' . $enquiryId);
            return redirect('booking-details?id=' . $enquiryId . '&from=' . $enquiry->from_location . '&to=' . $enquiry->to_location);
        }

        return redirect()->back()->withErrors(['otp' => 'Invalid OTP']);
    }

    // SendVerificationCodeController.php
    public function sendVerificationCode(Request $request)
    {
        $usermobile = User::where('mobile_number', $request->mobile)->where('access_id', 1)->where('verified_status', 1)->first();
        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json([
                'message' => 'User not found.',
            ], 500);
        }else if($usermobile){
            return response()->json([
                'message' => 'User already register.Please try other mobile number....',
            ], 500);
        }

        // Generate and save verification code
        $verificationCode = $this->generateVerificationCode();
        //$user->otp = $verificationCode;
		$user->otp = 112233;
        $user->mobile_number = $request->mobile;
        $user->country_code = '+91';
        $user->access_id = 1;
        $user->save();

        try {

           // $this->sendOTP($user->mobile_number, $verificationCode, $user->country_code);

            return response()->json([
                'message' => 'Verification code sent successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to send verification code.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    private function generateVerificationCode()
    {
        return mt_rand(100000, 999999);
    }


    private function sendOTP($to, $otp, $country_code)
        {
            $sid = 'AC7539ebe8c07cdfa90696d4d9266dcea3';
            $token = '0ca472c29350dba0bfb2fa8994199003';
            $twilio = new Client($sid, $token);
            $twilio->messages->create(
                $country_code.$to,
                [
                    'from' => '+19788006275',
                    'body' => "Your OTP is: $otp",
                ]
            );
        }


        public function verifyOtpRegister(Request $request)
        {
            $otp = $request->input('otp');
    
            $user = User::where('otp', $otp)->first();
    
            if ($user) {
                // Clear OTP and authenticate user
                $user->otp = null;
                $user->verified_status = 1;
                $user->save();
                Auth::login($user);
    
                // return redirect('booking-details?id=' . $enquiryId);
                //return redirect()->route('/');
                return response()->json([
                    'status' => 200,
                    'message' => 'OTP verified successfully',
                    'id'=> $user->id,
                ]);
            }
    
           // return redirect()->back()->withErrors(['otp' => 'Invalid OTP']);
            return response()->json([
                'status' => 404,
                'message' => 'OTP Invalid',
                'id'=> $user->id,
            ]);
        }

        public function verifyOtpLogin(Request $request)
        {
            $otp = $request->input('otp');
        
            // Find user by OTP
            $user = User::where('otp', $otp)->first();
        
            if ($user) {
                // Clear OTP and save
                $user->otp = null;
                $user->save();
        
                // Authenticate the user
                Auth::login($user);
        
                // Redirect to the booking payment review page
                return redirect('/');
                
                // Alternatively, if using named routes, you can use:
                // return redirect()->route('driver.review-booking-payment');
            }
        
            // Redirect back with an error message if OTP is invalid
            return redirect()->back()->withErrors(['otp' => 'Invalid OTP']);
        }
        

        public function CustomerProfile(Request $request)
    {
        // Validate and store data

        $userId = $request->user_id;
        $user = User::find($userId);
        $user->title = $request->title;
        $user->name = $request->input('firstname') . ' ' . $request->input('middlename') . ' ' . $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->middlename = $request->input('middlename');
        $user->lastname = $request->input('lastname');
        $user->gender = $request->input('gender');
        $user->date_of_birth = $request->dateOfBirth; // Ensure field name matches
        $user->save();
    
        return response()->json([
            'status' => 200,
            'message' => 'User Profile updated successfully',
            'id'=> $user->id,
        ]);
    }    
    public function ContactDetails(Request $request)
    {
        // Validate and store data

        $userId = $request->user_id;
        $user = User::find($userId);
        $user->email = $request->email;
        $user->mobile_number = $request->input('mobileNumber');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->postalCode = $request->input('postalCode');
        $user->city = $request->input('city');
        $user->state = $request->state; // Ensure field name matches
        $user->nationality = $request->nationality;
        $user->save();
    
        return response()->json([
            'status' => 200,
            'message' => 'Contact details updated successfully',
            'id'=> $user->id,
        ]);
    }    

    public function EmergencyContactDetails(Request $request)
    {
        // Validate and store data

        $userId = $request->user_id;
        $user = User::find($userId);
        $user->emergency_email = $request->emergency_email;
        $user->emergency_mobile_number = $request->input('emergency_mobileNumber');
        $user->emergency_address1 = $request->input('emergency_address1');
        $user->emergency_address2 = $request->input('emergency_address2');
        $user->emergency_postalCode = $request->input('emergency_postalCode');
        $user->emergency_city = $request->input('emergency_city');
        $user->emergency_state = $request->emergency_state; // Ensure field name matches
        $user->emergency_nationality = $request->emergency_country;
        $user->save();
    
        return response()->json([
            'status' => 200,
            'message' => 'Contact details updated successfully',
            'id'=> $user->id,
        ]);
    }    

}
