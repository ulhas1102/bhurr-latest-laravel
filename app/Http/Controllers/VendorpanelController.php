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


class VendorpanelController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalEnquiries = Enquiries::where('confirm_status', 1)->where('vendor_id', Auth::guard('vendor')->user()->id)->count();
        $totalCompleteEnquiries =  Enquiries::where('trip_status', 1)->where('vendor_id', Auth::guard('vendor')->user()->id)->count();
        $totalCancelledEnquiries =  Enquiries::where('trip_status', 3)->where('vendor_id', Auth::guard('vendor')->user()->id)->count();
       
        return view('vendor-panel.dashboard', compact('totalEnquiries','totalCompleteEnquiries','totalCancelledEnquiries'));
    }

    public function Editbooking(Request $request)
    {

        $enquiryId = $request->enquiry_id;
        $enquiry = Enquiries::find($enquiryId);
        // $TotalAmount = $enquiry->remaining_amount;
        $TotalAmount = $enquiry->total_amount;
        $AdvanceAmount = $request->input('advance_amount');
        $advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;
        $RemaingAmount = $TotalAmount - $advance;

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
        $enquiry->remaining_amount = $RemaingAmount;
        $enquiry->save();

        $request->session()->flash('success', 'Booking updated successfully!');

        return redirect()->route('all-bookings');

    }
}
