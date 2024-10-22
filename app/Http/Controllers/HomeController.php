<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiries;
use App\Models\Vendor;
use App\Models\Driver;
use App\Models\CarDetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalEnquiries = Enquiries::count();
        $totalCompleteEnquiries =  Enquiries::where('trip_status', 1)->count();
        $totalCancelledEnquiries =  Enquiries::where('trip_status', 3)->count();
        $totalDrivers = Driver::count();
        $totalVendors = Vendor::count();
        $totalAvilableCars = CarDetail::count();
        return view('dashboard', compact('totalEnquiries','totalDrivers','totalVendors','totalAvilableCars','totalCompleteEnquiries','totalCancelledEnquiries'));
    }
}
