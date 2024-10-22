<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Driver;
use App\Models\Enquiries;
use App\Models\Carclass;
use App\Models\ExtraHours;
use App\Models\Extrakilometers;
use App\Models\PaymentHistorys;
use App\Models\ExtraExpences;
use App\Models\DriverBankAccount;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class VendorDriverLoginController extends Controller
{
    public function VendorDriverLogin(Request $request)
    {
        // Validate the email input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        // If validation fails, return a 422 response with validation errors
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => 'Invalid input',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Retrieve the email from the request
        $email = $request->input('email');
        
        // Check if a driver exists with the given email and access_id = 3
        $user = Driver::where('email', $email)->where('access_id', 3)->first();

        if ($user) {
            // Generate a random 6-digit OTP
            $otp = rand(100000, 999999);
            $user->otp = $otp;
            $user->save();

            // Attempt to send the OTP email
            try {
                $this->sendOtpEmail($user, $otp);

                return response()->json([
                    'status' => 200,
                    'message' => 'OTP sent successfully',
                    'user' => $user,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'status' => 500,
                    'message' => 'Failed to send OTP email',
                    'error' => $e->getMessage(),
                ], 500);
            }
        }

        // Return a 404 response if the email address is invalid
        return response()->json([
            'status' => 404,
            'message' => 'Email address invalid',
        ]);
    }

    // Private method to send OTP email
    private function sendOtpEmail($user, $otp)
    {
        $subject = 'Your Verification code';
        $view = 'emails.send-otp-page'; // Make sure this view exists in your views folder

        $data = [
            'user' => $user,
            'otp' => $otp,
        ];

        // Send email using the Mail facade
        Mail::send($view, $data, function ($message) use ($user, $subject) {
			$message->from('admin@bhurr.co.in', 'Bhurr Technologies LLP');
            $message->to($user->email)->subject($subject);
        });
    }
	
	public function verifyVendorDriverOtpLogin(Request $request)
		{
			$otp = $request->input('otp');
			// Ensure OTP is not null and is provided in the request
			if ($otp === null) {
				return response()->json([
					'status' => 400,
					'message' => 'OTP is required',
				]);
			}
			$user = Driver::where('otp', $otp)->first();
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
				], 200);
			}
			return response()->json([
				'status' => 404,
				'message' => 'OTP Invalid',
			], 404);
		}
	
		public function getVendorDriverProfile(Request $request, $id)
		{
			$user = Driver::where('driver_id', $id)
					->where('access_id', 3)
					->select('driver.*')
					->first();

			if ($user) {
				return response()->json(['status' => 200,'user' => $user,], 200);
			} else {
				return response()->json(['status' => 404,'message' => 'User not found',], 404);
			}
		}
	
	public function UpdateVendorDriveriveLocation(Request $request)
	{
		$driver = Driver::find($request->driver_id);
		$driver->latitude = $request->latitude;
		$driver->longitude = $request->longitude;
		$driver->save();

		return response()->json([
			'status' => 200,
			'message' => 'Driver live location updated successfully',
		], 200);
	}
	
	public function VendorDriverScheduledTrip(Request $request, $id)
	{
		// Find the driver by driver_id
		$driver = Driver::find($id);

		// Check if the driver exists
		if ($driver) {
			// Get the driver's scheduled trips
			$enquiries = DB::table('enquiries')
				->where('confirm_status', 1)
				->where('driver_id', $id)
				->where('trip_status', 0)
				->select('enquiry_id','from_location', 'to_location', 'start_journy_date', 'package_type')
				->get()
				->map(function ($enquiry) {
					// Modify package_type based on its value
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
							$enquiry->package_type = 'Unknown'; // Fallback value if package_type is something else
					}
					return $enquiry;
				});

			return response()->json([
				'status' => 200,
				'message' => 'All trips',
				'enquiries' => $enquiries,
			], 200);
		}

		return response()->json([
			'status' => 404,
			'message' => 'Driver not found',
		], 404);
	}

	
	public function VendorDriverScheduledTripOTPButton(Request $request, $id)
	{
		$enquiry = DB::table('enquiries')
			->where('confirm_status', 1)  
			->where('enquiry_id', $id)
			->where('trip_status', 0)  
			->select('enquiry_id','from_location', 'to_location', 'start_journy_date','vehicle_name','vehicle_class','vehicle_type','customer_pincode','customer_address','alternate_customer_mobile','customer_mobile','customer_email','customer_name')
			->first();

		if ($enquiry) {
			return response()->json([
				'status' => 200,
				'message' => 'Enquiry found',
				'enquiry' => $enquiry
			], 200);
		}

		return response()->json([
			'status' => 404,
			'message' => 'Enquiry not found'
		], 404);
	}
	
	public function TripOtpVerification(Request $request)
	{
		$enquiryId = $request->enquiry_id;
		$otp = $request->otp;

		if ($otp === null) {
			return response()->json([
				'status' => 400,
				'message' => 'OTP is required',
			], 400);
		}

		$enquiry = Enquiries::where('trip_otp', $otp)->where('enquiry_id', $enquiryId)->first();

		if ($enquiry) {
			//$enquiry->trip_otp = null;
			$enquiry->otp_verified_status = 1;
			$enquiry->trip_status = 2;
			$enquiry->save();
			return response()->json([
				'status' => 200,
				'message' => 'OTP verified successfully and trip now ongoing',
			], 200);
		} else {
			return response()->json([
				'status' => 404,
				'message' => 'OTP Invalid',
			], 404);
		}
	}
	
	public function VendorDriverOngoingTrip(Request $request, $id)
		{
			$driver = Driver::find($id);
			if ($driver) {
				$enquiries = DB::table('enquiries')
					->where('confirm_status', 1)
					->where('driver_id', $id)
					->where('trip_status', 2)
					->select('enquiry_id', 'from_location', 'to_location', 'start_journy_date', 'package_type', 'vehicle_name', 'vehicle_class', 'vehicle_type', 'customer_pincode', 'customer_address', 'alternate_customer_mobile', 'customer_mobile', 'customer_email', 'customer_name', 'total_distance', 'number_of_days_trip', 'number_of_persons')
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
						}
						return $enquiry;
					});

				$enquiriesWithPaymentHistoryAndExtraHours = $enquiries->map(function ($enquiry) {
					$paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiry->enquiry_id)->get();
					$extraHours =ExtraHours::where('enquiry_id', $enquiry->enquiry_id)->get();
					$extraKilometers =Extrakilometers::where('enquiry_id', $enquiry->enquiry_id)->get();
					$extraExpences =ExtraExpences::where('enquiry_id', $enquiry->enquiry_id)->get();
					$enquiry->payment_history = $paymentHistorys;
					$enquiry->extra_hours = $extraHours;
					$enquiry->extra_kilometers = $extraKilometers;
					$enquiry->extra_expences = $extraExpences;
					return $enquiry;
				});

				return response()->json([
					'status' => 200,
					'message' => 'All trips',
					'enquiries' => $enquiriesWithPaymentHistoryAndExtraHours, // Return enquiries with payment history
					'driver' => $driver,
				], 200);
			}

			return response()->json([
				'status' => 404,
				'message' => 'Driver not found',
			], 404);
		}

	
	
		public function VendorDriveraddPaymentHistory(Request $request)
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
			
			if(!$enquiry){
				return response()->json([
					'status' => 404,
					'message' => 'Enquiry Id Not Found',
				], 404);
			}

			$remainingAmount = $enquiry->remaining_amount - $request->input('paid_amount');
			$enquiry->remaining_amount =  $remainingAmount;

			$AdvanceAmount = $enquiry->advance_amount;
			$advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;

			$payment = PaymentHistorys::where('enquiry_id', $enquiryId)->sum('paid_amount');

			$overallPaidAmount = $advance + $payment;
			$enquiry->overallpaidamount = $overallPaidAmount;
			$enquiry->save();
			
			return response()->json([
				'status' => 200,
				'message' => 'Payment Added successfully',
			], 200);
		}
	
	public function VendorDriverupdatePaymentHistory(Request $request, $id)
    {
        $paymentHistory = PaymentHistorys::find($id);
		if(!$paymentHistory){
				return response()->json([
					'status' => 404,
					'message' => 'Payment Request Not Found',
				], 404);
			}
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

        return response()->json([
				'status' => 200,
				'message' => 'Payment Update successfully',
		], 200);
    }
	
	public function VendorDriveraddExtraHours(Request $request)
	{
		$extrahours = new ExtraHours();
		$extrahours->enquiry_id = $request->input('enquiry_id');
		$extrahours->extra_hours = $request->input('extra_hours');
		$extrahours->date = $request->input('date');
		$extrahours->start_time = $request->input('start_time');
		$extrahours->end_time = $request->input('end_time');
		$extrahours->comment = $request->input('comment');
		$extrahours->save();

		$enquiryId = $request->enquiry_id;
		$enquiry = Enquiries::find($enquiryId);
		$vehicleClass = $enquiry->vehicle_class;
		$remainingAmount = $enquiry->remaining_amount;

		$Carclass = Carclass::where('car_class', $vehicleClass)->first();
		$ExtrahoursCharges = $Carclass->per_hour_charges;

		$newExtraHours = $request->input('extra_hours');
		$newExtraHourCharges = $newExtraHours * $ExtrahoursCharges;

		$enquiry->extra_hours += $newExtraHours;
		$enquiry->extra_hours_amount += $newExtraHourCharges;
		$enquiry->remaining_amount += $newExtraHourCharges;
		$enquiry->extra_hour_charges = $ExtrahoursCharges;
		$enquiry->save();

		 return response()->json([
					'status' => 200,
					'message' => 'Extra Hours Added successfully',
			], 200);
	}
	
	public function VendorDriverupdateExtarHours(Request $request, $id)
	{
		$extrahours = ExtraHours::find($id);
		
		if(!$extrahours){
				return response()->json([
					'status' => 404,
					'message' => 'Request Not Found',
				], 404);
		}
		
		$originalExtraHours = $extrahours->extra_hours;

		$extrahours->enquiry_id = $request->input('enquiry_id');
		$extrahours->extra_hours = $request->input('extra_hours');
		$extrahours->date = $request->input('date');
		$extrahours->start_time = $request->input('start_time');
		$extrahours->end_time = $request->input('end_time');
		$extrahours->comment = $request->input('comment');
		$extrahours->save();

		$enquiryId = $request->enquiry_id;
		$enquiry = Enquiries::find($enquiryId);
		$vehicleClass = $enquiry->vehicle_class;
		$remainingAmount = $enquiry->remaining_amount;

		$newExtraHours = $request->input('extra_hours');
		$hoursDifference = $newExtraHours - $originalExtraHours;

		$Carclass = Carclass::where('car_class', $vehicleClass)->first();
		$ExtrahoursCharges = $Carclass->per_hour_charges;

		$adjustmentAmount = $hoursDifference * $ExtrahoursCharges;

		$enquiry->extra_hours += $hoursDifference;
		$enquiry->extra_hours_amount += $adjustmentAmount;
		$enquiry->remaining_amount += $adjustmentAmount;
		$enquiry->extra_hour_charges = $ExtrahoursCharges;
		$enquiry->save();

		return response()->json([
					'status' => 200,
					'message' => 'Extra Hours Updated successfully',
			], 200);
	}
	
	public function VendorDriveraddExtraKilometers(Request $request)
    {
        $extraKilometer = new Extrakilometers();
        $extraKilometer->enquiry_id = $request->input('enquiry_id');
        $extraKilometer->kilometers = $request->input('kilometers');
        $extraKilometer->date = $request->input('date');
        $extraKilometer->comment = $request->input('comment');
        $extraKilometer->save();
    
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        $vehicleClass = $enquiry->vehicle_class;
        $remainingAmount = $enquiry->remaining_amount;
    
        $Carclass = Carclass::where('car_class', $vehicleClass)->first();
        $ExtraKiloemeterCharges = $Carclass->per_km_charges;
    
        $newExtraKilometers = $request->input('kilometers');
        $newExtraKilometerCharges = $newExtraKilometers * $ExtraKiloemeterCharges;
    
        $enquiry->kilometers += $newExtraKilometers;
        $enquiry->extra_kilometers_amount += $newExtraKilometerCharges;
        $enquiry->remaining_amount += $newExtraKilometerCharges;
        $enquiry->extra_kilometer_charges = $ExtraKiloemeterCharges;
        $enquiry->save();
    
        return response()->json([
					'status' => 200,
					'message' => 'Extra Kilometer added successfully',
			], 200);
    }
	
	public function VendorDriverupdateExtarKilometers(Request $request, $id)
	{
		$extraKilometer = Extrakilometers::find($id);

		$originalExtraKilometers = $extraKilometer->kilometers;

		$extraKilometer->enquiry_id = $request->input('enquiry_id');
		$extraKilometer->kilometers = $request->input('kilometers');
		$extraKilometer->date = $request->input('date');
		$extraKilometer->comment = $request->input('comment');
		$extraKilometer->save();

		$enquiryId = $request->enquiry_id;
		$enquiry = Enquiries::find($enquiryId);
		$vehicleClass = $enquiry->vehicle_class;
		$remainingAmount = $enquiry->remaining_amount;

		$newExtraKilometers = $request->input('kilometers');
		$hoursDifference = $newExtraKilometers - $originalExtraKilometers;

		$Carclass = Carclass::where('car_class', $vehicleClass)->first();
		$ExtraKilometersCharges = $Carclass->per_km_charges;

		$adjustmentAmount = $hoursDifference * $ExtraKilometersCharges;

		$enquiry->kilometers += $hoursDifference;
		$enquiry->extra_kilometers_amount += $adjustmentAmount;
		$enquiry->remaining_amount += $adjustmentAmount;
		$enquiry->extra_kilometer_charges = $ExtraKilometersCharges;
		$enquiry->save();

		 return response()->json([
					'status' => 200,
					'message' => 'Extra Kilometer Updated successfully',
			], 200);
	}
	
	public function VendorDriverupdateTripStatus(Request $request)
	{
		 $enquiry = Enquiries::find($request->enquiry_id);
		 $enquiry->trip_status = $request->trip_status;
		 $enquiry->save();
		
			return response()->json([
					'status' => 200,
					'message' => 'Trip Completed successfully',
			], 200);
	
	}
	
	public function VendorDriverCompletedTripList(Request $request, $id)
	{
		// Retrieve completed enquiries for the specified driver
		$enquiries = Enquiries::where('confirm_status', 1)
			->where('driver_id', $id)
			->where('trip_status', 1)
			->select('enquiry_id', 'from_location', 'to_location', 'start_journy_date', 'package_type')
			->get()
			->groupBy('enquiry_id');

		// Modify package_type and append payment history, extra hours, and extra kilometers
		$enquiriesWithPaymentHistoryAndExtraHours = $enquiries->map(function ($enquiryGroup) {
			// Assuming each group contains the same enquiry details, get the first item
			$enquiry = $enquiryGroup->first();

			// Modify package_type based on its value
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
					$enquiry->package_type = 'Unknown'; // Fallback value if package_type is something else
			}

			// Fetch associated data
			//$paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiry->enquiry_id)->get();
			//$extraHours = ExtraHours::where('enquiry_id', $enquiry->enquiry_id)->get();
			//$extraKilometers = ExtraKilometers::where('enquiry_id', $enquiry->enquiry_id)->get();

			// Attach additional data to enquiry
			//$enquiry->payment_history = $paymentHistorys;
			//$enquiry->extra_hours = $extraHours;
			//$enquiry->extra_kilometers = $extraKilometers;

			return $enquiry;
		});

		return response()->json([
			'status' => 200,
			'message' => 'Completed Trips',
			'enquiries' => $enquiriesWithPaymentHistoryAndExtraHours,
		], 200);
	}
	
	public function VendorDriverCompletedTrip(Request $request, $id)
	{
		$enquiry = Enquiries::where('confirm_status', 1)
			->where('enquiry_id', $id)
			->where('trip_status', 1)
			->select('enquiry_id', 'from_location', 'to_location', 'start_journy_date', 'package_type', 'vehicle_name', 'vehicle_class', 'vehicle_type', 'customer_pincode', 'customer_address', 'alternate_customer_mobile', 'customer_mobile', 'customer_email', 'customer_name', 'total_distance', 'number_of_days_trip', 'number_of_persons')
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
		$extraKilometers = ExtraKilometers::where('enquiry_id', $enquiry->enquiry_id)->get();

		$enquiry->payment_history = $paymentHistorys;
		$enquiry->extra_hours = $extraHours;
		$enquiry->extra_kilometers = $extraKilometers;

		return response()->json([
			'status' => 200,
			'message' => 'Completed Trip',
			'enquiries' => $enquiry,
		], 200);
	}
	
	public function VendorDriveraddExtraExpence(Request $request)
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
 
        return response()->json([
			'status' => 200,
			'message' => 'Extra Expence added successfully!',
		], 200);
    }
	
	public function VendorDriverFcmToken(Request $request)
	{
		$driverId = $request->driver_id;
		$driver = Driver::find($driverId);
		if(!$driver){
			return response()->json([
			'status' => 404,
			'message' => 'Driver ID Not match!',
		], 404);
		}
		
		$driver->fcm_token = $request->fcm_token;
		$driver->save();
		return response()->json([
			'status' => 200,
			'message' => 'Fcm token submitted succesfully!',
		], 200);
	}
	
		public function AddBankaccount(Request $request)
		{
			$vendorbankaccount = new DriverBankAccount;
			$vendorbankaccount->account_holder_name = $request->account_holder_name;
			$vendorbankaccount->account_number = $request->account_number;
			$vendorbankaccount->ifsc_code = $request->ifsc_code;
			$vendorbankaccount->upi_id = $request->upi_id;
			$vendorbankaccount->driver_id = $request->driver_id;
			$vendorbankaccount->save();

			return response()->json([
				'status' => 200,
				'message' => 'Bank Account succesfully!',
			], 200);
		}
	
	public function Bankaccount(Request $request, $id)
	{
		$driver = Driver::where('driver_id', $id)->first();
		if(!$driver){
			return response()->json([
			'status' => 404,
			'message' => 'Driver Not found!',
		], 404);
		}
		
		$bankaccounts = DriverBankAccount::where('driver_id', $id)->get();
		return response()->json([
			'status' => 200,
			'message' => 'Bank accounts',
			'accounts' => $bankaccounts,
		], 200);
	}
	
	public function getEditBankaccount(Request $request, $id)
	{
		$bankaccount = DriverBankAccount::where('id', $id)->first();
		if(!$bankaccount){
			return response()->json([
			'status' => 404,
			'message' => 'Bank Account Not found!',
		], 404);
		}
		
		return response()->json([
			'status' => 200,
			'message' => 'Bank accounts',
			'accounts' => $bankaccount,
		], 200);
	}
	
	public function EditBankaccount(Request $request)
	{
		$account_id = $request->account_id;
		$vendorbankaccount = DriverBankAccount::find($account_id);
		$vendorbankaccount->account_holder_name = $request->account_holder_name;
		$vendorbankaccount->account_number = $request->account_number;
		$vendorbankaccount->ifsc_code = $request->ifsc_code;
		$vendorbankaccount->upi_id = $request->upi_id;
		$vendorbankaccount->save();
		
		return response()->json([
			'status' => 200,
			'message' => 'Bank account updated succesfully!',
		], 200);
	}
	
	public function DeleteBankaccount(Request $request)
	{
		$account_id = $request->account_id;
		$existingaccount = DriverBankAccount::where('id', $account_id)->first();
		if (!$existingaccount) {
				return response()->json([
					'status' => 409,
					'message' => 'Account Not Found!',
				],409);
			}
		$driverbankaccount = DriverBankAccount::find($account_id);
		$driverbankaccount->delete();
		
		return response()->json([
					'status' => 200,
					'message' => 'Account deleted!',
				],200);
	}

	
}
