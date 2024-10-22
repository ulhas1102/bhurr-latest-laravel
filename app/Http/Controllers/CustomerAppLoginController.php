<?php

namespace App\Http\Controllers;
use App\Models\CarTypes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CustomerAppLoginController extends Controller
{
	public function CustomerLogin(Request $request)
		{
			$request->validate([
				'mobile_number' => 'required|digits:10',
			]);

			$mobileNumber = $request->input('mobile_number');

			$user = User::where('mobile_number', $mobileNumber)->where('access_id', 1)->where('verified_status', 1)->first();

			if ($user) {
				$otp = rand(1000, 9999);
				$user->otp = $otp;
				$user->save();
				$this->sendOtp($mobileNumber, $otp);
				return response()->json([
					'status' => 'success',
					'message' => 'OTP sent successfully to the existing user.',
					'otp' => $otp
				]);
			} else {
				$otp = rand(1000, 9999);
				$newUser = User::create([
					'mobile_number' => $mobileNumber,
					'access_id' => 1,
					'otp' => $otp,
				]);
				$this->sendOtp($mobileNumber, $otp);
				return response()->json([
					'status' => 'success',
					'message' => 'User registered successfully and OTP sent.',
					'otp' => $otp,
					'user_id' => $newUser->id
				]);
			}
		}
		protected function sendOtp($mobileNumber, $otp)
		{
			// Implement the OTP sending logic using your preferred SMS gateway
			// For example, using a mock SMS gateway function:
			// SmsGateway::send($mobileNumber, "Your OTP is: {$otp}");

			// Placeholder for the actual OTP sending logic
			//Log::info("OTP {$otp} sent to {$mobileNumber}");
		}
	
	public function CustomerverifyOtp(Request $request)
		{
			$request->validate([
				'mobile_number' => 'required|digits:10',
				'otp' => 'required|digits:4',
			]);

			$mobileNumber = $request->input('mobile_number');
			$otp = $request->input('otp');

			$user = User::where('mobile_number', $mobileNumber)
						->where('access_id', 1)
						->where('otp', $otp)
						->first();

			if ($user) {
				if ($user->otp == $otp) {
					$user->verified_status = 1;
					$user->otp = null;
					$sessionToken = Str::random(60);
					$user->session_token = $sessionToken;
					$user->save();

					return response()->json([
						'status' => 'success',
						'message' => 'OTP verified successfully.',
						'session_token' => $user->session_token,
						'user_id' => $user->id,
					]);
				} else {
					return response()->json([
						'status' => 'error',
						'message' => 'Invalid OTP. Please try again.',
					], 400);
				}
			} else {
				return response()->json([
					'status' => 'error',
					'message' => 'User not found.',
				], 404);
			}
		}

	
		public function CustomerEmail(Request $request)
		{
			$userId = $request->user_id;
			$user = User::find($userId);
			$user->email = $request->email;
			$user->save();
			
			return response()->json([
					'status' => 'success',
					'message' => 'Email save successfully.',
					'user_id' => $user->id
				]);
		}
	
		public function CustomerDetails(Request $request)
		{
			$userId = $request->user_id;
			$user = User::find($userId);
			$user->name = $request->input('first_name') . ' ' . $request->input('last_name');
			$user->firstname = $request->first_name;
			$user->lastname = $request->last_name;
			$user->save();
			
			return response()->json([
					'status' => 'success',
					'message' => 'First name & Last name save successfully.',
					'user_id' => $user->id
				]);
		}
	
		public function CustomerProfile(Request $request)
		{
			$userId = $request->user_id;
			$user = User::where('id', $userId)->where('access_id', 1)->first();
			if(!$user){
				return response()->json([
					'status' => 'success',
					'message' => 'Customer not found'
				]);
			}
			return response()->json([
					'status' => 'success',
					'message' => 'Customer profile data.',
					'user' => $user
				]);
		}
	
		public function UpdateCustomerProfile(Request $request)
		{
			$userId = $request->user_id;
			$user = User::find($userId);
			if($request->first_name != null){
			$user->firstname = $request->first_name;
			}
			if($request->last_name != null){
			$user->lastname = $request->last_name;
			}
			if($request->last_name != null && $request->first_name != null){
			$user->name = $request->input('first_name') . ' ' . $request->input('last_name');
			}
			if($request->email != null){
			$user->email = $request->email;
			}
			if($request->address1 != null){
			$user->address1 = $request->address1;
			}
			if($request->address2 != null){
			$user->address2 = $request->address2;
			}
			if($request->postalCode != null){
			$user->postalCode = $request->postalCode;
			}
			if($request->city != null){
			$user->city = $request->city;
			}
			if($request->state != null){
			$user->state = $request->state;
			}
			if($request->emergency_email != null){
			$user->emergency_email = $request->emergency_email;
			}
			if($request->emergency_mobile_number != null){
			$user->emergency_mobile_number = $request->emergency_mobile_number;
			}if($request->emergency_address1 != null){
			$user->emergency_address1 = $request->emergency_address1;
			}
			if($request->emergency_address2 != null){
			$user->emergency_address2 = $request->emergency_address2;
			}
			if($request->emergency_city != null){
			$user->emergency_city = $request->emergency_city;
			}
			if($request->emergency_state != null){
			$user->emergency_state = $request->emergency_state;
			}
			$user->save();
			
			return response()->json([
					'status' => 'success',
					'message' => 'Customer profile updated successfully.',
				]);
		
		
		}
}