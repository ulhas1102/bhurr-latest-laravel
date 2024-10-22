<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carclass;
use App\Models\Cancellation;
use App\Models\PriceGroup;
use App\Models\ClassWiseCar;
class CarclassController extends Controller
{
    //
    public function AddCarClass(Request $request)
    {
       // dd($request);
        // Validate the request
        $request->validate([
            'car_class' => 'required|max:255|unique:carclass,car_class',
        ]);

        // Create a new CarType instance and save it to the database
        $carclass = new Carclass;
        $carclass->car_class = $request->input('car_class');

        if($request->class_image != null){
            if($request->hasFile('class_image')){
                $filename = $request->class_image->getClientOriginalName();
                $request->class_image->move(public_path() . '/class_images/', $filename);
                $carclass->class_image = $filename;
            } 
        }

        $carclass->luggage_capacity = $request->input('luggage_capacity');
        $carclass->seating_capacity = $request->input('seating_capacity');
        
        $carclass->save();

        $request->session()->flash('success', 'Car class added successfully');
        return redirect()->route('car-class');
    }

    public function updateCarClass(Request $request, $id)
    {
     // dd($request);
        // Create a new CarType instance and save it to the database
        $carclass = Carclass::find($id);
        // $carclass->car_class = $request->input('car_class');
       // dd($request->class_image);
        if($request->class_image != null){
            if($request->hasFile('class_image')){
                $filename = $request->class_image->getClientOriginalName();
                $request->class_image->move(public_path() . '/class_images/', $filename);
                $carclass->class_image = $filename;
            } 
        }
        $carclass->luggage_capacity = $request->input('luggage_capacity');
        $carclass->seating_capacity = $request->input('seating_capacity');
        $carclass->save();
        $request->session()->flash('success', 'Car class added successfully');
        return redirect()->back();
    }

    public function deleteCarClass(Request $request)
    {
        $dataId = $request->car_class_id;

        $carclass = Carclass::find($dataId);
        $carclass->delete();
        
        $request->session()->flash('success', 'Car class deleted successfully');

        return redirect()->route('car-class');

    }

    public function updateFare(Request $request, $id)
    {
        $dataId = $id;
        $carclass = Carclass::find($dataId);
    
        if ($request->has('km_range')) {
            $carclass->km_range = $request->input('km_range');
        }
        if ($request->has('per_km_charges')) {
            $carclass->per_km_charges = $request->input('per_km_charges');
        }
        if ($request->has('local_disel_per_km_charges')) {
            $carclass->local_disel_per_km_charges = $request->input('local_disel_per_km_charges');
        }
        if ($request->has('local_cng_per_km_charges')) {
            $carclass->local_cng_per_km_charges = $request->input('local_cng_per_km_charges');
        }
        if ($request->has('outstation_cng_per_km_charges')) {
            $carclass->outstation_cng_per_km_charges = $request->input('outstation_cng_per_km_charges');
        }
        if ($request->has('outstation_disel_per_km_charges')) {
            $carclass->outstation_disel_per_km_charges = $request->input('outstation_disel_per_km_charges');
        }
        if ($request->has('oneway_disel_per_km_charges')) {
            $carclass->oneway_disel_per_km_charges = $request->input('oneway_disel_per_km_charges');
        }
        if ($request->has('oneway_cng_per_km_charges')) {
            $carclass->oneway_cng_per_km_charges = $request->input('oneway_cng_per_km_charges');
        }
        if ($request->has('hour_range')) {
            $carclass->hour_range = $request->input('hour_range');
        }
        if ($request->has('per_hour_charges')) {
            $carclass->per_hour_charges = $request->input('per_hour_charges');
        }
        if ($request->has('local_base_fare')) {
            $carclass->local_base_fare = $request->input('local_base_fare');
        }
        if ($request->has('outstation_base_fare')) {
            $carclass->outstation_base_fare = $request->input('outstation_base_fare');
        }
        if ($request->has('oneway_base_fare')) {
            $carclass->oneway_base_fare = $request->input('oneway_base_fare');
        }
    
        $carclass->save();
    
        $request->session()->flash('success', 'Fare Charges updated successfully');
    
        return redirect()->back();
    }
	
	public function updatecancellationPolicy(Request $request, $id)
	{
	
		$cancellation = Cancellation::find($id);
		$cancellation->package_type = $request->input('package_type');
		$cancellation->c30_minu_before = $request->input('c30_minu_before');
		$cancellation->c6_hours_before = $request->input('c6_hours_before');
		$cancellation->save();
	
	    $request->session()->flash('success', 'Cancellation policy updated successfully');
    
        return redirect()->back();
	
	}
	
	public function updatePriceGoupFare(Request $request, $id)
    {
            $dataId = $id;
            $carclass = PriceGroup::find($dataId);
    
        if ($request->has('from_location')) {
            $carclass->from_location = $request->input('from_location');
        }
        if ($request->has('city_diameter')) {
            $carclass->city_diameter = $request->input('city_diameter');
        }
        if ($request->has('per_km_charges')) {
            $carclass->per_km_charges = $request->input('per_km_charges');
        }
        if ($request->has('electric_per_km_charges')) {
            $carclass->electric_per_km_charges = $request->input('electric_per_km_charges');
        }
        if ($request->has('local_disel_per_km_charges')) {
            $carclass->local_disel_per_km_charges = $request->input('local_disel_per_km_charges');
        }
        if ($request->has('local_cng_per_km_charges')) {
            $carclass->local_cng_per_km_charges = $request->input('local_cng_per_km_charges');
        }
        if ($request->has('outstation_cng_per_km_charges')) {
            $carclass->outstation_cng_per_km_charges = $request->input('outstation_cng_per_km_charges');
        }
        if ($request->has('outstation_disel_per_km_charges')) {
            $carclass->outstation_disel_per_km_charges = $request->input('outstation_disel_per_km_charges');
        }
        if ($request->has('oneway_disel_per_km_charges')) {
            $carclass->oneway_disel_per_km_charges = $request->input('oneway_disel_per_km_charges');
        }
        if ($request->has('oneway_cng_per_km_charges')) {
            $carclass->oneway_cng_per_km_charges = $request->input('oneway_cng_per_km_charges');
        }
        
        if ($request->has('per_hour_charges')) {
            $carclass->per_hour_charges = $request->input('per_hour_charges');
        }
        if ($request->has('local_base_fare')) {
            $carclass->local_base_fare = $request->input('local_base_fare');
        }
        if ($request->has('outstation_base_fare')) {
            $carclass->outstation_base_fare = $request->input('outstation_base_fare');
        }
        if ($request->has('oneway_base_fare')) {
            $carclass->oneway_base_fare = $request->input('oneway_base_fare');
        }
    
        $carclass->save();
    
        $request->session()->flash('success', 'Fare Charges updated successfully');
    
        return redirect()->back();
    }


    public function AddCity(Request $request)
    {

        $carclass = new PriceGroup;
        if ($request->has('car_class_id')) {
                $carclass->car_class_id = $request->input('car_class_id');
        }
        if ($request->has('from_location')) {
            $carclass->from_location = $request->input('from_location');
        }
        if ($request->has('city_diameter')) {
            $carclass->city_diameter = $request->input('city_diameter');
        }
        if ($request->has('per_km_charges')) {
            $carclass->per_km_charges = $request->input('per_km_charges');
        }
        if ($request->has('local_disel_per_km_charges')) {
            $carclass->local_disel_per_km_charges = $request->input('local_disel_per_km_charges');
        }
        if ($request->has('local_cng_per_km_charges')) {
            $carclass->local_cng_per_km_charges = $request->input('local_cng_per_km_charges');
        }
        if ($request->has('outstation_cng_per_km_charges')) {
            $carclass->outstation_cng_per_km_charges = $request->input('outstation_cng_per_km_charges');
        }
        if ($request->has('outstation_disel_per_km_charges')) {
            $carclass->outstation_disel_per_km_charges = $request->input('outstation_disel_per_km_charges');
        }
        if ($request->has('oneway_disel_per_km_charges')) {
            $carclass->oneway_disel_per_km_charges = $request->input('oneway_disel_per_km_charges');
        }
        if ($request->has('oneway_cng_per_km_charges')) {
            $carclass->oneway_cng_per_km_charges = $request->input('oneway_cng_per_km_charges');
        }
        
        if ($request->has('per_hour_charges')) {
            $carclass->per_hour_charges = $request->input('per_hour_charges');
        }
        if ($request->has('local_base_fare')) {
            $carclass->local_base_fare = $request->input('local_base_fare');
        }
        if ($request->has('outstation_base_fare')) {
            $carclass->outstation_base_fare = $request->input('outstation_base_fare');
        }
        if ($request->has('oneway_base_fare')) {
            $carclass->oneway_base_fare = $request->input('oneway_base_fare');
        }
        if ($request->has('electric_per_km_charges')) {
            $carclass->electric_per_km_charges = $request->input('electric_per_km_charges');
        }
    
        $carclass->save();
    
        $request->session()->flash('success', 'Add City Updated successfully');
    
        return redirect()->back();
    }
	
	public function AddCarClassWise(Request $request)
	{
		$car =  new ClassWiseCar;
		$car->car_name = $request->car_name;
		$car->class_name = $request->class_name;
		$car->save();
		$request->session()->flash('success', 'Car Submitted successfully');
        return redirect()->back();
	}
	
	public function EditCarClassWise(Request $request, $id)
	{
		$car = ClassWiseCar::find($id);
		$car->car_name = $request->car_name;
		$car->save();
		$request->session()->flash('success', 'Car Edited successfully');
        return redirect()->back();
	}
    
}
