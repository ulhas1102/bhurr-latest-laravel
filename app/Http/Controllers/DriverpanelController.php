<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiries;
use App\Models\Vendor;
use App\Models\Driver;
use App\Models\CarDetail;
use App\Models\PaymentHistorys;
use App\Models\CarTypes;
use App\Models\ExtraHours;
use App\Models\Extrakilometers;
use Carbon\Carbon;
use App\Models\Carclass;
use Illuminate\Support\Facades\Auth;
use PDF;

class DriverpanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:driver'); // Use the driver guard
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalEnquiries = Enquiries::where('confirm_status', 1)->where('driver_id', Auth::guard('driver')->user()->driver_id)->count();
        $totalCompleteEnquiries =  Enquiries::where('trip_status', 1)->where('driver_id', Auth::guard('driver')->user()->driver_id)->count();
        $totalCancelledEnquiries =  Enquiries::where('trip_status', 3)->where('driver_id', Auth::guard('driver')->user()->driver_id)->count();
       
        return view('driver-panel.dashboard', compact('totalEnquiries','totalCompleteEnquiries','totalCancelledEnquiries'));
    }


    public function addPaymentHistory(Request $request)
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

        $remainingAmount = $enquiry->remaining_amount - $request->input('paid_amount');
        $enquiry->remaining_amount =  $remainingAmount;

        $AdvanceAmount = $enquiry->advance_amount;
        $advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;
        
        $payment = PaymentHistorys::where('enquiry_id', $enquiryId)->sum('paid_amount');
      
        $overallPaidAmount = $advance + $payment;
        $enquiry->overallpaidamount = $overallPaidAmount;
        $enquiry->save();
        // dd($enquiry);

        $request->session()->flash('success', 'Payment saved successfully!');

        return redirect()->back();

    }

    public function updatePaymentHistory(Request $request, $id)
    {

        // Find the payment history record by ID and update it
        $paymentHistory = PaymentHistorys::find($id);
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

        //dd($enquiry);
        $request->session()->flash('success', 'Payment details updated successfully!');

        return redirect()->back();
    }



    public function deletepaymentHistory(Request $request)
    {
        $payment_historyId = $request->payment_history_id;
        $paymentHistory = PaymentHistorys::find($payment_historyId);

        $paymentHistory->delete();

        $request->session()->flash('success', 'Payment details deleted successfully!');

        return redirect()->back();

    }


    public function addExtraHours(Request $request)
{
    // Add new extra hours
    $extrahours = new ExtraHours();
    $extrahours->enquiry_id = $request->input('enquiry_id');
    $extrahours->extra_hours = $request->input('extra_hours');
    $extrahours->date = $request->input('date');
    $extrahours->start_time = $request->input('start_time');
    $extrahours->end_time = $request->input('end_time');
    $extrahours->comment = $request->input('comment');
    $extrahours->save();

    // Retrieve related enquiry
    $enquiryId = $request->enquiry_id;
    $enquiry = Enquiries::find($enquiryId);
    $vehicleClass = $enquiry->vehicle_class;
    $remainingAmount = $enquiry->remaining_amount;

    // Retrieve the per hour charges for the vehicle class
    $Carclass = Carclass::where('car_class', $vehicleClass)->first();
    $ExtrahoursCharges = $Carclass->per_hour_charges;

    // Calculate new extra hours and charges
    $newExtraHours = $request->input('extra_hours');
    $newExtraHourCharges = $newExtraHours * $ExtrahoursCharges;

    // Update the enquiry with new totals
    $enquiry->extra_hours += $newExtraHours;
    $enquiry->extra_hours_amount += $newExtraHourCharges;
    $enquiry->remaining_amount += $newExtraHourCharges;
    $enquiry->extra_hour_charges = $ExtrahoursCharges;
    $enquiry->save();

    // Set success message and redirect back
    $request->session()->flash('success', 'Extra hours added successfully!');
    return redirect()->back();
}


    public function deleteExtraHours(Request $request)
    {

        $extra_hours_Id = $request->extra_hours_id;
        $extrahours = ExtraHours::find($extra_hours_Id);
        $extrahours->delete();
        $request->session()->flash('success', 'Extra hours deleted successfully!');

        return redirect()->back();

    }


    public function updateExtarHours(Request $request, $id)
{
    // Find the existing extra hours record
    $extrahours = ExtraHours::find($id);

    // Store the original extra hours value
    $originalExtraHours = $extrahours->extra_hours;

    // Update the extra hours record with new values
    $extrahours->enquiry_id = $request->input('enquiry_id');
    $extrahours->extra_hours = $request->input('extra_hours');
    $extrahours->date = $request->input('date');
    $extrahours->start_time = $request->input('start_time');
    $extrahours->end_time = $request->input('end_time');
    $extrahours->comment = $request->input('comment');
    $extrahours->save();

    // Retrieve related enquiry
    $enquiryId = $request->enquiry_id;
    $enquiry = Enquiries::find($enquiryId);
    $vehicleClass = $enquiry->vehicle_class;
    $remainingAmount = $enquiry->remaining_amount;

    // Calculate the difference in extra hours
    $newExtraHours = $request->input('extra_hours');
    $hoursDifference = $newExtraHours - $originalExtraHours;

    // Retrieve the per hour charges for the vehicle class
    $Carclass = Carclass::where('car_class', $vehicleClass)->first();
    $ExtrahoursCharges = $Carclass->per_hour_charges;

    // Calculate the adjustment in extra hour charges
    $adjustmentAmount = $hoursDifference * $ExtrahoursCharges;

    // Update the enquiry with new totals
    $enquiry->extra_hours += $hoursDifference;
    $enquiry->extra_hours_amount += $adjustmentAmount;
    $enquiry->remaining_amount += $adjustmentAmount;
    $enquiry->extra_hour_charges = $ExtrahoursCharges;
    $enquiry->save();

    // Set success message and redirect back
    $request->session()->flash('success', 'Extra hours updated successfully!');
    return redirect()->back();
}

public function EditEnquiries(Request $request)
    {

        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        
        // $TotalAmount = $enquiry->remaining_amount;
        $TotalAmount = $enquiry->total_amount;
		if($request->trip_status == 3){
			$AdvanceAmount = $enquiry->overallpaidamount;
			$advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;
			$RemaingAmount = $TotalAmount - $advance;
			$enquiry->remaining_amount = $RemaingAmount;
		}
        $start_journy_date = $request->input('start_journy_date');
        $end_journy_date = $request->input('end_journy_date');

        $start_date = Carbon::parse($start_journy_date);
        $end_date = Carbon::parse($end_journy_date);
        $number_of_days = $start_date->diffInDays($end_date);

        //dd($number_of_days);
        if ($number_of_days == 0) {
            $enquiry->number_of_days_trip = 1;
        }else{
            $enquiry->number_of_days_trip = $number_of_days;
        }

        $enquiry->customer_name = $request->input('customer_name');
        $enquiry->customer_email = $request->input('customer_email');
        $enquiry->customer_mobile = $request->input('customer_mobile');
        $enquiry->alternate_customer_mobile = $request->input('alternate_customer_mobile');
        $enquiry->customer_address = $request->input('customer_address');
        $enquiry->customer_pincode = $request->input('customer_pincode');
        $enquiry->package_type = $request->input('package_type');
        $enquiry->from_location = $request->input('from_location');
        $enquiry->to_location = $request->input('to_location');
        $enquiry->start_journy_date = $request->input('start_journy_date');
        $enquiry->end_journy_date = $request->input('end_journy_date');
        $enquiry->number_of_persons = $request->input('number_of_persons');
        $enquiry->vehicle_name = $request->input('vehicle_name');
        $enquiry->vehicle_type = $request->input('vehicle_type');
        $enquiry->vehicle_class = $request->input('vehicle_class');
        $enquiry->driver_id = $request->input('driver_id');
        $enquiry->vendor_id = $request->input('vendor_id');
        $enquiry->confirm_status = $request->input('trip_confirm');
        $enquiry->advance_amount = $request->input('advance_amount');
        $enquiry->trip_status = $request->input('trip_status');
        
        $enquiry->save();

        $request->session()->flash('success', 'Enquiry updated successfully!');

        return redirect()->route('all-new-enquiries');

    }

    public function generateInvoice($enquiryId)
    {
        $enquiry = Enquiries::find($enquiryId);
        $paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiryId)->get();

        if (!$enquiry) {
            return redirect()->back()->with('error', 'Enquiry not found.');
        }

        return view('driver-panel.enquiries.invoice', compact('enquiry', 'paymentHistorys'));
    }

    public function downloadInvoice($enquiryId)
    {
        $enquiry = Enquiries::find($enquiryId);
        $paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiryId)->get();

        if (!$enquiry) {
            return redirect()->back()->with('error', 'Enquiry not found.');
        }

        $pdf = PDF::loadView('driver-panel.enquiries.invoice-two', compact('enquiry', 'paymentHistorys'));

        return $pdf->download('invoice.pdf');
    }

    public function CustomizeInvoice(Request $request, $id)
    {
     
        $enquiry = Enquiries::find($id);
        $enquiry->cleaning_charges = $request->input('cleaning_charges');
        $enquiry->tax_amount = $request->input('tax_amount');
        $enquiry->toll_amount = $request->input('toll_amount');
        $enquiry->save();


        $enquiredata = Enquiries::find($id);

        $cleaningCharges = $enquiry->cleaning_charges;
        $taxAmount = $enquiry->tax_amount;
        $tollAmount = $enquiry->toll_amount;
        $rermainingAmount = $enquiry->remaining_amount;

        $totalRemainingAmount = $rermainingAmount + $cleaningCharges + $taxAmount + $tollAmount;

        $enquiredata->remaining_amount = $totalRemainingAmount;
        $enquiredata->save();

        $request->session()->flash('success', 'Invoice updated successfully!');
        return redirect()->back();

    }


    public function addExtraKilometers(Request $request)
    {
        // Add new extra hours
        $extraKilometer = new Extrakilometers();
        $extraKilometer->enquiry_id = $request->input('enquiry_id');
        $extraKilometer->kilometers = $request->input('kilometers');
        $extraKilometer->date = $request->input('date');
        $extraKilometer->comment = $request->input('comment');
        $extraKilometer->save();
    
        // Retrieve related enquiry
        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        $vehicleClass = $enquiry->vehicle_class;
        $remainingAmount = $enquiry->remaining_amount;
    
        // Retrieve the per hour charges for the vehicle class
        $Carclass = Carclass::where('car_class', $vehicleClass)->first();
        $ExtraKiloemeterCharges = $Carclass->per_km_charges;
    
        // Calculate new extra hours and charges
        $newExtraKilometers = $request->input('kilometers');
        $newExtraKilometerCharges = $newExtraKilometers * $ExtraKiloemeterCharges;
    
        // Update the enquiry with new totals
        $enquiry->kilometers += $newExtraKilometers;
        $enquiry->extra_kilometers_amount += $newExtraKilometerCharges;
        $enquiry->remaining_amount += $newExtraKilometerCharges;
        $enquiry->extra_kilometer_charges = $ExtraKiloemeterCharges;
        $enquiry->save();
    
        // Set success message and redirect back
        $request->session()->flash('success', 'Extra Kilometers added successfully!');
        return redirect()->back();
    }


    public function updateExtarKilometers(Request $request, $id)
{
    // Find the existing extra hours record
    $extraKilometer = Extrakilometers::find($id);

    // Store the original extra hours value
    $originalExtraKilometers = $extraKilometer->kilometers;

    // Update the extra hours record with new values
    $extraKilometer->enquiry_id = $request->input('enquiry_id');
    $extraKilometer->kilometers = $request->input('kilometers');
    $extraKilometer->date = $request->input('date');
    $extraKilometer->comment = $request->input('comment');
    $extraKilometer->save();

    // Retrieve related enquiry
    $enquiryId = $request->enquiry_id;
    $enquiry = Enquiries::find($enquiryId);
    $vehicleClass = $enquiry->vehicle_class;
    $remainingAmount = $enquiry->remaining_amount;

    // Calculate the difference in extra hours
    $newExtraKilometers = $request->input('kilometers');
    $hoursDifference = $newExtraKilometers - $originalExtraKilometers;

    // Retrieve the per hour charges for the vehicle class
    $Carclass = Carclass::where('car_class', $vehicleClass)->first();
    $ExtraKilometersCharges = $Carclass->per_km_charges;

    // Calculate the adjustment in extra hour charges
    $adjustmentAmount = $hoursDifference * $ExtraKilometersCharges;

    // Update the enquiry with new totals
    $enquiry->kilometers += $hoursDifference;
    $enquiry->extra_kilometers_amount += $adjustmentAmount;
    $enquiry->remaining_amount += $adjustmentAmount;
    $enquiry->extra_kilometer_charges = $ExtraKilometersCharges;
    $enquiry->save();

    // Set success message and redirect back
    $request->session()->flash('success', 'Extra kilometers updated successfully!');
    return redirect()->back();
}

public function deleteExtraKilometers(Request $request)
    {

        $extra_kilometers_Id = $request->extra_kilometers_id;
        $extraKilometer = Extrakilometers::find($extra_kilometers_Id);
        $extraKilometer->delete();
        $request->session()->flash('success', 'Extra kilometer deleted successfully!');

        return redirect()->back();

    }
	
	public function updateTripStatus(Request $request)
	{
		 $enquiry = Enquiries::find($request->enquiry_id);
		 $enquiry->trip_status = $request->trip_status;
		 $enquiry->save();
		
		 $request->session()->flash('success', 'Trip status updated successfully');
		 return redirect()->back();
	
	}

}
