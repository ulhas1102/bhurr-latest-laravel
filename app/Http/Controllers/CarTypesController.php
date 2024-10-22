<?php

namespace App\Http\Controllers;
use App\Models\CarTypes;
use App\Models\CarDetail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarTypesController extends Controller
{
    //
    public function AddCarType(Request $request)
    {
       // dd($request);
        // Validate the request
        $request->validate([
            'car_type' => 'required|max:255|unique:cars_type,car_type',
        ]);

        // Create a new CarType instance and save it to the database
        $carType = new CarTypes;
        $carType->car_type = $request->input('car_type');
        $carType->save();

       
        $request->session()->flash('success', 'Car Type added successfully');

        return redirect()->route('cars-type');
    }

    public function deleteCarTypes(Request $request)
    {
        $dataId = $request->car_type_id;

        $carType = CarTypes::find($dataId);
        $carType->delete();

        $request->session()->flash('success', 'Car Type deleted successfully');
        return redirect()->route('cars-type');

    }
	

	public function updateCarDocumentStatus(Request $request)
	{
		//dd($request);
		$driver = CarDetail::find($request->car_id);

		switch ($request->document_type) {
			case 'car_front_image':
				$driver->car_front_image_status = $request->status;
				break;
			case 'car_back_image':
				$driver->car_back_image_status = $request->status;
				break;
			case 'car_interior_image':
				$driver->car_interior_image_status = $request->status;
				break;
			case 'rc_book':
				$driver->rc_book_status = $request->status;
				break;
			case 'insurance_policy':
				$driver->insurance_policy_status = $request->status;
				break;
			case 'puc':
				$driver->puc_status = $request->status;
				break;
			case 'fitness_certificate':
				$driver->fitness_certificate_status = $request->status;
				break;
			case 'authorization_letter':
				$driver->authorization_letter_status = $request->status;
				break;
			case 'rto_tax_receipt':
				$driver->rto_tax_receipt_status = $request->status;
				break;
			case 'professional_tax_receipt':
				$driver->professional_tax_receipt_status = $request->status;
				break;
			case 'sales_tax_receipt':
				$driver->sales_tax_receipt_status = $request->status;
				break;
		}
		
		switch ($request->comment_type) {
			case 'car_front_image_comment':
				$driver->car_front_image_comment = $request->comment;
				break;
			case 'car_back_image_comment':
				$driver->car_back_image_comment = $request->comment;
				break;
			case 'car_interior_image_comment':
				$driver->car_interior_image_comment = $request->comment;
				break;
			case 'rc_book_comment':
				$driver->rc_book_comment = $request->comment;
				break;
			case 'insurance_policy_comment':
				$driver->insurance_policy_comment = $request->comment;
				break;
			case 'puc_comment':
				$driver->puc_comment = $request->comment;
				break;
			case 'fitness_certificate_comment':
				$driver->fitness_certificate_comment = $request->comment;
				break;
			case 'authorization_letter_comment':
				$driver->authorization_letter_comment = $request->comment;
				break;
			case 'rto_tax_receipt_comment':
				$driver->rto_tax_receipt_comment = $request->comment;
				break;
			case 'professional_tax_receipt_comment':
				$driver->professional_tax_receipt_comment = $request->comment;
				break;
			case 'sales_tax_receipt_comment':
				$driver->sales_tax_receipt_comment = $request->comment;
				break;
		}

		if ($driver->save()) {
			return response()->json(['success' => true, 'data' => $request]);
		} else {
			return response()->json(['success' => false, 'data' => $request], 500);
		}
	}
	
	public function updatecarverificationstatus(Request $request)
	{
		$car_id = $request->car_id;
        $driver = CarDetail::find($car_id);
		$driver->verified_status = $request->status;
		$driver->save();
	 	$request->session()->flash('success', 'Car Verification status updated succefully');
        return redirect()->back();
	}
}
