<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\DriverApp;
use App\Models\Contractual;
use App\Models\DriverCarclass;
use App\Models\DriverEnquiries;
use App\Models\DocumentUpdateRequest;
use App\Mail\verifyOTP;


class DriverDashboardController extends Controller
{
    public function getDriverLogin(Request $request)
    {
        return view('driver-app.driver.auth.login');
    }

    public function postDriverLogin(Request $request)
    {
        // Validate the mobile number
        $request->validate([
            'mobile_no' => 'required|numeric|digits:10',
        ]);
    
        $mobile_no = $request->mobile_no;
    
        // Check if the driver exists
        $driver = DriverApp::where('mobile_no', $mobile_no)->first();
    
        if ($driver) {
            // Generate OTP
            $otp = rand(100000, 999999);
    
            // Save OTP to the driver's record
            $driver->otp = $otp;
            $driver->save();
    
            // Send OTP to driver's email
            Mail::to($driver->driver_email)->send(new verifyOTP($otp));
    
            // Redirect to OTP verification page
            return redirect('/driver-verify-otp')->with('success', 'OTP sent to your email address.');
        } else {
            return redirect()->back()->with('error', 'Driver with this mobile number does not exist.');
        }
    }

    // Function to send OTP using an SMS API (like Vonage or Twilio)
    protected function sendOtpToMobile($mobile_no, $otp)
    {
        // Use an SMS API (like Vonage or Twilio) to send the OTP
        // Example with Vonage:
        // Vonage::message()->send([
        //     'to' => $mobile_no,
        //     'from' => 'YourApp',
        //     'text' => 'Your OTP is: ' . $otp,
        // ]);
    }

    public function getVerifyOtp(Request $request)
    {
        return view('driver-app.driver.auth.verify-otp');
    }

    public function postVerifyOtp(Request $request)
{
    $request->validate([
        'otp' => 'required|numeric|digits:6',
    ]);

    $otp = $request->otp;

    // Find the driver by OTP
    $driver = DriverApp::where('otp', $otp)->first();

    if ($driver) {
        // Log the driver in
        Auth::guard('driverLogin')->login($driver);

        // Clear the OTP after successful login
        $driver->otp = null;
        $driver->save();

        return redirect('/driver/dashboard')->with('success', 'Logged in successfully.');
    } else {
        return redirect()->back()->with('error', 'Invalid OTP, please try again.');
    }
}


    public function driverLogout()
    {
        Auth::guard('driverLogin')->logout();
        return redirect('/driver/login');
    }

    public function getDriverDashboard()
    {
        $driverId = Auth::guard('driverLogin')->user()->driver_id;

        // dd($driverId);
        $driver = DriverApp::where('driver_id', $driverId)->get();
        $allEnquiriesCount = DriverEnquiries::where('driver_id', $driverId)->count();

        $acceptedEnquiriesCount = DriverEnquiries::where('driver_id', $driverId)
                                            ->where('enquiry_status', 4)
                                            ->count();

        $completedEnquiriesCount = DriverEnquiries::where('driver_id', $driverId)
                                                ->where('enquiry_status', 3)
                                                ->count();
                                                
        $cancelledEnquiriesCount = DriverEnquiries::where('driver_id', $driverId)
                                            ->where('enquiry_status', 5)
                                            ->count();


        return view('driver-app.driver.dashboard',compact('driver','allEnquiriesCount','acceptedEnquiriesCount','completedEnquiriesCount','cancelledEnquiriesCount'));
    }

    public function addDriverDocuments(Request $request)
    {
		$dataId = Auth::guard('driverLogin')->user()->driver_id;
		 $driver= DriverApp::find($dataId);
        return view('driver-app.driver.add-documents', compact('driver'));
    }

    public function postDriverDocuments(Request $request)
    {
        $dataId = $request->driver_id;
        $driver = DriverApp::findOrFail($dataId);

        $validated = $request->validate([
            'driving_licence' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'pan_card' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'aadhar_card' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'aadhar_card_back' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'police_verification' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'electricity_bill' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'driving_licence_number' => 'required',
            'aadhar_card_number' => 'required',
            'pan_number' => 'required',
        ]);

        $driver->driving_licence_number = $request->driving_licence_number;
        $driver->pan_number = $request->pan_number;
        $driver->aadhar_card_number = $request->aadhar_card_number;

        if ($request->hasFile('driving_licence')) {
            $image = $request->file('driving_licence');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/driver_documents'), $imageName);
            $driver->driving_licence = $imageName;
        }

        if ($request->hasFile('pan_card')) {
            $image = $request->file('pan_card');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/driver_documents'), $imageName);
            $driver->pan_card = $imageName;
        }

        if ($request->hasFile('aadhar_card')) {
            $image = $request->file('aadhar_card');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/driver_documents'), $imageName);
            $driver->aadhar_card = $imageName;
        }

        
        if ($request->hasFile('aadhar_card_back')) {
            $image = $request->file('aadhar_card_back');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/driver_documents'), $imageName);
            $driver->aadhar_card_back = $imageName;
        }

        if ($request->hasFile('police_verification')) {
            $image = $request->file('police_verification');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/driver_documents'), $imageName);
            $driver->police_verification = $imageName;
        }

        if ($request->hasFile('electricity_bill')) {
            $image = $request->file('electricity_bill');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/driver_documents'), $imageName);
            $driver->electricity_bill = $imageName;
        }

        $driver->driver_status = 1;

        $driver->save();

        return redirect('/view-driver-info')->with('success', 'Documents Added Successfully');
    }
	
	public function requestDocumentUpdate(Request $request)
	{
		$driverId = Auth::guard('driverLogin')->user()->driver_id;
		
		$request = new DocumentUpdateRequest();
		
		$request->driver_id = $driverId;
		$request->save();

		return redirect()->back()->with('success', 'Your request to update documents has been sent to the admin.');
	}

    public function getDriverInfo(Request $request)
    {
        $driver_id = Auth::guard('driverLogin')->user()->driver_id;
        $driver = DriverApp::find($driver_id);
        return view('driver-app.driver.view-driver-info', compact('driver'));
    }

    public function editDriverInfo($driver_id)
    {
        $driver = DriverApp::find($driver_id);
        $carclasses = DriverCarclass::all();
        return view('driver-app.driver.edit-driver-info', compact('driver','carclasses'));
    }

    public function updateDriverInfo(Request $request)
    {
        $dataId = $request->driver_id;
        $driver = DriverApp::find($dataId);

        $driverLanguages = $request->input('driver_language', []);

       
        $driverLanguageString = implode(', ', $driverLanguages);

        $driver->first_name= $request->first_name;
        $driver->last_name= $request->last_name;
        $driver->driver_email= $request->driver_email;
        $driver->mobile_no= $request->mobile_no;
        $driver->alternate_mobile_no= $request->alternate_mobile_no;
        $driver->address1 = $request->address1;
		$driver->address2 = $request->address2;
		$driver->pincode = $request->pincode;
		$driver->gear_type = $request->gear_type;
		$driver->car_name = $request->car_name;

        $driver->driver_language = $driverLanguageString;
        $driver->number_plate = $request->number_plate;
		$driver->consensual = $request->consensual;
		$driver->comment = $request->comment;


        $driver->save();

     return redirect('/view-driver-info')->with('success', 'Driver Info Updated Successfully');

    }

    public function getDriverAllEnquiries(Request $request)
    {
        $driverId = Auth::guard('driverLogin')->user()->driver_id;
        $allEnquiries = DriverEnquiries::where('driver_id', $driverId)->get();
        
        return view('driver-app.driver.all-enquiries', compact('allEnquiries'));
    }

    public function viewEnquiryDetails($enquiry_id)
    {
        $enquiries = DriverEnquiries::findOrFail($enquiry_id); 
        return view('driver-app.driver.view-enquiry-details', compact('enquiries'));
    }

    
    public function completeEnquiry(Request $request)
    {
        $enquiry = DriverEnquiries::find($request->enquiry_id);
        if ($enquiry) {
            $enquiry->enquiry_status = 3;
            $enquiry->save();
    
            return redirect('/driver/all-enquiries')->with('success', 'Enquired Completed Successfully!!');
        }
        return response()->json(['success' => false, 'message' => 'Enquiry not found']);
    }
    
    public function getDriverConfirmedEnquiry(Request $request)
    {
        $driverId = Auth::guard('driverLogin')->user()->driver_id;
        $confirmedEnquiries = DriverEnquiries::where('enquiry_status', 3)
                                        ->where('driver_id', $driverId)
                                        ->get();
    
        return view('driver-app.driver.confirmed-enquiries', compact('confirmedEnquiries'));
    }
    

    public function getDriverCancelledEnquiry(Request $request)
    {
        $driverId = Auth::guard('driverLogin')->user()->driver_id;
        $cancelledEnquiries = DriverEnquiries::where('enquiry_status', 5)
                                        ->where('driver_id', $driverId)
                                        ->get();

        return view('driver-app.driver.cancelled-enquiries', compact('cancelledEnquiries'));
    }

    public function acceptEnquiry(Request $request)
    {
        $enquiry = DriverEnquiries::find($request->enquiry_id);
        // dd($enquiry);
        if ($enquiry) {
            $enquiry->enquiry_status = 4;
            $enquiry->save();
    
            return redirect('/driver/all-enquiries')->with('success', 'Enquiry Accepted Successfully!!');
        }
        return response()->json(['success' => false, 'message' => 'Enquiry not found']);
    }

    public function declineEnquiry(Request $request)
    {
        $enquiry = DriverEnquiries::find($request->enquiry_id);
        // dd($enquiry);
        if($enquiry) {
            $enquiry->enquiry_status = 1;
            $enquiry->save();

            return redirect('/driver/all-enquiries')->with('success', 'Enquiry Cancelled Successfully!');
        }
        return response()->json(['success' => false, 'message' => 'Enquiry not found']);
    }

    public function getConsensualList(Request $request)
    {
        $driverId = Auth::guard('driverLogin')->user()->driver_id;
        $consensualEnquiry = Contractual::where('driver_id', $driverId)->get();
        
        return view('driver-app.driver.consensual-enquiries', compact('consensualEnquiry'));
    }

    public function acceptConsensualEnquiry(Request $request)
    {
        $consensualEnquiry = Contractual::find($request->id);
        if ($consensualEnquiry) {
            $consensualEnquiry->status = 4;
            $consensualEnquiry->save();
    
            return redirect('/driver/consensual-enquiry-list')->with('success', 'Consensual Enquiry Accepted Successfully!!');
        }
        return response()->json(['success' => false, 'message' => 'Enquiry not found']);
    }

    public function declineConsensualEnquiry(Request $request)
    {
        $consensualEnquiry =  Contractual::find($request->id);
        // dd($enquiry);
        if($consensualEnquiry) {
            $consensualEnquiry->status = 1;
            $consensualEnquiry->save();

            return redirect('/driver/consensual-enquiry-list')->with('success', 'Consensual Enquiry Cancelled Successfully!');
        }
        return response()->json(['success' => false, 'message' => 'Enquiry not found']);
    }
    public function completeConsensualEnquiry(Request $request)
    {
        $consensualEnquiry = Contractual::find($request->id);
        if ($consensualEnquiry) {
            $consensualEnquiry->status = 3;
            $consensualEnquiry->save();
    
            return redirect('/driver/consensual-enquiry-list')->with('success', 'Consensual Enquired Completed Successfully!!');
        }
        return response()->json(['success' => false, 'message' => 'Enquiry not found']);
    }
	
	// public function verifyOtp(Request $request)
	// {
	// 	// Validate the input
	// 	$request->validate([
	// 		'otp' => 'required|string',
	// 		'enquiry_id' => 'required|integer',
	// 	]);

	// 	// Check if the OTP is valid
	// 	$isOtpValid = $this->checkOtp($request->otp, $request->enquiry_id);

	// 	if ($isOtpValid) {
	// 		// Update the enquiry status to 4 (Accepted)
	// 		DriverEnquiries::where('enquiry_id', $request->enquiry_id)
	// 			->update(['enquiry_status' => 4]);

	// 		// Return success response
	// 		return redirect()->back()->with('success', 'OTP verified and enquiry accepted!');
	// 	} else {
	// 		// Return error response
	// 		return redirect()->back()->with('error', 'Invalid OTP. Please try again.');
	// 	}
	// }

	// // Method to check if the OTP matches the one in the database
	// private function checkOtp($otp, $enquiryId)
	// {
	// 	// Retrieve the enquiry with the given enquiry_id
	// 	$enquiry = DriverEnquiries::where('enquiry_id', $enquiryId)->first();

	// 	// Check if the OTP matches
	// 	if ($enquiry && $enquiry->otp === $otp) {
	// 		return true;
	// 	}

	// 	return false;
	// }
	
	public function updateLocation(Request $request)
	{
		$request->validate([
			'driver_id' => 'required|integer',
			'latitude' => 'required|numeric',
			'longitude' => 'required|numeric',
		]);

		$driver = Driver::find($request->driver_id);
		if ($driver) {
			$driver->latitude = $request->latitude;
			$driver->longitude = $request->longitude;
			$driver->save();
			return response()->json(['success' => true]);
		}
		return response()->json(['error' => 'Driver not found'], 404);
	}
}
