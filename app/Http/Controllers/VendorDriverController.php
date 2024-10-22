<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\User;
use App\Models\CarDetail;
use Illuminate\Support\Facades\Hash;

class VendorDriverController extends Controller
{
    //
    public function store(Request $request)
    {
       // dd($request);
        $existingUser = Driver::where('mobile_number', $request->input('contact_no'))
                        ->where('access_id', 3)
                        ->first();

        if ($existingUser) {
                $alert = [
                    'message' => 'A Driver with this mobile number already exists.',
                    'alert-type' => 'error'
                ];
                
                return redirect()->back()->with($alert);
        }

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

        $request->session()->flash('success', 'Driver details saved successfully');

        return redirect()->route('drivers');
    }

    public function DeleteDriver(Request $request)
    {
        $driver_id = $request->driver_id;

        $driver = Driver::find($driver_id);
        $driver->delete();

        $request->session()->flash('success', 'Driver Deleted successfully');

        return redirect()->route('drivers');
    }

    public function update(Request $request)
    {
        $driver_id = $request->driver_id;


    // Check if the mobile number already exists for another driver
    $existingDriver = Driver::where('mobile_number', $request->contact_no)
                            ->where('driver_id', '!=', $driver_id)
                            ->first();

    if ($existingDriver) {
            $alert = [
                'message' => 'Mobile number already exists for another driver.',
                'alert-type' => 'error'
            ];
        return redirect()->back()->with($alert);
    }
        $driver =  Driver::find($driver_id);
        $driver->name = $request->name;
        $driver->email = $request->email;
        $driver->mobile_number = $request->contact_no;
        $driver->alternate_contact_no = $request->alternate_contact_no;
        $driver->address = $request->address;
        $driver->comment = $request->comment;
        $driver->pincode = $request->pincode;
        $driver->driver_language = implode(',', $request->driver_language);
        $driver->vendor_id = $request->vendor_id;

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

        return redirect()->route('drivers');
    }

    public function storeCarDetails(Request $request)
    {
        //dd($request);
        if ($request->has('car_type')) {
            foreach ($request->car_type as $key => $carType) {
                $carDetail = new CarDetail;
                $carDetail->vendor_id = $request->vendor_id;
                $carDetail->car_name = $request->car_name[$key];
                $carDetail->car_type = $request->car_type[$key];
                $carDetail->car_class = $request->car_class[$key];
                $carDetail->no_of_cars_quantity = $request->no_of_cars_quantity[$key];
    
                // Combine car registration numbers into a comma-separated string
                if (isset($request->additional_registration[$key]) && is_array($request->additional_registration[$key])) {
                    $carDetail->car_registration = implode(',', $request->additional_registration[$key]);
                } else {
                    $carDetail->car_registration = null;
                }
    
                $carDetail->save();
                //dd($carDetail);
            }
        }
    
        $request->session()->flash('success', 'Car details saved successfully');
    
        return redirect()->route('vendors-cars');
    }
    

public function updateCarsDocuments(Request $request, $id)
{

    $carDetail = CarDetail::find($id);

    if($request->sales_tax_receipt != null){
        if($request->hasFile('sales_tax_receipt')){
            $filename = $request->sales_tax_receipt->getClientOriginalName();
            $request->sales_tax_receipt->move(public_path() . '/car-details/', $filename);
            $carDetail->sales_tax_receipt = $filename;
        } 
    }
    if($request->rc_book != null){
        if($request->hasFile('rc_book')){
            $filename = $request->rc_book->getClientOriginalName();
            $request->rc_book->move(public_path() . '/car-details/', $filename);
            $carDetail->rc_book = $filename;
        } 
    }
    if($request->insurance_policy != null){
        if($request->hasFile('insurance_policy')){
            $filename = $request->insurance_policy->getClientOriginalName();
            $request->insurance_policy->move(public_path() . '/car-details/', $filename);
            $carDetail->insurance_policy = $filename;
        } 
    }
    if($request->puc != null){
        if($request->hasFile('puc')){
            $filename = $request->puc->getClientOriginalName();
            $request->puc->move(public_path() . '/car-details/', $filename);
            $carDetail->puc = $filename;
        } 
    }
    if($request->fitness_certificate != null){
        if($request->hasFile('fitness_certificate')){
            $filename = $request->fitness_certificate->getClientOriginalName();
            $request->fitness_certificate->move(public_path() . '/car-details/', $filename);
            $carDetail->fitness_certificate = $filename;
        } 
    }
    if($request->authorization_letter != null){
        if($request->hasFile('authorization_letter')){
            $filename = $request->authorization_letter->getClientOriginalName();
            $request->authorization_letter->move(public_path() . '/car-details/', $filename);
            $carDetail->authorization_letter = $filename;
        } 
    }
    if($request->rto_tax_receipt != null){
        if($request->hasFile('rto_tax_receipt')){
            $filename = $request->rto_tax_receipt->getClientOriginalName();
            $request->rto_tax_receipt->move(public_path() . '/car-details/', $filename);
            $carDetail->rto_tax_receipt = $filename;
        } 
    }
    if($request->professional_tax_receipt != null){
        if($request->hasFile('professional_tax_receipt')){
            $filename = $request->professional_tax_receipt->getClientOriginalName();
            $request->professional_tax_receipt->move(public_path() . '/car-details/', $filename);
            $carDetail->professional_tax_receipt = $filename;
        } 
    }
    $carDetail->save();
    $request->session()->flash('success', 'Car document uploded succefully');
    return redirect()->back();

}

    public function DeleteVendorCar(Request $request)
    {
        $id = $request->id;
        $carDetail = CarDetail::find($id);
        $carDetail->delete();
        $request->session()->flash('success', 'Car deleted succefully');
        return redirect()->back();
    }

}
