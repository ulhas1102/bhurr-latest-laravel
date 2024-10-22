<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Driver;
use App\Models\Carclass;
use App\Models\CarTypes;
use App\Models\Enquiries;
use App\Models\CarDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use App\Models\ExtraHours;
use App\Models\Extrakilometers;
use App\Models\PaymentHistorys;
use App\Models\ExtraExpences;
use App\Models\VendorBankAccount;

class VendorApiController extends Controller
{
    //
	public function VendorPostDriver(Request $request)
	{
		$existingUser = Driver::where('email', $request->input('email'))
						->where('access_id', 3)
						->first();

		if ($existingUser) {
			return response()->json(['success' => false, 'message' => 'A driver with this email already exists.']);
		}
		$driver = new Driver;
		$driver->name = $request->input('name');
		$driver->email = $request->input('email');
		$driver->mobile_number = $request->input('contact_no');
		$driver->alternate_contact_no = $request->input('alternate_contact_no');
		$driver->address_one = $request->input('address_one');
		$driver->address_two = $request->input('address_two');
		$driver->comment = $request->input('comment');
		$driver->pincode = $request->input('pincode');
		 if (is_array($request->input('driver_language'))) {
			$driver->driver_language = implode(',', $request->input('driver_language'));
		} else {
			$driver->driver_language = $request->input('driver_language');
		}
		$driver->vendor_id = $request->input('vendor_id');
		$driver->driver_type = 2;
		$driver->aadhar_number = $request->aadhar_number;
		$driver->pan_number = $request->pan_number;
		$driver->driver_licence_number = $request->driver_licence_number;
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
		
		return response()->json(['success' => true, 'message' => 'Driver details saved successfully']);
			
	}
	
	 public function storeCarDetails(Request $request)
		{
			if ($request->car_type) {
				$carDetail = new CarDetail;
				$carDetail->vendor_id = $request->vendor_id;
				$carDetail->car_name = $request->car_name;
				$carDetail->car_type = $request->car_type;
				$carDetail->car_class = $request->car_class;
				$carDetail->insurance_start_date = $request->insurance_start_date;
				$carDetail->insurance_end_date = $request->insurance_end_date;
				$carDetail->car_registration = $request->additional_registration ?? null;
				if ($request->hasFile('car_front_image')) {
					$filename = $request->car_front_image->getClientOriginalName();
					$request->car_front_image->move(public_path('car-details'), $filename);
					$carDetail->car_front_image = $filename;
				}

				if ($request->hasFile('car_back_image')) {
					$filename = $request->car_back_image->getClientOriginalName();
					$request->car_back_image->move(public_path('car-details'), $filename);
					$carDetail->car_back_image = $filename;
				}

				if ($request->hasFile('car_interior_image')) {
					$filename = $request->car_interior_image->getClientOriginalName();
					$request->car_interior_image->move(public_path('car-details'), $filename);
					$carDetail->car_interior_image = $filename;
				}

				if ($request->hasFile('sales_tax_receipt')) {
					$filename = $request->sales_tax_receipt->getClientOriginalName();
					$request->sales_tax_receipt->move(public_path('car-details'), $filename);
					$carDetail->sales_tax_receipt = $filename;
				}

				if ($request->hasFile('rc_book')) {
					$filename = $request->rc_book->getClientOriginalName();
					$request->rc_book->move(public_path('car-details'), $filename);
					$carDetail->rc_book = $filename;
				}

				if ($request->hasFile('insurance_policy')) {
					$filename = $request->insurance_policy->getClientOriginalName();
					$request->insurance_policy->move(public_path('car-details'), $filename);
					$carDetail->insurance_policy = $filename;
				}

				if ($request->hasFile('puc')) {
					$filename = $request->puc->getClientOriginalName();
					$request->puc->move(public_path('car-details'), $filename);
					$carDetail->puc = $filename;
				}

				if ($request->hasFile('fitness_certificate')) {
					$filename = $request->fitness_certificate->getClientOriginalName();
					$request->fitness_certificate->move(public_path('car-details'), $filename);
					$carDetail->fitness_certificate = $filename;
				}

				if ($request->hasFile('authorization_letter')) {
					$filename = $request->authorization_letter->getClientOriginalName();
					$request->authorization_letter->move(public_path('car-details'), $filename);
					$carDetail->authorization_letter = $filename;
				}

				if ($request->hasFile('rto_tax_receipt')) {
					$filename = $request->rto_tax_receipt->getClientOriginalName();
					$request->rto_tax_receipt->move(public_path('car-details'), $filename);
					$carDetail->rto_tax_receipt = $filename;
				}

				if ($request->hasFile('professional_tax_receipt')) {
					$filename = $request->professional_tax_receipt->getClientOriginalName();
					$request->professional_tax_receipt->move(public_path('car-details'), $filename);
					$carDetail->professional_tax_receipt = $filename;
				}
				$carDetail->save();

				return response()->json([
					'success' => true, 
					'message' => 'Car details saved successfully', 
					'car_id' => $carDetail->id
				]);
			}

			return response()->json([
				'success' => false, 
				'message' => 'Car type not found in request'
			], 400);
		}
	
	public function getcarTypes(Request $request)
	{
		$cartypes = CarTypes::all();
		return response()->json(['success' => true, 'message' => 'Car Types fetch successfully','cartypes' => $cartypes]);
	}
	
	public function getCarClass(Request $request)
	{
		$carclass = Carclass::all();
		return response()->json(['success' => true, 'message' => 'Car Class fetch successfully','carclass' => $carclass]);
	}
	
	public function editVendorDriver($id)
	{
		$driver = Driver::where('driver_id', $id)->first();
		return response()->json(['success' => true, 'message' => 'Driver Info fetch successfully','driver' => $driver]);
	}
	
	public function PostEditDriver(Request $request)
	{
			$driverId = $request->driver_id;
			$driver = Driver::where('driver_id', $driverId)->first();
			if(!$driver){
				return response()->json(['success' => false, 'message' => 'Driver not found.']);
			}
			$email = $request->input('email');
			$existingDriver = Driver::where('email', $email)->where('driver_id', '!=', $driverId)->first();

			if ($existingDriver) {
				return response()->json(['success' => false, 'message' => 'This Email already existed.']);
			}
			$driver->name = $request->input('name');
			$driver->email = $request->input('email');
			$driver->mobile_number = $request->input('contact_no');
			$driver->alternate_contact_no = $request->input('alternate_contact_no');
			$driver->address_one = $request->input('address_one');
			$driver->address_two = $request->input('address_two');
			$driver->comment = $request->input('comment');
			$driver->pincode = $request->input('pincode');
			if (is_array($request->input('driver_language'))) {
					$driver->driver_language = implode(',', $request->input('driver_language'));
				} else {
					$driver->driver_language = $request->input('driver_language');
				}
			$driver->aadhar_number = $request->aadhar_number;
			$driver->pan_number = $request->pan_number;
			$driver->driver_licence_number = $request->driver_licence_number;
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
			return response()->json(['success' => true, 'message' => 'Driver Details Updated.']);
	}
	
	public function editVendorCars($id)
	{
		$cardetails = CarDetail::where('id', $id)->first();
		
		if(!$cardetails)
		{
		return response()->json(['success' => false, 'message' => 'Car Details Not Found.']);
		}
	
		return response()->json(['success' => true, 'message' => 'Car Details Fetch succesfully.','cardetails' => $cardetails]);
	}
	
	public function PostEditVendorCars(Request $request)
	{
		$carId = $request->car_id;
		$cardetails = CarDetail::find($carId); // Using find() for shorthand

		if (!$cardetails) {
			return response()->json(['success' => false, 'message' => 'Car Details Not Found.']);
		}

		// Updating car details
		$cardetails->car_name = $request->car_name;
		$cardetails->car_type = $request->car_type;
		$cardetails->car_class = $request->car_class;
		$cardetails->no_of_cars_quantity = $request->no_of_cars_quantity;
		$cardetails->insurance_start_date = $request->insurance_start_date;
		$cardetails->insurance_end_date = $request->insurance_end_date;
		$cardetails->car_registration = $request->additional_registration;

		// Handling file uploads efficiently
		if ($request->hasFile('car_front_image')) {
			$filename = $request->car_front_image->getClientOriginalName();
			$request->car_front_image->move(public_path('car-details'), $filename);
			$cardetails->car_front_image = $filename;
		}

		if ($request->hasFile('car_back_image')) {
			$filename = $request->car_back_image->getClientOriginalName();
			$request->car_back_image->move(public_path('car-details'), $filename);
			$cardetails->car_back_image = $filename;
		}

		if ($request->hasFile('car_interior_image')) {
			$filename = $request->car_interior_image->getClientOriginalName();
			$request->car_interior_image->move(public_path('car-details'), $filename);
			$cardetails->car_interior_image = $filename;
		}

		if ($request->hasFile('sales_tax_receipt')) {
			$filename = $request->sales_tax_receipt->getClientOriginalName();
			$request->sales_tax_receipt->move(public_path('car-details'), $filename);
			$cardetails->sales_tax_receipt = $filename;
		}

		if ($request->hasFile('rc_book')) {
			$filename = $request->rc_book->getClientOriginalName();
			$request->rc_book->move(public_path('car-details'), $filename);
			$cardetails->rc_book = $filename;
		}

		if ($request->hasFile('insurance_policy')) {
			$filename = $request->insurance_policy->getClientOriginalName();
			$request->insurance_policy->move(public_path('car-details'), $filename);
			$cardetails->insurance_policy = $filename;
		}

		if ($request->hasFile('puc')) {
			$filename = $request->puc->getClientOriginalName();
			$request->puc->move(public_path('car-details'), $filename);
			$cardetails->puc = $filename;
		}

		if ($request->hasFile('fitness_certificate')) {
			$filename = $request->fitness_certificate->getClientOriginalName();
			$request->fitness_certificate->move(public_path('car-details'), $filename);
			$cardetails->fitness_certificate = $filename;
		}

		if ($request->hasFile('authorization_letter')) {
			$filename = $request->authorization_letter->getClientOriginalName();
			$request->authorization_letter->move(public_path('car-details'), $filename);
			$cardetails->authorization_letter = $filename;
		}

		if ($request->hasFile('rto_tax_receipt')) {
			$filename = $request->rto_tax_receipt->getClientOriginalName();
			$request->rto_tax_receipt->move(public_path('car-details'), $filename);
			$cardetails->rto_tax_receipt = $filename;
		}

		if ($request->hasFile('professional_tax_receipt')) {
			$filename = $request->professional_tax_receipt->getClientOriginalName();
			$request->professional_tax_receipt->move(public_path('car-details'), $filename);
			$cardetails->professional_tax_receipt = $filename;
		}

		// Save all changes
		$cardetails->save();

		return response()->json([
			'success' => true, 
			'message' => 'Car Details updated successfully.',
			'cardetails' => $cardetails
		]);
	}
	
	public function DeleteVendorDriver(Request $request)
	{
		$driverId = $request->driver_id;
		$driver = Driver::where('driver_id', $driverId)->first();
		if(!$driver){
			return response()->json(['success' => false, 'message' => 'Driver not found.']);
		}else{
			$driver->delete();
		}
		
		$user = User::where('driver_accessId', $driverId)->first();
		if($user){
			$user->delete();
		}
		return response()->json(['success' => true, 'message' => 'Driver deleted succesfully.']);
	}
	
	public function DeleteVendorCars(Request $request)
	{
		$carId = $request->car_id;
		
		$cardetails = CarDetail::where('id', $carId)->first();
		if(!$cardetails)
		{
			return response()->json(['success' => false, 'message' => 'Car Details Not Found.']);
		}else{
			$cardetails->delete();
		}
		return response()->json(['success' => true, 'message' => 'Car details deleted succesfully.']);
	}
	
	public function checkVendorDocuments($vendorId)
	{
		// Fetch the vendor by ID
		$vendor = Vendor::find($vendorId);

		// Check if the vendor exists
		if (!$vendor) {
			return response()->json(['success' => false, 'message' => 'Vendor not found']);
		}

		// List of columns to check
		$columnsToCheck = [
			'licence_photo',
			'photo',
			'police_verification_report',
			'electricity_bill',
			'aadhar_card_back',
			'aadhar_card_front',
			'pan_number',
			'pancard_photo'
		];

		// Loop through each column to check if it's null
		foreach ($columnsToCheck as $column) {
			if (is_null($vendor->$column)) {
				return response()->json(['success' => false, 'message' => 'Some documents are missing']);
			}
		}

		// If all columns are filled
		return response()->json(['success' => true, 'message' => 'All documents are filled']);
	}
	
	public function VendorNewTripList(Request $request, $id)
	{
		$vendor = Vendor::find($id);
		if ($vendor) {
			$enquiries = DB::table('enquiries')
				->where('confirm_status', 2)
				->where('vendor_id', $id)
				->where('trip_status', 0)
				->select('enquiry_id','from_location', 'to_location', 'start_journy_date', 'package_type')
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

			return response()->json([
				'status' => 200,
				'message' => 'New trips',
				'enquiries' => $enquiries,
			], 200);
		}

		return response()->json([
			'status' => 404,
			'message' => 'Vendor not found',
		], 404);
	}
	
	public function VendorAcceptNewTrip(Request $request)
	{
		$enquiryId = $request->enquiry_id;
		$enquiry = Enquiries::where('enquiry_id', $enquiryId)->first();
		if($enquiry){
			$enquiry->confirm_status = $request->confirm_status;
			$enquiry->trip_status = 0;
			$enquiry->save();
			return response()->json([
				'status' => 200,
				'message' => 'Trip Accepted Successfully',
			], 200);
		}
		return response()->json([
			'status' => 404,
			'message' => 'Enquiry ID not found',
		], 404);
	}
	
	public function VendorScheduledTripList(Request $request, $id)
	{
		$vendor = Vendor::find($id);
		if ($vendor) {
			$enquiries = DB::table('enquiries')
				->where('confirm_status', 1)
				->where('vendor_id', $id)
				->where('trip_status', 0)
				->select('enquiry_id','from_location', 'to_location', 'start_journy_date', 'package_type')
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

			return response()->json([
				'status' => 200,
				'message' => 'All trips',
				'enquiries' => $enquiries,
			], 200);
		}

		return response()->json([
			'status' => 404,
			'message' => 'Vendor not found',
		], 404);
	}
	
	public function VendorScheduledTrip(Request $request, $id)
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
	
	public function VendorTripOtpVerification(Request $request)
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
	
	public function VendorOngoingTripList(Request $request, $id)
		{
			$vendor = Vendor::find($id);
			if ($vendor) {
				$enquiries = DB::table('enquiries')
					->where('confirm_status', 1)
					->where('vendor_id', $id)
					->where('trip_status', 2)
					->select('enquiry_id', 'from_location', 'to_location', 'start_journy_date', 'package_type')
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
				
				return response()->json([
					'status' => 200,
					'message' => 'All trips',
					'enquiries' => $enquiries,
				], 200);
			}

			return response()->json([
				'status' => 404,
				'message' => 'Vendor not found',
			], 404);
		}
	
	public function VendorOngoingTrip(Request $request, $id)
	{
		$enquiry = DB::table('enquiries')
			->where('confirm_status', 1)
			->where('enquiry_id', $id)
			->where('trip_status', 2)
			->select(
				'enquiry_id', 
				'from_location', 
				'to_location', 
				'start_journy_date', 
				'package_type', 
				'vehicle_name', 
				'vehicle_class', 
				'vehicle_type', 
				'customer_pincode', 
				'customer_address', 
				'alternate_customer_mobile', 
				'customer_mobile', 
				'customer_email', 
				'customer_name', 
				'total_distance', 
				'number_of_days_trip', 
				'number_of_persons',
				'driver_id'
			)
			->first();
		
		

		if (!$enquiry) {
			return response()->json([
				'status' => 404,
				'message' => 'No ongoing enquiry found',
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
		$driver_data = Driver::where('driver_id', $enquiry->driver_id)->select('name','email','mobile_number','driver_id')->first();

		$enquiry->payment_history = $paymentHistorys;
		$enquiry->extra_hours = $extraHours;
		$enquiry->extra_kilometers = $extraKilometers;
		$enquiry->driver = $driver_data;

		return response()->json([
			'status' => 200,
			'message' => 'Ongoing trip found',
			'enquiry' => $enquiry,
		], 200);
	}
	
	public function VendorCompletedTripList(Request $request, $id)
		{
			$vendor = Vendor::find($id);
			if ($vendor) {
				$enquiries = DB::table('enquiries')
					->where('confirm_status', 1)
					->where('vendor_id', $id)
					->where('trip_status', 1)
					->select('enquiry_id', 'from_location', 'to_location', 'start_journy_date', 'package_type')
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
				
				return response()->json([
					'status' => 200,
					'message' => 'All trips',
					'enquiries' => $enquiries,
				], 200);
			}

			return response()->json([
				'status' => 404,
				'message' => 'Vendor not found',
			], 404);
		}
	
	public function VendorCompletedTrip(Request $request, $id)
	{
		$enquiry = Enquiries::where('confirm_status', 1)
			->where('enquiry_id', $id)
			->where('trip_status', 1)
			->select('enquiry_id', 'from_location', 'to_location', 'start_journy_date', 'package_type', 'vehicle_name', 'vehicle_class', 'vehicle_type', 'customer_pincode', 'customer_address', 'alternate_customer_mobile', 'customer_mobile', 'customer_email', 'customer_name', 'total_distance', 'number_of_days_trip', 'number_of_persons','driver_id')
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
		$driver_data = Driver::where('driver_id', $enquiry->driver_id)->select('name','email','mobile_number','driver_id')->first();
		$enquiry->payment_history = $paymentHistorys;
		$enquiry->extra_hours = $extraHours;
		$enquiry->extra_kilometers = $extraKilometers;
		$enquiry->extra_expences = $extraExpences;
		$enquiry->driver = $driver_data;
		
		return response()->json([
			'status' => 200,
			'message' => 'Completed Trip',
			'enquiries' => $enquiry,
		], 200);
	}
	
	public function VendorFcmToken(Request $request)
	{
		$vendorId = $request->vendor_id;
		$vendor = Vendor::find($vendorId);
		if(!$vendor){
			return response()->json([
			'status' => 404,
			'message' => 'Vednor ID Not match!',
		], 404);
		}
		
		$vendor->fcm_token = $request->fcm_token;
		$vendor->save();
		return response()->json([
			'status' => 200,
			'message' => 'Fcm token submitted succesfully!',
		], 200);
	}
	
	public function AddBankaccount(Request $request)
	{
		$vendorbankaccount = new VendorBankAccount;
		$vendorbankaccount->account_holder_name = $request->account_holder_name;
		$vendorbankaccount->account_number = $request->account_number;
		$vendorbankaccount->ifsc_code = $request->ifsc_code;
		$vendorbankaccount->upi_id = $request->upi_id;
		$vendorbankaccount->vendor_id = $request->vendor_id;
		$vendorbankaccount->save();
		
		return response()->json([
			'status' => 200,
			'message' => 'Bank Account succesfully!',
		], 200);
	}
	
	public function Bankaccount(Request $request, $id)
	{
		$vendor = Vendor::where('id', $id)->first();
		if(!$vendor){
			return response()->json([
			'status' => 404,
			'message' => 'Vendor Not found!',
		], 404);
		}
		
		$bankaccounts = VendorBankAccount::where('vendor_id', $id)->get();
		return response()->json([
			'status' => 200,
			'message' => 'Bank accounts',
			'accounts' => $bankaccounts,
		], 200);
	}
	
	public function getEditBankaccount(Request $request, $id)
	{
		$bankaccount = VendorBankAccount::where('id', $id)->first();
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
		$vendorbankaccount = VendorBankAccount::find($account_id);
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
		$existingaccount = VendorBankAccount::where('id', $account_id)->first();
		if (!$existingaccount) {
				return response()->json([
					'status' => 409,
					'message' => 'Account Not Found!',
				],409);
			}
		$vendorbankaccount = VendorBankAccount::find($account_id);
		$vendorbankaccount->delete();
		
		return response()->json([
					'status' => 200,
					'message' => 'Account deleted!',
				],200);
	}

}
