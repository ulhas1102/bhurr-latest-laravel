<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\DriverApp;
use App\Models\DriverEnquiries;
use App\Models\DriverCarclass;
use App\Models\Contractual;
use App\Models\Commission;
use App\Models\DocumentUpdateRequest;
use Hash;
use Auth;

class DriverAdminController extends Controller
{
    public function getAdminLogin(Request $request)
    {
        return view('driver-app.admin.auth.login');
    }

    public function postAdminLogin(Request $request) {
        $remember = !empty($request->remember) ? true : false;
    
        // Check if the user exists with email, password, and access_id = 3
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'access_id' => 2], $remember)) {
            return redirect('/driver-admin-dashboard');
        } else {
            return redirect()->back()->withErrors(['error' => 'Please enter valid email, password, or you do not have admin access']);
        }
    }
    


    public function getRegister(Request $request)
    {
        return view('driver-app.admin.auth.register');
    }

    public function postRegister(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->access_id = 2;
      
        $users->save();
        return redirect('/driver/admin')->with('success', 'User Registered successfully!');

    }

    
    public function driverAdminLogout(){
        Auth::logout();
        return redirect(url('driver/admin'));
    }

    public function getDriverDashboard()
    {
        $driversCount = DriverApp::count();
        $driverEnquiry = DriverEnquiries::count();
        $pendingVerifiedDriversList = DriverApp::where('driver_status', 1)->count();
        $verifiedDriversList = DriverApp::where('driver_status', 2)->count();
        $onlineDriversList = DriverApp::where('driver_status', 3)->count();
        $offlineDriversList = DriverApp::where('driver_status', 4)->count();
        return view('driver-app.admin.dashboard', compact('driversCount','driverEnquiry','pendingVerifiedDriversList','verifiedDriversList','onlineDriversList','offlineDriversList'));
    }

    public function getDriversList(Request $request)
    {
        $drivers = DriverApp::all();
        return view('driver-app.admin.drivers-list', compact('drivers'));
    }

    public function getOnlineDriversList(Request $request)
    {
        $drivers = DriverApp::where('driver_status', 3)->get();
        return view('driver-app.admin.online-drivers-list', compact('drivers'));
    }

    public function getOfflineDriversList(Request $request)
    {
        $drivers = DriverApp::where('driver_status', 4)->get();
        return view('driver-app.admin.offline-drivers-list', compact('drivers'));
    }

    public function addDriver(Request $request)
    {
        $carclasses = DriverCarclass::all();
        return view('driver-app.admin.add-driver', compact('carclasses'));
    }

    public function postDriver(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'driver_email' => 'required|string|email|max:255|unique:driver_app_drivers,driver_email',
            'mobile_no' => 'required|string|max:15|unique:driver_app_drivers,mobile_no',
            'alternate_mobile_no' => 'nullable|string|max:15',
            'address1' => 'required|string|max:500',
            'address2' => 'required|string|max:500',
            'state' => 'required|string|max:500',
            'city' => 'required|string|max:500',
            'pincode' => 'required|string|max:10',
            'gear_type' => 'required|string|max:255',
            'number_plate' => 'required',
        ]);

        
        $driverLanguages = is_array($request->input('driver_language')) ? $request->input('driver_language') : [];

        $otherLanguages = is_array($request->input('driver_language_other')) ? $request->input('driver_language_other') : [];

        $allDriverLanguages = array_merge($driverLanguages, $otherLanguages);

        $driverLanguagesString = implode(', ', $allDriverLanguages);
    
    $Carclasses = is_array($request->input('car_name')) ? $request->input('car_name') : [];
    $CarclassesString = implode(', ', $Carclasses);
    
    $contractual = is_array($request->input('contractual')) ? $request->input('contractual') : [];
    $contractualString = !empty($contractual) ? implode(', ', $contractual) : null;


        $driver = new DriverApp;

        $driver->first_name = $request->first_name;
        $driver->last_name = $request->last_name;
        $driver->driver_email = $request->driver_email;
        $driver->mobile_no = $request->mobile_no;
        $driver->alternate_mobile_no = $request->alternate_mobile_no;
        $driver->address1 = $request->address1;
        $driver->address2 = $request->address2;
        $driver->state = $request->state;
        $driver->city = $request->city;
        $driver->driver_language = $driverLanguagesString;
        $driver->pincode = $request->pincode;
        $driver->gear_type = $request->gear_type;
        $driver->car_name = $CarclassesString;
        $driver->number_plate = $request->number_plate;
        $driver->contractual = $contractualString;
        $driver->trip_type = $request->trip_type;
        $driver->comment = $request->comment;
        $driver->driver_status = 0; 
        $driver->latitude = $request->latitude; 
        $driver->longitude = $request->longitude;

        $driver->save();

        return redirect('/drivers-list')->with('success', 'Driver Added Successfully');
    }


    public function editDriver($driver_id)
    {
        $carclasses= DriverCarclass::all();
        $driver= DriverApp::find($driver_id);
        return view('driver-app.admin.edit-driver', compact('driver','carclasses')); 
    }

    public function updateDriver(Request $request)
    {
        $request->validate([
            'driver_id' => 'required|exists:driver_app_drivers,driver_id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'driver_email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('driver_app_drivers', 'driver_email')->ignore($request->driver_id, 'driver_id'),
            ],
            'mobile_no' => [
                'required',
                'string',
                'max:15',
                Rule::unique('driver_app_drivers', 'mobile_no')->ignore($request->driver_id, 'driver_id'),
            ],
            'alternate_mobile_no' => 'nullable|string|max:15',
            'address1' => 'required|string|max:500',
            'address2' => 'nullable|string|max:500',
            'state' => 'required|string|max:500',
            'city' => 'required|string|max:500',
            'pincode' => 'required|string|max:10',
        ]);

        // Find the driver
        $driver = DriverApp::find($request->driver_id);

        if (!$driver) {
            return redirect('/drivers-list')->with('error', 'Driver not found');
        }

        $driverLanguages = $request->input('driver_language', []);

        if (in_array('other', $driverLanguages)) {
            $otherLanguage = $request->input('driver_language_other');
            // Validate the other language if necessary
            $driverLanguages[] = trim($otherLanguage);
        }

        // Create a comma-separated string of unique languages
        $driverLanguageString = implode(', ', array_unique($driverLanguages));

        $carClasses = $request->input('car_name', []);
        $carClassesString = implode(', ', $carClasses);

        $contractual = $request->input('contractual', []);
        $contractualString = implode(', ', $contractual);

        // Updating driver details
        $driver->first_name = $request->first_name;
        $driver->last_name = $request->last_name;
        $driver->driver_email = $request->driver_email;
        $driver->mobile_no = $request->mobile_no;
        $driver->alternate_mobile_no = $request->alternate_mobile_no;
        $driver->address1 = $request->address1;
        $driver->address2 = $request->address2;
        $driver->state = $request->state;
        $driver->city = $request->city;
        $driver->pincode = $request->pincode;
        $driver->driver_status = $request->driver_status;

        if ($request->driver_status == 2) {
            $driver->verified = 1;
        }

        $driver->driver_language = $driverLanguageString;
        $driver->car_name = $carClassesString;
        $driver->number_plate = $request->number_plate;
        $driver->contractual = $contractualString;
        $driver->trip_type = $request->trip_type;

        // Check for optional comment field
        if ($request->has('comment')) {
            $driver->comment = $request->comment;
        }

        // Save changes
        $driver->save();

        return redirect('/drivers-list')->with('success', 'Driver Updated Successfully');
    }


    public function getaddDocuments($driver_id)
    {
        $driver= DriverApp::find($driver_id);
        return view('driver-app.admin.add-driver-documents', compact('driver'));
    }


    public function postaddDriverDocuments(Request $request)
    {
        $dataId = $request->driver_id;
        $driver = DriverApp::findOrFail($dataId);
        $validated = $request->validate([
            'driving_licence' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'pan_card' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'aadhar_card' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'aadhar_card_back' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'police_verification' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'electricity_bill' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'driving_licence_number' => 'required',
            'driving_licence_expiry_date' => 'required',
            'aadhar_card_number' => 'required',
            'pan_number' => 'required',
        ]);

        $driver->driving_licence_number = $request->driving_licence_number;
        $driver->driving_licence_expiry_date = $request->driving_licence_expiry_date;
        $driver->pan_number = $request->pan_number;
        $driver->aadhar_card_number = $request->aadhar_card_number;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/driver_images'), $imageName);
            $driver->profile_image = $imageName;
        }

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
        return redirect('/drivers-list')->with('success', 'Documents Added Successfully');
    }

  
    public function viewDriver($driver_id)
    {
        $driver = DriverApp::find($driver_id);
        return view('driver-app.admin.view-driver-details', compact('driver'));
    }
    

    public function getCarClassList(Request $request)
    {
        $carclasses = DriverCarclass::all();
        return view('driver-app.admin.carclass-list', compact('carclasses'));
    }

    public function postCarClass(Request $request)
    {
        $request->validate([
            'carclass_name' => 'required|unique:driver_carclass,carclass_name|max:255',
            'carclass_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gear_type' => 'required',
			
        ]);

        $carclass = new DriverCarclass;

        $carclass->carclass_name = $request->carclass_name;
        $carclass->gear_type = $request->gear_type;

        if ($request->hasFile('carclass_image')) {
            $image = $request->file('carclass_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/carclass_images'), $imageName);
            $carclass->carclass_image = $imageName;
        }

     

        $carclass->save();
        return redirect('/carclass-list')->with('success', 'Car Class Added Successfully!!');

    }

    public function updateCarClass(Request $request)
    {
        $request->validate([
            'carclass_name' => [
                'required',
                'max:255',
                Rule::unique('driver_carclass', 'carclass_name')->ignore($request->carclass_id, 'carclass_id'),
            ],
          
        ]);

        $dataId = $request->carclass_id;
        $carclass = DriverCarclass::find($dataId);

        $carclass->carclass_name = $request->carclass_name;
        $carclass->gear_type = $request->gear_type;

        // Handle image upload
        if ($request->hasFile('carclass_image')) {
            $image = $request->file('carclass_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/carclass_images'), $imageName);
            $carclass->carclass_image = $imageName;
        }

        $carclass->save();
        // dd($carclass);

        return redirect('/carclass-list')->with('success', 'Car Class Updated Successfully');
    }

   
    public function getLocalFareList(Request $request)
    {
        $carclasses = DriverCarclass::all();
        return view('driver-app.admin.fare-management.local-fare-list', compact('carclasses'));
    }

    public function getOutStationFareList(Request $request)
    {
        $carclasses = DriverCarclass::all();
        return view('driver-app.admin.fare-management.outstation-fare-list', compact('carclasses'));
    }
    
  
    public function getComission(Request $request)
    {
        $commissions = Commission::all();
        return view('driver-app.admin.fare-management.commission', compact('commissions'));
    }
    
    public function updateCommission(Request $request)
    {
        $request->validate([
            'admin_commission' => 'required|numeric',
            'driver_commission' => 'required|numeric',
        ]);

        $commission = Commission::find($request->id);
        $commission->admin_commission = $request->admin_commission;
        $commission->driver_commission = $request->driver_commission;
        $commission->save();

        return redirect('/commission')->with('success', 'Commission updated successfully');
    }


    public function updateFare(Request $request, $id)
    {
        $carclass = DriverCarclass::find($id);
    
     
        if ($request->has('local_8_hrs_charges')) {
            $carclass->local_8_hrs_charges = $request->input('local_8_hrs_charges');
        }
		 if ($request->has('local_12_hrs_charges')) {
            $carclass->local_12_hrs_charges = $request->input('local_12_hrs_charges');
        }
        if ($request->has('local_extra_hour_charges')) {
            $carclass->local_extra_hour_charges = $request->input('local_extra_hour_charges');
        }
		  if ($request->has('outstation_extra_hour_charges')) {
            $carclass->outstation_extra_hour_charges = $request->input('outstation_extra_hour_charges');
        }
		 if ($request->has('night_charges')) {
            $carclass->night_charges = $request->input('night_charges');
        }
       
        if ($request->has('outstation_base_fare')) {
            $carclass->outstation_base_fare = $request->input('outstation_base_fare');
        }
        if ($request->has('oneway_base_fare')) {
            $carclass->oneway_base_fare = $request->input('oneway_base_fare');
        }

        if ($request->has('per_day_charges')) {
            $carclass->per_day_charges = $request->input('per_day_charges');
        }
    
        $carclass->save();
    
        $request->session()->flash('success', 'Fare Charges updated successfully');
    
        return redirect()->back();
    }

    public function getAllEnquiry(Request $request)
    {
        $drivers = DriverApp::where('driver_status', 3)->get();

        $allEnquiries = DriverEnquiries::all();


        return view('driver-app.admin.enquiries.all-enquiries', compact('allEnquiries','drivers'));
    }

    public function getConfirmedEnquiry(Request $request)
    {
        $confirmedEnquiries = DriverEnquiries::where('enquiry_status', 3)->get();
        return view('driver-app.admin.enquiries.confirmed-enquiries', compact('confirmedEnquiries'));
    }

    public function getCancelledEnquiry(Request $request)
    {
        $cancelledEnquiries = DriverEnquiries::where('enquiry_status', 5)->get();
        return view('driver-app.admin.enquiries.cancelled-enquiries', compact('cancelledEnquiries'));
    }

    public function showDocumentUpdateRequests()
	{
		// Get all unprocessed document update requests
		$requests = DocumentUpdateRequest::all();

		return view('driver-app.admin.document_update_requests', compact('requests'));
	}

    public function assignDriver(Request $request)
    {
        $request->validate([
            'enquiry_id' => 'required|exists:driver_enquiries,enquiry_id',
            'driver_id' => 'required',
            'driver_id.*' => 'exists:driver_app_drivers,driver_id',
        ]);

        $enquiry = DriverEnquiries::find($request->enquiry_id);
        $enquiry->driver_id = $request->driver_id;
        $enquiry->enquiry_status = 2;
        $enquiry->driver_assigned = true;
        $enquiry->save();

      
        return redirect('/all-driver-enquiries')->with('success', 'Driver Assigned Successfully');
    }

    public function viewEnquiry($enquiry_id)
    {
        $enquiry = DriverEnquiries::find($enquiry_id);
        return view('driver-app.admin.view-enquiry', compact('enquiry'));
    }

    public function cancelEnquiry(Request $request)
    {
        $enquiry = DriverEnquiries::find($request->enquiry_id);
        if ($enquiry) {
            $enquiry->enquiry_status = 5;
            $enquiry->save();
    
            return redirect('/all-driver-enquiries')->with('success', 'Enquired Cancelled Successfully!!');
        }
    
        return response()->json(['success' => false, 'message' => 'Enquiry not found']);
    }


    public function trackLocation($enquiry_id)
    {
        $enquiry = DriverEnquiries::find($enquiry_id);
		$driver = DriverApp::find($enquiry->driver_id);
        return view('driver-app.admin.enquiries.track-location', compact('enquiry','driver'));
    }

	public function getLocations(Request $request)
    {
        $driverId = $request->input('driver_id');

        // Retrieve the driver's location based on driver_id
        $driver = DriverApp::find($driverId);

        if ($driver) {
            return response()->json([
                'driver_location' => [
                    'lat' => $driver->latitude,
                    'lng' => $driver->longitude
                ]
            ]);
        } else {
            return response()->json(['error' => 'Driver not found'], 404);
        }
    }

    public function getConsensualEnquiry(Request $request)
    {
        $drivers = DriverApp::where('driver_status', 3)
                            ->where('contractual', 'like', '%Monthly%')
                            ->get();
    

        $consensualEnquiries = Contractual::all();
        return view('driver-app.admin.enquiries.consensual-enquiries-list', compact('consensualEnquiries','drivers'));
    }

    public function assign(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:contractual_enquries,id',
            'driver_id' => 'required',
            'driver_id.*' => 'exists:driver_app_drivers,driver_id',
        ]);

        $consensualEnquiry = Contractual::find($request->id);
        $consensualEnquiry->driver_id = $request->driver_id;
        $consensualEnquiry->status = 2;
       
        $consensualEnquiry->save();

      
        return redirect('/contractual-enquiries')->with('success', 'Driver Assigned Successfully');
    }

}
