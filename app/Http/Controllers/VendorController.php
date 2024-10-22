<?php
namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\User;
use App\Models\CarDetail;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function store(Request $request)
	{
		$existingVendor = Vendor::where('contact_no', $request->contact_no)
									  ->where('access_id', 4)
									 // ->where('verified_status', 1)
									  ->first();
        if ($existingVendor) {
            $alert = [
                'message' => 'Vendor already existed.',
                'alert-type' => 'error'
                ];
            return redirect()->back()->with($alert);
            }

            $vendor = new Vendor;
            $vendor->contact_no = $request->contact_no;
            $vendor->alternate_contact_no = $request->alternate_contact_no;
            $vendor->name = $request->name;
            $vendor->email = $request->email;
            $vendor->company_name = $request->company_name;
            $vendor->no_of_cars = $request->no_of_cars;
            $vendor->owner_drives = $request->owner_drives;
            $vendor->is_interested = $request->is_interested;
            $vendor->save();

		if ($request->has('car_type')) {
			foreach ($request->car_type as $key => $carType) {
				$carDetail = new CarDetail;
				$carDetail->vendor_id = $vendor->id;
				$carDetail->car_name = $request->car_name[$key];
				$carDetail->car_type = $request->car_type[$key];
				$carDetail->car_class = $request->car_class[$key];
				 $carDetail->no_of_cars_quantity = $request->no_of_cars_quantity[$key];
				 if (isset($request->additional_registration[$key]) && is_array($request->additional_registration[$key])) {
					$carDetail->car_registration = implode(',', $request->additional_registration[$key]);
				} else {
					$carDetail->car_registration = null;
				}
				$carDetail->save();
			}
		}
		$request->session()->flash('success', 'Vendor and car details saved successfully');

		return redirect()->route('vendor-list');
	}


public function updateVendor(Request $request, $id)
{
    try {

        $existingVendor = Vendor::where('contact_no', $request->contact_no)
            ->where('id', '!=', $id)
            ->first();


        if ($existingVendor) {
            $alert = [
                'message' => 'Mobile number already exists for another Vendor.',
                'alert-type' => 'error'
            ];
        return redirect()->back()->with($alert);
    }

        // Update vendor details
        $vendor = Vendor::findOrFail($id);
        $vendor->contact_no = $request->input('contact_no');
        $vendor->alternate_contact_no = $request->input('alternate_contact_no');
        $vendor->name = $request->input('name');
        $vendor->email = $request->input('email');
        $vendor->company_name = $request->input('company_name');
        $vendor->no_of_cars = $request->input('no_of_cars');
        $vendor->owner_drives = $request->input('owner_drives');
        $vendor->is_interested = $request->input('is_interested');
		$vendor->aadhar_number = $request->aadhar_number;
		$vendor->pan_number = $request->pan_number;
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

        // Update or create car details
        $existingCarDetailIds = $request->input('car_detail_id', []);

        // Delete car details not in the updated list
        CarDetail::where('vendor_id', $id)->whereNotIn('id', $existingCarDetailIds)->delete();

        // Process each submitted car detail
        foreach ($request->input('car_name') as $key => $carName) {
            $carDetail = CarDetail::find($existingCarDetailIds[$key] ?? null);

            if ($carDetail) {
                // Update existing car detail
                $carDetail->car_name = $carName;
                $carDetail->car_type = $request->input('car_type')[$key];
                $carDetail->car_class = $request->input('car_class')[$key];
                $carDetail->car_registration = $request->input('car_registration')[$key];
                $carDetail->no_of_cars_quantity = $request->input('no_of_cars_quantity')[$key];
                $carDetail->save();
            } else {
                // Create new car detail
                $carDetail = new CarDetail;
                $carDetail->vendor_id = $vendor->id;
                $carDetail->car_name = $carName;
                $carDetail->car_type = $request->input('car_type')[$key];
                $carDetail->car_class = $request->input('car_class')[$key];
                $carDetail->car_registration = $request->input('car_registration')[$key];
                $carDetail->no_of_cars_quantity = $request->input('no_of_cars_quantity')[$key];
                $carDetail->save();
            }
        }

        // Flash success message to session
        $request->session()->flash('success', 'Vendor and car details updated successfully');

        // Redirect to vendor list page
        return redirect()->route('vendor-list');
    } catch (\Exception $e) {
        // Log the error or handle it as needed
        // Flash error message to session
        $request->session()->flash('error', 'Failed to update vendor and car details');
        return back()->withInput();
    }
}



public function updateCarsDocuments(Request $request, $id)
{

    $carDetail = CarDetail::find($id);
	if($request->car_front_image != null){
        if($request->hasFile('car_front_image')){
            $filename = $request->car_front_image->getClientOriginalName();
            $request->car_front_image->move(public_path() . '/car-details/', $filename);
            $carDetail->car_front_image = $filename;
        } 
    }
	if($request->car_back_image != null){
        if($request->hasFile('car_back_image')){
            $filename = $request->car_back_image->getClientOriginalName();
            $request->car_back_image->move(public_path() . '/car-details/', $filename);
            $carDetail->car_back_image = $filename;
        } 
    }
	if($request->car_interior_image != null){
        if($request->hasFile('car_interior_image')){
            $filename = $request->car_interior_image->getClientOriginalName();
            $request->car_interior_image->move(public_path() . '/car-details/', $filename);
            $carDetail->car_interior_image = $filename;
        } 
    }
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

public function DeleteVendor(Request $request)
    {
        $vendor_id = $request->vendor_id;

        $vendor = Vendor::find($vendor_id);
        $vendor->delete();

        $request->session()->flash('success', 'Vendor Deleted successfully');

        return redirect()->route('vendor-list');
    }

    public function DeleteVendorCar(Request $request)
    {
        $id = $request->id;
        $carDetail = CarDetail::find($id);
        $carDetail->delete();
        $request->session()->flash('success', 'Car deleted succefully');
        return redirect()->back();
    }
	
	public function updatevendorverificationstatus(Request $request)
	{
		$vendor_id = $request->vendor_id;
        $vendor = Vendor::find($vendor_id);
		$vendor->verified_status = $request->status;
		$vendor->save();
	 	$request->session()->flash('success', 'Vendor Verification status updated succefully');
        return redirect()->back();
	}
	
	public function updateDocumentStatus(Request $request)
	{
		$vendor = Vendor::find($request->vendor_id);

		switch ($request->document_type) {
			case 'photo':
				$vendor->photo_status = $request->status;
				break;
			case 'licence':
				$vendor->licence_status = $request->status;
				break;
			case 'pancard':
				$vendor->pancard_status = $request->status;
				break;
			case 'aadhar_front':
				$vendor->aadhar_card_front_status = $request->status;
				break;
			case 'aadhar_back':
				$vendor->aadhar_card_back_status = $request->status;
				break;
			case 'electricity_bill_status':
				$vendor->electricity_bill_status = $request->status;
				break;
			case 'police_verification_report_status':
				$vendor->police_verification_report_status = $request->status;
				break;
		}
		
		switch ($request->comment_type) {
			case 'photo_comment':
				$vendor->photo_comment = $request->comment;
				break;
			case 'licence_comment':
				$vendor->licence_comment = $request->comment;
				break;
			case 'pancard_comment':
				$vendor->pancard_comment = $request->comment;
				break;
			case 'aadhar_front_comment':
				$vendor->aadhar_front_comment = $request->comment;
				break;
			case 'aadhar_card_back_comment':
				$vendor->aadhar_card_back_comment = $request->comment;
				break;
			case 'electricity_bill_comment':
				$vendor->electricity_bill_comment = $request->comment;
				break;
			case 'police_verification_report_comment':
				$vendor->police_verification_report_comment = $request->comment;
				break;
		}

		if ($vendor->save()) {
			return response()->json(['success' => true]);
		} else {
			return response()->json(['success' => false], 500);
		}
	}

}

