<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    //
    public function store(Request $request)
    {

        $existingUser = User::where('email', $request->input('driver_email'))
                        ->where('access_id', 3)
                        ->first();

        if ($existingUser) {
                $alert = [
                    'message' => 'A driver with this email already exists.',
                    'alert-type' => 'error'
                ];
                
                return redirect()->back()->with($alert);
        }

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile_number = $request->input('contact_no');
        $password = $request->input('name') . '@2024';
        $user->password = Hash::make($password);
        $user->access_id = 3;
        $user->save();
        $userId = $user->id;

        $driver = new Driver;
        $driver->name = $request->name;
        $driver->email = $request->email;
        $driver->mobile_number = $request->contact_no;
        $driver->alternate_contact_no = $request->alternate_contact_no;
        $driver->address = $request->address;
        $driver->comment = $request->comment;
        $driver->pincode = $request->pincode;
        $driver->driver_language = implode(',', $request->driver_language);
        $driver->vendor_id = $request->vendor_id;
		$driver->aadhar_number = $request->aadhar_number;
		$driver->pan_number = $request->pan_number;

        if($request->licence_doc != null){
            if($request->hasFile('licence_doc')){
                $filename = $request->licence_doc->getClientOriginalName();
                $request->licence_doc->move(public_path() . '/driver_documents/', $filename);
                $driver->licence_doc = $filename;
            } 
        }
        if($request->aadharcard_doc != null){
            if($request->hasFile('aadharcard_doc')){
                $filename = $request->aadharcard_doc->getClientOriginalName();
                $request->aadharcard_doc->move(public_path() . '/driver_documents/', $filename);
                $driver->aadharcard_doc = $filename;
            } 
        }
		if($request->aadharcard_doc_back != null){
            if($request->hasFile('aadharcard_doc_back')){
                $filename = $request->aadharcard_doc_back->getClientOriginalName();
                $request->aadharcard_doc_back->move(public_path() . '/driver_documents/', $filename);
                $driver->aadharcard_doc_back = $filename;
            } 
        }
        if($request->pancard_doc != null){
            if($request->hasFile('pancard_doc')){
                $filename = $request->pancard_doc->getClientOriginalName();
                $request->pancard_doc->move(public_path() . '/driver_documents/', $filename);
                $driver->pancard_doc = $filename;
            } 
        }

        if($request->photo != null){
            if($request->hasFile('photo')){
                $filename = $request->photo->getClientOriginalName();
                $request->photo->move(public_path() . '/driver_documents/', $filename);
                $driver->photo = $filename;
            } 
        }

        if($request->current_addres_electricity_bill != null){
            if($request->hasFile('current_addres_electricity_bill')){
                $filename = $request->current_addres_electricity_bill->getClientOriginalName();
                $request->current_addres_electricity_bill->move(public_path() . '/driver_documents/', $filename);
                $driver->current_addres_electricity_bill = $filename;
            } 
        }

        if($request->police_verification_report != null){
            if($request->hasFile('police_verification_report')){
                $filename = $request->police_verification_report->getClientOriginalName();
                $request->police_verification_report->move(public_path() . '/driver_documents/', $filename);
                $driver->police_verification_report = $filename;
            } 
        }

        $driver->save();

        $driverId = $driver->driver_id;

        $userdata = User::find($userId);
        $userdata->driver_accessId = $driverId;
        $userdata->save();	

        $request->session()->flash('success', 'Driver details saved successfully');

        return redirect()->route('driver-list');
    }

    public function DeleteDriver(Request $request)
    {
        $driver_id = $request->driver_id;
        $driver = Driver::find($driver_id);
        $driver->delete();
        $request->session()->flash('success', 'Driver Deleted successfully');

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $driver_id = $request->driver_id;
        $driver =  Driver::find($driver_id);
        $driver->name = $request->name;
        $driver->email = $request->email;
        $driver->mobile_number = $request->contact_no;
        $driver->alternate_contact_no = $request->alternate_contact_no;
        $driver->address_one = $request->address_one;
		$driver->address_two = $request->address_two;
        $driver->comment = $request->comment;
        $driver->pincode = $request->pincode;
        $driver->driver_language = implode(',', $request->driver_language);
        $driver->vendor_id = $request->vendor_id;
		$driver->aadhar_number = $request->aadhar_number;
		$driver->pan_number = $request->pan_number;
		$driver->driver_licence_number = $request->driver_licence_number;
        if($request->licence_doc != null){
            if($request->hasFile('licence_doc')){
                $filename = $request->licence_doc->getClientOriginalName();
                $request->licence_doc->move(public_path() . '/driver_documents/', $filename);
                $driver->licence_doc = $filename;
            } 
        }
        if($request->aadharcard_doc != null){
            if($request->hasFile('aadharcard_doc')){
                $filename = $request->aadharcard_doc->getClientOriginalName();
                $request->aadharcard_doc->move(public_path() . '/driver_documents/', $filename);
                $driver->aadharcard_doc = $filename;
            } 
        }
		if($request->aadharcard_doc_back != null){
            if($request->hasFile('aadharcard_doc_back')){
                $filename = $request->aadharcard_doc_back->getClientOriginalName();
                $request->aadharcard_doc_back->move(public_path() . '/driver_documents/', $filename);
                $driver->aadharcard_doc_back = $filename;
            } 
        }
        if($request->pancard_doc != null){
            if($request->hasFile('pancard_doc')){
                $filename = $request->pancard_doc->getClientOriginalName();
                $request->pancard_doc->move(public_path() . '/driver_documents/', $filename);
                $driver->pancard_doc = $filename;
            } 
        }

        if($request->photo != null){
            if($request->hasFile('photo')){
                $filename = $request->photo->getClientOriginalName();
                $request->photo->move(public_path() . '/driver_documents/', $filename);
                $driver->photo = $filename;
            } 
        }

        if($request->current_addres_electricity_bill != null){
            if($request->hasFile('current_addres_electricity_bill')){
                $filename = $request->current_addres_electricity_bill->getClientOriginalName();
                $request->current_addres_electricity_bill->move(public_path() . '/driver_documents/', $filename);
                $driver->current_addres_electricity_bill = $filename;
            } 
        }

        if($request->police_verification_report != null){
            if($request->hasFile('police_verification_report')){
                $filename = $request->police_verification_report->getClientOriginalName();
                $request->police_verification_report->move(public_path() . '/driver_documents/', $filename);
                $driver->police_verification_report = $filename;
            } 
        }
        
        $driver->save();

        $request->session()->flash('success', 'Driver details update successfully');

        return redirect()->route('driver-list');
    }
	
	public function updatedriververificationstatus(Request $request)
	{
		$driver_id = $request->driver_id;
        $driver = Driver::find($driver_id);
		$driver->verified_status = $request->status;
		$driver->save();
	 	$request->session()->flash('success', 'Driver Verification status updated succefully');
        return redirect()->back();
	}
	
	public function updateDriverDocumentStatus(Request $request)
	{
		$driver = Driver::find($request->driver_id);

		switch ($request->document_type) {
			case 'photo':
				$driver->photo_status = $request->status;
				break;
			case 'licence_doc':
				$driver->licence_doc_status = $request->status;
				break;
			case 'pancard_doc':
				$driver->pancard_doc_status = $request->status;
				break;
			case 'aadharcard_front_doc':
				$driver->aadharcard_front_doc_status = $request->status;
				break;
			case 'aadharcard_doc_back':
				$driver->aadharcard_doc_back_status = $request->status;
				break;
			case 'police_verification_report':
				$driver->police_verification_report_status = $request->status;
				break;
			case 'current_addres_electricity_bill':
				$driver->current_addres_electricity_bill_status = $request->status;
				break;
		}
		
		switch ($request->comment_type) {
			case 'photo_comment':
				$driver->photo_comment = $request->comment;
				break;
			case 'licence_doc_comment':
				$driver->licence_doc_comment = $request->comment;
				break;
			case 'pancard_doc_comment':
				$driver->pancard_doc_comment = $request->comment;
				break;
			case 'aadharcard_front_doc_comment':
				$driver->aadharcard_front_doc_comment = $request->comment;
				break;
			case 'aadharcard_doc_back_comment':
				$driver->aadharcard_doc_back_comment = $request->comment;
				break;
			case 'police_verification_report_comment':
				$driver->police_verification_report_comment = $request->comment;
				break;
			case 'current_addres_electricity_bill_comment':
				$driver->current_addres_electricity_bill_comment = $request->comment;
				break;
		}

		if ($driver->save()) {
			return response()->json(['success' => true, 'data' => $request]);
		} else {
			return response()->json(['success' => false, 'data' => $request], 500);
		}
	}
}
