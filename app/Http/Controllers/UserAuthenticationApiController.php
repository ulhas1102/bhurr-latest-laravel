<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Driver;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserAuthenticationApiController extends Controller
{
    public function UserRegistration(Request $request)
	{
		// Ensure `register_as` and `also_register_for` are integers
		$registerAs = (int) $request->register_as;
		$alsoRegisterFor = (int) $request->also_register_for;

		// Initialize variables
		$otp = rand(100000, 999999); // Generate OTP once

		// Vendor Registration
		if ($registerAs === 1) {
			
			$existingVendor = User::where('email', $request->email)
								  ->where('access_id', 4)
								  ->where('verified_status', 1)
								  ->first();
			if ($existingVendor) {
				return response()->json(['success' => false, 'message' => 'Vendor already exists']);
			}

			$vendor = new Vendor;
			$vendor->name = $request->name;
			$vendor->email = $request->email;
			$vendor->address_one = $request->address_one;
			$vendor->address_two = $request->address_two;
			$vendor->contact_no = $request->contact_no;
			$vendor->alternate_contact_no = $request->alternate_contact_no;
			$vendor->save();

			$user = new User;
			$user->name = $request->name;
			$user->email = $request->email;
			$user->mobile_number = $request->contact_no;
			$user->state = $request->state;
			$user->city = $request->city;
			$user->address1 = $request->address_one;
			$user->address2 = $request->address_two;
			$user->postalCode = $request->postalCode;
			$user->nationality = $request->nationality;
			$user->vendor_accessId = $vendor->id;
			$user->otp = $otp;
			$user->access_id = 4;
			$user->save();

			if ($alsoRegisterFor === 1) {
				
				
				$existingDriver = User::where('email', $request->email)
									  ->where('access_id', 3)
									  ->where('verified_status', 1)
									  ->first();
				if ($existingDriver) {
					return response()->json(['success' => false, 'message' => 'Driver already exists']);
				}

				$driver = new Driver;
				$driver->name = $request->name;
				$driver->email = $request->email;
				$driver->address_one = $request->address_one;
				$driver->address_two = $request->address_two;
				$driver->mobile_number = $request->contact_no;
				$driver->alternate_contact_no = $request->alternate_contact_no;
				$driver->vendor_id = $vendor->id;
				$driver->save();

				$user = new User;
				$user->name = $request->name;
				$user->email = $request->email;
				$user->mobile_number = $request->contact_no;
				$user->state = $request->state;
				$user->city = $request->city;
				$user->address1 = $request->address_one;
				$user->address2 = $request->address_two;
				$user->postalCode = $request->postalCode;
				$user->nationality = $request->nationality;
				$user->driver_accessId = $driver->driver_id;
				//$user->otp = $otp;
				$user->access_id = 3;
				$user->save();
			}

			// Send OTP email
			$this->sendOtpEmail($user, $otp);

			return response()->json(['success' => true, 'message' => 'Vendor registered successfully', 'vendor' => $vendor]);

		// Driver Registration
		} else if ($registerAs === 2) {
			$existingDriver = User::where('email', $request->email)
								  ->where('access_id', 3)
								  ->where('verified_status', 1)
								  ->first();
			if ($existingDriver) {
				return response()->json(['success' => false, 'message' => 'Driver already exists']);
			}

			$driver = new Driver;
			$driver->name = $request->name;
			$driver->email = $request->email;
			$driver->mobile_number = $request->contact_no;
			$driver->alternate_contact_no = $request->alternate_contact_no;
			$driver->address_one = $request->address_one;
			$driver->address_two = $request->address_two;
			$driver->save();

			$user = new User;
			$user->name = $request->name;
			$user->email = $request->email;
			$user->mobile_number = $request->contact_no;
			$user->address1 = $request->address_one;
			$user->address2 = $request->address_two;
			$user->state = $request->state;
			$user->city = $request->city;
			$user->postalCode = $request->postalCode;
			$user->nationality = $request->nationality;
			$user->driver_accessId = $driver->driver_id;
			$user->otp = $otp;
			$user->access_id = 3;
			$user->save();

			if ($alsoRegisterFor === 2) {
				
				$existingVendor = User::where('email', $request->email)
									  ->where('access_id', 4)
									  ->where('verified_status', 1)
									  ->first();
				if ($existingVendor) {
					return response()->json(['success' => false, 'message' => 'Vendor already exists']);
				}

				$vendor = new Vendor;
				$vendor->name = $request->name;
				$vendor->email = $request->email;
				$vendor->contact_no = $request->contact_no;
				$vendor->alternate_contact_no = $request->alternate_contact_no;
				$vendor->driver_id = $driver->driver_id;
				$vendor->save();

				$user = new User;
				$user->name = $request->name;
				$user->email = $request->email;
				$user->mobile_number = $request->contact_no;
				$user->address1 = $request->address_one;
				$user->address2 = $request->address_two;
				$user->state = $request->state;
				$user->city = $request->city;
				$user->postalCode = $request->postalCode;
				$user->nationality = $request->nationality;
				$user->vendor_accessId = $vendor->id;
				$user->access_id = 4;
				$user->save();
			}

			// Send OTP email
			$this->sendOtpEmail($user, $otp);

			return response()->json(['success' => true, 'message' => 'Driver registered successfully', 'driver' => $driver]);
		} else {
			return response()->json(['success' => false, 'message' => 'Invalid registration type']);
		}
	}
	
	public function VendorRegistration(Request $request)
	{
			$registerAs = $request->register_as;
			$otp = rand(100000, 999999);

			$existingVendor = Vendor::where('email', $request->email)
								  ->where('access_id', 4)
								  ->first();
			if ($existingVendor) {
				return response()->json(['success' => false, 'message' => 'Vendor already exists']);
			}

			$vendor = new Vendor;
			$vendor->name = $request->name;
			$vendor->email = $request->email;
			$vendor->contact_no = $request->contact_no;
			$vendor->alternate_contact_no = $request->alternate_contact_no;
			$vendor->address_one = $request->address_one;
			$vendor->address_two = $request->address_two;
			$vendor->state = $request->state;
			$vendor->company_name = $request->company_name;
			$vendor->city = $request->city;
			$vendor->postalCode = $request->postalCode;
			$vendor->nationality = $request->nationality;
			$vendor->otp = $otp;
			$vendor->access_id = 4;
			$vendor->save();

			$this->sendOtpEmail($vendor, $otp);

			return response()->json(['success' => true, 'message' => 'Vendor registered successfully', 'vendor' => $vendor]);
	}
	
	public function DriverRegistration(Request $request)
	{
		$registerAs = (int) $request->register_as;
		
		$otp = rand(100000, 999999);
		// Driver Registration
		 if ($registerAs === 2) {
			$existingDriver = User::where('email', $request->email)
								  ->where('access_id', 3)
								  //->where('verified_status', 1)
								  ->first();
			if ($existingDriver) {
				return response()->json(['success' => false, 'message' => 'Driver already exists']);
			}
			$driver = new Driver;
			$driver->name = $request->name;
			$driver->email = $request->email;
			$driver->mobile_number = $request->contact_no;
			$driver->alternate_contact_no = $request->alternate_contact_no;
			$driver->address_one = $request->address_one;
			$driver->address_two = $request->address_two;
			$driver->driver_type = 1;
			$driver->save();

			$user = new User;
			$user->name = $request->name;
			$user->email = $request->email;
			$user->mobile_number = $request->contact_no;
			$user->address1 = $request->address_one;
			$user->address2 = $request->address_two;
			$user->state = $request->state;
			$user->city = $request->city;
			$user->postalCode = $request->postalCode;
			$user->nationality = $request->nationality;
			$user->driver_accessId = $driver->driver_id;
			$user->otp = $otp;
			$user->driver_type = 1;
			$user->access_id = 3;
			$user->save();
			
			$this->sendOtpEmail($user, $otp);

			return response()->json(['success' => true, 'message' => 'Driver registered successfully', 'driver' => $driver]);
		} else {
			return response()->json(['success' => false, 'message' => 'Invalid registration type']);
		}
	}
	
	public function VendorLogin(Request $request)
	{
		$email = $request->input('email');
		$user = Vendor::where('email', $email)->where('access_id', 4)->first();
		
		if($user){
			$otp = rand(100000, 999999);
			$user->otp = $otp;
			$user->save();
			
			$this->sendOtpEmail($user, $otp);
			
			 return response()->json([
                    'status' => 200,
                    'message' => 'OTP Send successfully',
                    'user'=> $user,
                ]);
		}
		
		 return response()->json([
                'status' => 404,
                'message' => 'Email Address Invalid',
            ]);
	}
	
	
	public function DriverLogin(Request $request)
	{
		$email = $request->input('email');
		$user = User::where('email', $email)->where('access_id', 3)->first();
		
		if($user){
			$otp = rand(100000, 999999);
			$user->otp = $otp;
			$user->save();
			
			$this->sendOtpEmail($user, $otp);
			
			 return response()->json([
                    'status' => 200,
                    'message' => 'OTP Send successfully',
                    'user'=> $user,
                ]);
		}
		
		 return response()->json([
                'status' => 404,
                'message' => 'Email Address Invalid',
            ]);
	}

	private function sendOtpEmail($user, $otp)
	{
		$subject = 'Your Verification code';
		$view = 'emails.send-otp-page';

		$data = [
			'user' => $user,
			'otp' => $otp,
		];

		Mail::send($view, $data, function ($message) use ($user, $subject) {
			$message->from('admin@bhurr.co.in', 'Bhurr Technologies LLP');
			//$message->sender('admin@bhurr.co.in', 'Bhurr Technologies LLP');
			$message->to($user->email)->subject($subject);
		});
	}

	public function verifyVendorOtpLogin(Request $request)
		{
			$otp = $request->input('otp');

			// Ensure OTP is not null and is provided in the request
			if ($otp === null) {
				return response()->json([
					'status' => 400,
					'message' => 'OTP is required',
				]);
			}

			$user = Vendor::where('otp', $otp)->first();

			if ($user) {
				// Clear the OTP and mark the user as verified
				$user->otp = null;
				$sessionToken = Str::random(60);
				$user->session_token = $sessionToken;
				$user->save();

				return response()->json([
					'status' => 200,
					'message' => 'OTP verified successfully',
					'user' => $user,
				]);
			}

			return response()->json([
				'status' => 404,
				'message' => 'OTP Invalid',
			]);
		}
	
	public function verifyDriverOtpLogin(Request $request)
		{
			$otp = $request->input('otp');

			// Ensure OTP is not null and is provided in the request
			if ($otp === null) {
				return response()->json([
					'status' => 400,
					'message' => 'OTP is required',
				]);
			}

			$user = User::where('otp', $otp)->first();

			if ($user) {
				$user->otp = null;
				$user->verified_status = 1;
				$sessionToken = Str::random(60);
				$user->session_token = $sessionToken;
				$user->save();

				return response()->json([
					'status' => 200,
					'message' => 'OTP verified successfully',
					'user' => $user,
				]);
			}

			return response()->json([
				'status' => 404,
				'message' => 'OTP Invalid',
			]);
		}

	public function getDriverUserProfile(Request $request, $id)
		{
			$user = Driver::where('driver_id', $id)
					//->join('driver', 'users.driver_accessId', '=', 'driver.driver_id')
					->where('access_id', 3)
					->select('driver.*')
					// ->where('verified_status', 1) // Uncomment if you want to include this condition
					->first();

			if ($user) {
				return response()->json(['status' => 200,'user' => $user,]);
			} else {
				return response()->json(['status' => 404,'message' => 'User not found',]);
			}
	}
	
		public function getVendorUserProfile(Request $request, $id)
		{
			$user = Vendor::where('id', $id)
						//->join('vendors', 'users.vendor_accessId', '=', 'vendors.id')
						->where('access_id', 4)
						->select('vendors.*')
						//->where('verified_status', 1)
						->first();
			if ($user) {
				return response()->json(['status' => 200,'user' => $user,]);
			} else {
				return response()->json(['status' => 404,'message' => 'User not found',]);
			}
		}
	
		public function UpdateVendor(Request $request)
		{
			$vendorId = $request->vendor_id;
			$vendor = Vendor::where('id', $vendorId)->first();
			if(!$vendor)
			{
				return response()->json(['status' => 404,'message' => 'User not found',]);
			}
			$email = $request->input('email');
			$existingVendor = Vendor::where('email', $email)->where('id', '!=', $vendorId)->first();
			//$existingUser = User::where('email', $email)->where('vendor_accessId', '!=', $vendorId)->where('access_id', 4)->first();
		
			if ($existingVendor) {
				return response()->json(['success' => false, 'message' => 'This user already existed.']);
			}
			$vendor->name = $request->name;
			$vendor->email = $request->email;
			$vendor->contact_no = $request->contact_no;
			$vendor->alternate_contact_no = $request->alternate_contact_no;
			$vendor->address_one = $request->address_one;
			$vendor->address_two = $request->address_two;
			$vendor->company_name = $request->company_name;
			$vendor->aadhar_number = $request->aadhar_number;
			$vendor->pan_number = $request->pan_number;
			$vendor->driving_license_number = $request->driving_license_number;
			// Handle file uploads
			if ($request->hasFile('licence_photo')) {
				$filename = $request->file('licence_photo')->getClientOriginalName();
				$request->file('licence_photo')->move(public_path('/vendor_documents/'), $filename);
				$vendor->licence_photo = $filename;
			}
			if ($request->hasFile('aadhar_card_front')) {
				$filename = $request->file('aadhar_card_front')->getClientOriginalName();
				$request->file('aadhar_card_front')->move(public_path('/vendor_documents/'), $filename);
				$vendor->aadhar_card_front = $filename;
			}
			if ($request->hasFile('aadhar_card_back')) {
				$filename = $request->file('aadhar_card_back')->getClientOriginalName();
				$request->file('aadhar_card_back')->move(public_path('/vendor_documents/'), $filename);
				$vendor->aadhar_card_back = $filename;
			}

			if ($request->hasFile('pancard_photo')) {
				$filename = $request->file('pancard_photo')->getClientOriginalName();
				$request->file('pancard_photo')->move(public_path('/vendor_documents/'), $filename);
				$vendor->pancard_photo = $filename;
			}

			if ($request->hasFile('photo')) {
				$filename = $request->file('photo')->getClientOriginalName();
				$request->file('photo')->move(public_path('/vendor_documents/'), $filename);
				$vendor->photo = $filename;
			}

			if ($request->hasFile('electricity_bill')) {
				$filename = $request->file('electricity_bill')->getClientOriginalName();
				$request->file('electricity_bill')->move(public_path('/vendor_documents/'), $filename);
				$vendor->electricity_bill = $filename;
			}

			if ($request->hasFile('police_verification_report')) {
				$filename = $request->file('police_verification_report')->getClientOriginalName();
				$request->file('police_verification_report')->move(public_path('/vendor_documents/'), $filename);
				$vendor->police_verification_report = $filename;
			}
			$vendor->save();

			
			if ($request->has('register_as_driver') && $request->register_as_driver) {
				$existingDriverUser = Driver::where('email', $email)
										  ->where('access_id', 3)
										  ->first();
				if (!$existingDriverUser) {
					$driver = new Driver();
					$driver->name = $request->name;
					$driver->email = $request->email;
					$driver->mobile_number = $request->contact_no;
					$driver->vendor_id = $vendorId;
					$driver->save();	
				}
			}
			return response()->json(['success' => true, 'message' => 'Vendor profile updated.']);
		}
	
	public function UpdateDriver(Request $request)
		{
			$driverId = $request->driver_id;
			$driver = Driver::where('driver_id', $driverId)->first();
			if(!$driver)
			{
				return response()->json(['status' => 404,'message' => 'User not found',]);
			}
			$email = $request->input('email');
			$existingDriver = Driver::where('email', $email)->where('driver_id', '!=', $driverId)->first();
			$existingUser = User::where('email', $email)->where('driver_accessId', '!=', $driverId)->where('access_id', 3)->first();
		
			if ($existingDriver || $existingUser) {
				return response()->json(['success' => false, 'message' => 'This user already existed.']);
			}
			
			$driver->name = $request->input('name');
			$driver->email = $request->input('email');
			$driver->mobile_number = $request->input('contact_no');
			$driver->alternate_contact_no = $request->input('alternate_contact_no');
			$driver->address = $request->input('address');
			$driver->comment = $request->input('comment');
			$driver->pincode = $request->input('pincode');
			if (is_array($request->input('driver_language'))) {
				$driver->driver_language = implode(',', $request->input('driver_language'));
			} else {
				$driver->driver_language = $request->input('driver_language');
			}
			$driver->aadhar_number = $request->aadhar_number;
			$driver->pan_number = $request->pan_number;
			// Handle file uploads
			if ($request->hasFile('licence_doc')) {
				$filename = $request->file('licence_doc')->getClientOriginalName();
				$request->file('licence_doc')->move(public_path('/driver_documents/'), $filename);
				$driver->licence_doc = $filename;
			}

			if ($request->hasFile('aadharcard_doc')) {
				$filename = $request->file('aadharcard_doc')->getClientOriginalName();
				$request->file('aadharcard_doc')->move(public_path('/driver_documents/'), $filename);
				$driver->aadharcard_doc = $filename;
			}
			if ($request->hasFile('aadharcard_doc_back')) {
				$filename = $request->file('aadharcard_doc_back')->getClientOriginalName();
				$request->file('aadharcard_doc_back')->move(public_path('/driver_documents/'), $filename);
				$driver->aadharcard_doc_back = $filename;
			}

			if ($request->hasFile('pancard_doc')) {
				$filename = $request->file('pancard_doc')->getClientOriginalName();
				$request->file('pancard_doc')->move(public_path('/driver_documents/'), $filename);
				$driver->pancard_doc = $filename;
			}

			if ($request->hasFile('photo')) {
				$filename = $request->file('photo')->getClientOriginalName();
				$request->file('photo')->move(public_path('/driver_documents/'), $filename);
				$driver->photo = $filename;
			}

			if ($request->hasFile('current_addres_electricity_bill')) {
				$filename = $request->file('current_addres_electricity_bill')->getClientOriginalName();
				$request->file('current_addres_electricity_bill')->move(public_path('/driver_documents/'), $filename);
				$driver->current_addres_electricity_bill = $filename;
			}

			if ($request->hasFile('police_verification_report')) {
				$filename = $request->file('police_verification_report')->getClientOriginalName();
				$request->file('police_verification_report')->move(public_path('/driver_documents/'), $filename);
				$driver->police_verification_report = $filename;
			}
			$driver->save();

			$user = User::where('driver_accessId', $driverId)->first();
			$user->name = $request->name;
			$user->email = $request->email;
			$user->mobile_number = $request->contact_no;
			$user->access_id = 3;
			$user->save();
			
			return response()->json(['success' => true, 'message' => 'Driver profile updated.']);
		}
}
