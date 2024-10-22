<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\CarDetail;
use App\Models\Driver;
use App\Models\Carclass;
use App\Models\Enquiries;
use App\Models\PaymentHistorys;
use Illuminate\Http\Request;
use App\Models\CarTypes;
use App\Models\Cancellation;
use Illuminate\Support\Facades\Auth;
use App\Models\ExtraHours;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use App\Helpers\DistanceHelper;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckAccess;
use App\Http\Middleware\CheckAccessDriver;
use App\Http\Middleware\CheckAccessVendor;
use App\Models\Extrakilometers;
use App\Exports\EnquiriesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\DriverCarclass;
use App\Models\PriceGroup;
use App\Models\ExtraExpences;

Route::get('/data', function () {
    return view('data');
});

Route::get('/download-vendor-app', function () {
    return view('applications.download-vendor-app');
});

Route::get('/profile', function () {
    if (Auth::check() && Auth::user()->access_id == 1) {
        $userId = Auth::user()->id;
        //$enquiries = Enquiries::where('customer_id', $userId)->where('confirm_status', 1)->get();
        $enquiries = DB::table('enquiries')
            ->leftJoin('payment_history', 'enquiries.enquiry_id', '=', 'payment_history.enquiry_id')
            ->where('enquiries.customer_id', $userId)
            ->where('enquiries.confirm_status', 1)
            //->where('enquiries.trip_status', 1)
            ->whereIn('enquiries.trip_status', [1, 3])
            ->select(
                'enquiries.enquiry_id as enquiry_id',
                'enquiries.*',
                'payment_history.payment_history_id as payment_id',
                'payment_history.paid_amount',
                'payment_history.payment_date',
                'payment_history.payment_mode'
            )
            ->get()
            ->groupBy('enquiry_id');

        $sheduledenquiries = DB::table('enquiries')
            ->leftJoin('payment_history', 'enquiries.enquiry_id', '=', 'payment_history.enquiry_id')
            ->where('enquiries.customer_id', $userId)
            ->where('enquiries.confirm_status', 1)
            ->whereIn('enquiries.trip_status', [0, 2])
            ->select(
                'enquiries.enquiry_id as enquiry_id',
                'enquiries.*',
                'payment_history.payment_history_id as payment_id',
                'payment_history.paid_amount',
                'payment_history.payment_date',
                'payment_history.payment_mode'
            )
            ->get()
            ->groupBy('enquiry_id');
        // dd($sheduledenquiries);
        return view('frontend.profile', compact('enquiries', 'sheduledenquiries'));
    } else {
        return redirect()->route('customer-login2');
    }
});

Route::post('/cancel-ride', [App\Http\Controllers\FrontendEnquiryController::class, 'cancelRide'])->name('cancel.ride');

//Route::get('/book', function () {
//    return view('frontend.index');
//})->name('/book');

Route::get('/', function () {
    return view('frontend.new-index');
})->name('/');

Route::get('/cab', function () {
    return view('frontend.new-index');
})->name('cab');

Route::get('/popular_destination', function () {
    return view('frontend.popular-destination-near-pune');
});



Route::get('ulhas-profile', function () {
    return view('frontend.ulhas-profile');
});


// seasons page route

Route::get('mahabaleshwar', function () {
    return view('frontend.seasons.mahabaleshwar');
});

Route::get('alibaug', function () {
    return view('frontend.seasons.alibaug');
});
Route::get('amboli', function () {
    return view('frontend.seasons.amboli');
});
Route::get('bhandardara', function () {
    return view('frontend.seasons.bhandardara');
});
Route::get('juhubeach', function () {
    return view('frontend.seasons.juhubeach');
});
Route::get('malshejghat', function () {
    return view('frontend.seasons.malshejghat');
});
Route::get('mandavibeach', function () {
    return view('frontend.seasons.mandavibeach');
});
Route::get('panchgani', function () {
    return view('frontend.seasons.panchgani');
});
Route::get('panchganiwinter', function () {
    return view('frontend.seasons.panchganiwinter');
});


// end season route



// packages route
Route::get('/chardham', function () {
    return view(('frontend.package.chardham'));
});
//===================== city pages route================
Route::get('/ahmednagar', function () {
    return view('frontend.city.ahmednagar');
})->name('ahmednagar');

Route::get('/aurangabad', function () {
    return view('frontend.city.aurangabad');
})->name('aurangabad');

Route::get('/dhule', function () {
    return view('frontend.city.dhule');
})->name('dhule');

Route::get('/Jalgaon', function () {
    return view('frontend.city.Jalgaon');
})->name('Jalgaon');

Route::get('/kolhapur', function () {
    return view('frontend.city.kolhapur');
})->name('kolhapur');

Route::get('/mumbai', function () {
    return view('frontend.city.mumbai');
})->name('mumbai');

Route::get('/nashik', function () {
    return view('frontend.city.nashik');
})->name('nashik');

Route::get('/pune', function () {
    return view('frontend.city.pune');
})->name('pune');

Route::get('/sangli', function () {
    return view('frontend.city.sangli');
})->name('sangli');

Route::get('/satara', function () {
    return view('frontend.city.satara');
})->name('satara');

Route::get('/thane', function () {
    return view('frontend.city.thane');
})->name('thane');
// ================= end routes==================

Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
})->name('contact-us');

Route::post('/contact-us', [App\Http\Controllers\FrontendEnquiryController::class, 'postContactForm'])->name('store.contact.form');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');

Route::get('/gst', function () {
    return view('frontend.gst');
})->name('gst');

Route::get('/passanger-rights', function () {
    return view('frontend.passanger-rights');
})->name('passanger-rights');

Route::get('/refer-earn', function () {
    return view('frontend.refer-earn');
})->name('refer-earn');

Route::get('/career', function () {
    return view('frontend.career');
})->name('career');



Route::get('/special-bookings', function () {
    return view('frontend.special-bookings');
})->name('special-bookings');

Route::post('/special_booking_form', [App\Http\Controllers\FrontendEnquiryController::class, 'postSpecialBookingForm'])->name('store.special.booking');

Route::get('/our-offerings', function () {
    return view('frontend.our-offerings');
})->name('our-offerings');

Route::get('/terms-condition', function () {
    return view('frontend.terms-condition');
})->name('terms-condition');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::get('/refund-policy', function () {
    return view('frontend.return-policy');
})->name('refund-policy');


Route::get('/grivence-resolution', function () {
    return view('frontend.grivence-resolution');
})->name('grivence-resolution');

Route::post('/grivence-resolution', [App\Http\Controllers\FrontendEnquiryController::class, 'postGrivenceResolutionForm'])->name('store.grivence.resolution');

Route::get('/corporate-booking', function () {
    return view('frontend.corporate-booking');
})->name('corporate-booking');

Route::get('/driver', function () {
    return view('frontend.driver.index');
});

Route::get('/driver/passenger-details/{enquiry_id}', [App\Http\Controllers\DriverEnquiryController::class, 'getPassengerDetails']);
Route::get('/driver/review-booking-payment/{enquiry_id}', [App\Http\Controllers\DriverEnquiryController::class, 'getReviewBooking']);

Route::post('/add-driver-enquiry', [App\Http\Controllers\DriverEnquiryController::class, 'postDriverEnquiry'])->name('add.driver.enquiry');
Route::post('/add-passenger-details/{enquiry_id}', [App\Http\Controllers\DriverEnquiryController::class, 'postPassengerDetails'])->name('store.passenger.details');
Route::post('/book-driver-details/{enquiry_id}', [App\Http\Controllers\DriverEnquiryController::class, 'postDriverBooking'])->name('book.driver');
Route::post('/add-consensual-enquiry', [App\Http\Controllers\DriverEnquiryController::class, 'postAddConsensualEnquiry'])->name('add.consensual.enquiry');


//Route::get('/', function () {
//   return view('index');
//})->name('/');

Route::get('logoutcustomer', function () {
    Auth::logout();
    return redirect('/'); // Redirect to the login page or any other page
})->name('logoutcustomer');

Route::get('/car-listing', function () {
    // if(Auth::check()){
    $id = $_GET['id'];
    $enquiries = Enquiries::where('enquiry_id', $id)->first();
    $carclasses = Carclass::all();
    //dd($carclasses);
    return view('frontend.car-listing', compact('carclasses', 'enquiries'));
    // }else{
    // return view('auth.login'); 
    // }
});

Route::get('/booking-form', function () {
    return view('frontend.bookingform');
});

Route::get('/booking-review', function () {
    if (Auth::check()) {
        $id = $_GET['id'];
        $enquiries = Enquiries::where('enquiry_id', $id)->first();
        $carclass = Carclass::where('car_class', $enquiries->vehicle_class)->first();
        return view('frontend.booking-review', compact('enquiries', 'carclass'));
    } else {
        //return redirect()->route('login');
        return redirect('customer-login?id=' . $id);
    }
});

Route::get('customer-login', function () {
    return view('auth.customer-login');
})->name('customer-login');

Route::get('customer-register', function () {
    return view('auth.customer-register');
})->name('customer-register');


Route::get('customer-login2', function () {
    return view('auth.customer-login2');
})->name('customer-login2');

Route::post('customerdata-login', [App\Http\Controllers\AuthController::class, 'Authlogin'])->name('customerdata-login');
Route::post('register-user', [App\Http\Controllers\AuthController::class, 'CustomerRegister'])->name('register-user');
Route::post('customer-profile', [App\Http\Controllers\AuthController::class, 'CustomerProfile'])->name('customer-profile');
Route::post('contact-details', [App\Http\Controllers\AuthController::class, 'ContactDetails'])->name('contact-details');
Route::post('emergency-contact-details', [App\Http\Controllers\AuthController::class, 'EmergencyContactDetails'])->name('emergency-contact-details');
Route::post('send-verification-code', [App\Http\Controllers\AuthController::class, 'sendVerificationCode'])->name('send-verification-code');
Route::post('send-otp', [App\Http\Controllers\AuthController::class, 'sendOTPVerify'])->name('send-otp');
Route::post('verify-otp-customer', [App\Http\Controllers\AuthController::class, 'verifyOtp'])->name('verify-otp');
Route::post('verify-otp-register', [App\Http\Controllers\AuthController::class, 'verifyOtpRegister'])->name('verify-otp-register');
Route::post('verify-otp-login', [App\Http\Controllers\AuthController::class, 'verifyOtpLogin'])->name('verify-otp-login');

Route::get('/booking-details', function () {
    //  if (Auth::check() && Auth::user()->access_id == 1) {
    $id = $_GET['id'];
    $enquiries = Enquiries::where('enquiry_id', $id)->first();
    $carclass = Carclass::where('car_class', $enquiries->vehicle_class)->first();
    return view('frontend.booking-details', compact('enquiries', 'carclass'));
    //}else {
    //  return redirect()->route('login');
    // }
})->name('booking-details');



Route::get('/prepare-to-travel', function () {
    return view('frontend.prepare-to-travel');
});

Route::get('/get-car-listings', function (Request $request) {
    $id = $request->query('dataid');

    // Fetch all car classes
    $carClasses = Carclass::where('car_class', $id)->get();
    // Prepare the formatted data structure
    $formattedData = [];
    foreach ($carClasses as $carClass) {
        $carNames = CarDetail::where('car_class', $carClass->car_class)
            ->pluck('car_name')
            ->toArray();

        // Check if car names are empty and set 'No cars' if true
        if (empty($carNames)) {
            $carNames = ['No cars'];
        }
        // Build the structure for each car class
        $classData = [
            'car_class' => $carClass->car_class,
            'seating_capacity' => $carClass->seating_capacity,
            'luggage_capacity' => $carClass->luggage_capacity,
            'oneway_disel_per_km_charges' => $carClass->oneway_disel_per_km_charges,
            'oneway_base_fare' => $carClass->oneway_base_fare,
            'oneway_cng_per_km_charges' => $carClass->oneway_cng_per_km_charges,
            'electric_per_km_charges' => $carClass->electric_per_km_charges,
            'local_disel_per_km_charges' => $carClass->local_disel_per_km_charges,
            'local_cng_per_km_charges' => $carClass->local_cng_per_km_charges,
            'local_base_fare' => $carClass->local_base_fare,
            'outstation_base_fare' => $carClass->outstation_base_fare,
            'outstation_cng_per_km_charges' => $carClass->outstation_cng_per_km_charges,
            'outstation_disel_per_km_charges' => $carClass->outstation_disel_per_km_charges,
            'class_image' => $carClass->class_image,
            'cars' => $carNames
        ];

        // Add to the formatted data array
        $formattedData[] = $classData;
    }
    return response()->json($formattedData);
});

Route::post('submit-form', [App\Http\Controllers\FrontendEnquiryController::class, 'AddnewEnquiry'])->name('submit.form');
Route::post('submit-form-data', [App\Http\Controllers\MobileEnquiryController::class, 'AddnewEnquiry'])->name('submit.form.data');
Route::post('submitcarlisting', [App\Http\Controllers\FrontendEnquiryController::class, 'submitcarlisting'])->name('submitcarlisting');
Route::post('postBookingDetails', [App\Http\Controllers\FrontendEnquiryController::class, 'postBookingDetails'])->name('postBookingDetails');
Route::post('/phonepayCheckoutPage', [App\Http\Controllers\PhonepayController::class, 'submitPaymentForm'])->name('phonepay.checkout');

//Auth::routes();

Route::get('login', function () {
    return view('auth.login');
})->name('login');


Route::post('dashboard-login', [App\Http\Controllers\LoginController::class, 'Dashboardlogin'])->name('dashboard.login');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::middleware([CheckAccess::class])->group(function () {

    Route::get('/logout', function () {
        \Auth::logout();
        \Session::flush();
        return redirect()->route('login');
    });

    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');


    Route::get('/vendor-list', function () {
        $vendors = Vendor::orderBy('id', 'desc')->get();
        return view('vendors.vendor-list', compact('vendors'));
    })->name('vendor-list');

    Route::get('/vendor-details', function () {
        $vendor_id = $_GET['id'];
        $vendor = Vendor::find($vendor_id);
        $car_details = CarDetail::where('vendor_id', $vendor_id)->orderBy('id', 'desc')->get();
        $drivers = Driver::where('vendor_id', $vendor_id)->orderBy('driver_id', 'desc')->get();
        return view('vendors.vendor-details', compact('vendor', 'car_details', 'drivers'));
    })->name('vendor-details');

    Route::post('/update-document-status', [App\Http\Controllers\VendorController::class, 'updateDocumentStatus']);
    Route::post('/update-driver-document-status', [App\Http\Controllers\DriverController::class, 'updateDriverDocumentStatus']);
    Route::post('/update-car-document-status', [App\Http\Controllers\CarTypesController::class, 'updateCarDocumentStatus']);

    Route::get('/vendor-avilable-car-details', function () {
        $id = $_GET['car_details_id'];
        $avilablecars = CarDetail::where('id', $id)->first();
        return view('vendors.vendor-avilable-car-details', compact('avilablecars'));
    })->name('avilable-car-details');


    Route::get('/vendor-driver-details', function () {
        $driverId = $_GET['driver_id'];
        $driver = Driver::find($driverId);
        $vendors = Vendor::all();
        return view('vendors.vendor-driver-details', compact('driver', 'vendors'));
    });

    Route::get('/vendor-add', function () {
        $cartypes = CarTypes::all();
        $carclasses = Carclass::all();
        return view('vendors.vendor-add', compact('cartypes', 'carclasses'));
    });

    Route::get('/vendor-edit', function () {
        $id = $_GET['vendor_id'];
        $vendor = Vendor::find($id);
        $car_details = CarDetail::where('vendor_id', $id)->get();
        $cartypes = CarTypes::all();
        $carclasses = Carclass::all();
        return view('vendors.edit', compact('vendor', 'car_details', 'cartypes', 'carclasses'));
    })->name('vendor-edit');

    Route::post('vendor', [App\Http\Controllers\VendorController::class, 'store']);
    Route::put('/vendor-update/{id}', [App\Http\Controllers\VendorController::class, 'updateVendor'])->name('vendor.update');

    Route::post('deleteVendor', [App\Http\Controllers\VendorController::class, 'DeleteVendor']);
    Route::post('update-vendor-verification-status', [App\Http\Controllers\VendorController::class, 'updatevendorverificationstatus'])->name('update-vendor-verification-status');


    Route::get('/driver-list', function () {
        $drivers = Driver::orderBy('driver_id', 'desc')->get();
        return view('drivers.driver-list', compact('drivers'));
    })->name('driver-list');

    Route::get('/add-driver', function () {
        $vendors = Vendor::all();
        $cartypes = CarTypes::all();
        $drivers = Driver::all();
        return view('drivers.add-driver', compact('vendors', 'cartypes', 'drivers'));
    });

    Route::post('driver', [App\Http\Controllers\DriverController::class, 'store']);
    Route::post('deleteDriver', [App\Http\Controllers\DriverController::class, 'DeleteDriver']);

    Route::get('/edit-driver', function () {
        $driverId = $_GET['driver_id'];
        $driver = Driver::find($driverId);
        $vendors = Vendor::all();
        return view('drivers.edit', compact('driver', 'vendors'));
    });

    Route::get('/driver-details', function () {
        $driverId = $_GET['driver_id'];
        $driver = Driver::find($driverId);
        $vendors = Vendor::all();
        return view('drivers.driver-details', compact('driver', 'vendors'));
    });
    Route::post('update_driver', [App\Http\Controllers\DriverController::class, 'update']);
    Route::post('update-driver-verification-status', [App\Http\Controllers\DriverController::class, 'updatedriververificationstatus'])->name('update-driver-verification-status');

    Route::post('update-car-verification-status', [App\Http\Controllers\CarTypesController::class, 'updatecarverificationstatus'])->name('update-car-verification-status');

    Route::get('/add-new-enquiry', function () {
        $cartypes = CarTypes::all();
        $carclasses = Carclass::all();
        $drivers = Driver::all();
        $cars = CarDetail::all();
        $vendors = Vendor::all();
        return view('Enquiries.add-new-enquiry', compact('cartypes', 'carclasses', 'drivers', 'cars', 'vendors'));
    })->name('add-new-enquiry');

    Route::post('add-enquiry', [App\Http\Controllers\EnquiriesController::class, 'AddnewEnquiries']);
    Route::post('deleteEnquiry', [App\Http\Controllers\EnquiriesController::class, 'deleteEnquiry']);

    Route::get('/all-enquiries', function () {
        $enquiries = Enquiries::whereIn('confirm_status', [1, 2])->orderBy('enquiry_id', 'desc')->get();
        return view('Enquiries.all-enquiries', compact('enquiries'));
    })->name('all-enquiries');

    Route::get('/complete-enquiries', function () {
        $enquiries = Enquiries::where('confirm_status', 1)->where('trip_status', 1)->orderBy('enquiry_id', 'desc')->get();
        return view('Enquiries.complete-enquiries', compact('enquiries'));
    })->name('complete-enquiries');

    Route::get('/cancelled-enquiries', function () {
        $enquiries = Enquiries::where('confirm_status', 1)->where('trip_status', 3)->orderBy('enquiry_id', 'desc')->get();
        return view('Enquiries.cancelled-enquiries', compact('enquiries'));
    })->name('cancelled-enquiries');

    Route::get('/on-going-enquiries', function () {
        $enquiries = Enquiries::where('confirm_status', 1)->where('trip_status', 2)->orderBy('enquiry_id', 'desc')->get();
        return view('Enquiries.on-going-enquiries', compact('enquiries'));
    })->name('on-going-enquiries');

    Route::get('/enquiry-details', function () {
        $enquiry_id = $_GET['enquiry_id'];
        $enquiries = Enquiries::find($enquiry_id);
        if (!$enquiries) {
            return redirect()->back()->with('error', 'Enquiry not found');
        }
        $driver = null;
        if ($enquiries->driver_id) {
            $driver = Driver::find($enquiries->driver_id);
        }
        $paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiry_id)->get();
        $extraHours = ExtraHours::where('enquiry_id', $enquiry_id)->get();
        $extraKilometers = Extrakilometers::where('enquiry_id', $enquiry_id)->get();
        $extraExpences = ExtraExpences::where('enquiry_id', $enquiry_id)->get();
        return view('Enquiries.enquiry-details', compact('enquiries', 'paymentHistorys', 'driver', 'extraHours', 'extraKilometers', 'extraExpences'));
    })->name('enquiry-details');

    Route::get('/edit-enquiry', function () {
        $enquiry_id = $_GET['enquiry_id'];
        $enquiries = Enquiries::find($enquiry_id);
        $cartypes = CarTypes::all();
        $carclasses = Carclass::all();
        //$drivers = Driver::all();
        $cars = CarDetail::where('car_class', $enquiries->vehicle_class)->where('car_type', $enquiries->vehicle_type)->get();
        //$vendors = Vendor::all();	
        $vendors = DB::table('car_details')
            ->join('vendors', 'car_details.vendor_id', '=', 'vendors.id')
            ->join('enquiries', DB::raw('BINARY car_details.car_class'), '=', DB::raw('BINARY enquiries.vehicle_class'))
            ->where('enquiries.vehicle_class', $enquiries->vehicle_class)
            ->select('vendors.*')
            ->distinct()
            ->get();
        //dd($vendors);
        $vendorIds = $vendors->pluck('id')->toArray();
        $drivers = Driver::whereIn('vendor_id', $vendorIds)->get();
        //dd($enquiries);
        return view('Enquiries.edit', compact('enquiries', 'cartypes', 'carclasses', 'drivers', 'cars', 'vendors'));
    })->name('edit-enquiry');

    Route::post('edit-enquiry', [App\Http\Controllers\EnquiriesController::class, 'EditEnquiries']);
    Route::post('/generate-phonepay-request', [App\Http\Controllers\EnquiriesController::class, 'generatePhonePayRequest'])->name('generate.phonepay.request');

    Route::post('/add-payment-history', [App\Http\Controllers\EnquiriesController::class, 'addPaymentHistory'])->name('add.payment.history');

    Route::put('/edit-paymentHistory/{id}', [App\Http\Controllers\EnquiriesController::class, 'updatePaymentHistory'])->name('edit.payment.history');

    Route::post('deletepaymentHistory', [App\Http\Controllers\EnquiriesController::class, 'deletepaymentHistory']);

    Route::post('/add-extra-hours', [App\Http\Controllers\EnquiriesController::class, 'addExtraHours'])->name('add.extra.hours');
    Route::post('deleteExtraHours', [App\Http\Controllers\EnquiriesController::class, 'deleteExtraHours']);
    Route::put('/edit-Extrahours/{id}', [App\Http\Controllers\EnquiriesController::class, 'updateExtarHours'])->name('edit.extra.hours');

    Route::post('/add-extra-kilometers', [App\Http\Controllers\EnquiriesController::class, 'addExtraKilometers'])->name('add.extra.kilometers');
    Route::put('/edit-ExtraKilometers/{id}', [App\Http\Controllers\EnquiriesController::class, 'updateExtarKilometers'])->name('edit.extra.kilometers');

    Route::post('deleteExtrakilometers', [App\Http\Controllers\EnquiriesController::class, 'deleteExtraKilometers']);

    Route::post('/add-extra-expence', [App\Http\Controllers\EnquiriesController::class, 'addExtraExpences'])->name('add.extra.expence');
    Route::put('/edit-ExtraExpences/{id}', [App\Http\Controllers\EnquiriesController::class, 'updateExtarExpences'])->name('edit.extra.expences');


    Route::get('/cars-type', function () {
        $cartypes = CarTypes::all();
        return view('vehicle-module.cars-type', compact('cartypes'));
    })->name('cars-type');

    Route::get('/add-car-type', function () {
        return view('vehicle-module.add-car-type');
    })->name('add-car-type');

    Route::post('add-car-type', [App\Http\Controllers\CarTypesController::class, 'AddCarType']);
    Route::post('deleteCarTypes', [App\Http\Controllers\CarTypesController::class, 'deleteCarTypes']);

    // Car Class Route
    Route::get('/car-class', function () {
        $carclasses = Carclass::all();
        return view('vehicle-module.car-class', compact('carclasses'));
    })->name('car-class');

    Route::get('/{class_name}/cars', function ($class_name) {
        // $carclasses = Carclass::all();
        $class = Carclass::where('car_class', $class_name)->first();
        $cars = DB::table('class_wise_cars')
            ->where('class_name', $class_name)
            ->select('car_name', 'id')
            ->get();
        return view('vehicle-module.cars', compact('cars', 'class'));
    });
    Route::post('add-car', [App\Http\Controllers\CarclassController::class, 'AddCarClassWise'])->name('add.car');
    Route::put('edit-class-wise-car/{id}', [App\Http\Controllers\CarclassController::class, 'EditCarClassWise'])->name('edit.class.wise.car');
    Route::get('/add-car-class', function () {
        return view('vehicle-module.add-car-class');
    })->name('add-car-class');

    Route::post('add-car-class', [App\Http\Controllers\CarclassController::class, 'AddCarClass']);
    Route::put('/edit-carclass/{id}', [App\Http\Controllers\CarclassController::class, 'updateCarClass'])->name('edit.car.class');

    Route::post('deleteCarClass', [App\Http\Controllers\CarclassController::class, 'deleteCarClass']);
    //Fare Management
    Route::get('/fare-management', function () {
        $carclasses = Carclass::all();
        return view('fare-management.fare-management', compact('carclasses'));
    })->name('fare-management');

    Route::get('/local-fare', function () {
        $carclasses = Carclass::all();
        return view('fare-management.local-fare', compact('carclasses'));
    })->name('local-fare');

    Route::get('/outstation-fare', function () {
        $carclasses = Carclass::all();
        return view('fare-management.outstation-fare', compact('carclasses'));
    })->name('outstation-fare');

    Route::get('/oneway-fare', function () {
        $carclasses = Carclass::all();
        return view('fare-management.oneway', compact('carclasses'));
    })->name('oneway-fare');

    Route::get('/cancellation-policy', function () {
        $cancellationpolicys = Cancellation::all();
        return view('fare-management.cancellation-policy', compact('cancellationpolicys'));
    })->name('cancellation-policy');

    Route::get('/outstation-price-group', function () {
        $class_id = $_GET['class_id'];
        $carclass = Carclass::where('carclass_id', $class_id)->first();
        $priceGroups = PriceGroup::where('car_class_id', $class_id)->get();
        return view('fare-management.outstation-price-group', compact('priceGroups', 'carclass'));
    })->name('outstation-price-group');

    Route::get('/one-way-price-group', function () {
        $class_id = $_GET['class_id'];
        $carclass = Carclass::where('carclass_id', $class_id)->first();
        $priceGroups = PriceGroup::where('car_class_id', $class_id)->get();
        return view('fare-management.one-way-price-group', compact('priceGroups', 'carclass'));
    })->name('one-way-price-group');

    Route::post('/add-city', [App\Http\Controllers\CarclassController::class, 'AddCity'])->name('add.city');

    Route::put('/edit-pricegroup/{id}', [App\Http\Controllers\CarclassController::class, 'updatePriceGoupFare'])->name('edit.pricegroup');


    Route::put('/edit-editFaremanagement/{id}', [App\Http\Controllers\CarclassController::class, 'updateFare'])->name('edit.fare.management');
    Route::put('/edit-editcancellationPolicy/{id}', [App\Http\Controllers\CarclassController::class, 'updatecancellationPolicy'])->name('edit.cancellation.policy');

    // In routes/web.php
    Route::get('/generate-invoice/{enquiryId}', [App\Http\Controllers\InvoiceController::class, 'generateInvoice'])->name('generate.invoice');
    Route::get('/download-invoice/{enquiryId}', [App\Http\Controllers\InvoiceController::class, 'downloadInvoice'])->name('download.invoice');

    Route::get('/avilable-cars', function () {
        $avilablecars = CarDetail::orderBy('id', 'desc')->get();
        return view('vehicle-module.avilable-cars', compact('avilablecars'));
    })->name('avilable-cars');

    Route::put('/edit-upload-document/{id}', [App\Http\Controllers\VendorController::class, 'updateCarsDocuments'])->name('edit.upload.document');

    Route::get('/available', function () {
        $classname = $_GET['class_name'];
        $avilablecars = CarDetail::where('car_class', $classname)->get();
        return view('vehicle-module.available', compact('avilablecars'));
    })->name('available');

    Route::get('/avilable-car-details', function () {
        $id = $_GET['car_details_id'];
        $avilablecars = CarDetail::where('id', $id)->first();
        return view('vehicle-module.avilable-car-details', compact('avilablecars'));
    })->name('avilable-car-details');

    Route::post('deleteVendorCar', [App\Http\Controllers\VendorController::class, 'DeleteVendorCar']);
    Route::put('/customize-invoice/{id}', [App\Http\Controllers\EnquiriesController::class, 'CustomizeInvoice'])->name('customize.invoice');
});

Route::get('export-enquiries', function () {
    return Excel::download(new EnquiriesExport, 'enquiries.xlsx');
});


// Driver Admin panel Routes
Route::get('driver-login', [App\Http\Controllers\DriverLoginController::class, 'showLoginForm'])->name('driver-login');
Route::post('driver-login', [App\Http\Controllers\DriverLoginController::class, 'login'])->name('driver.login');
Route::post('driver-logout', [App\Http\Controllers\DriverLoginController::class, 'logout'])->name('driver.logout');

Route::middleware([CheckAccessDriver::class])->group(function () {

    Route::get('/driver-dashboard', [App\Http\Controllers\DriverpanelController::class, 'index'])->name('driver-dashboard');

    Route::get('/all-new-enquiries', function () {
        $driver = Auth::guard('driver')->user();
        if ($driver) {
            $enquiries = Enquiries::where('confirm_status', 1)
                ->where('driver_id', $driver->driver_id)
                ->get();
            return view('driver-panel.enquiries.all-enquiries', compact('enquiries'));
        }
        return redirect()->route('driver-login')->withErrors('You need to log in as a driver.');
    })->name('all-new-enquiries');


    Route::get('/view-enquiry-details', function () {
        $enquiry_id = $_GET['enquiry_id'];
        $enquiries = Enquiries::find($enquiry_id);
        if (!$enquiries) {
            return redirect()->back()->with('error', 'Enquiry not found');
        }
        $driver = null;
        if ($enquiries->driver_id) {
            $driver = Driver::find($enquiries->driver_id);
        }
        $paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiry_id)->get();
        $extraHours = ExtraHours::where('enquiry_id', $enquiry_id)->get();
        $extraKilometers = Extrakilometers::where('enquiry_id', $enquiry_id)->get();
        return view('driver-panel.enquiries.enquiry-details', compact('enquiries', 'paymentHistorys', 'driver', 'extraHours', 'extraKilometers'));
    })->name('view-enquiry-details');

    Route::post('/driver-add-payment-history', [App\Http\Controllers\DriverpanelController::class, 'addPaymentHistory'])->name('driver.add.payment.history');

    Route::put('/driver-edit-paymentHistory/{id}', [App\Http\Controllers\DriverpanelController::class, 'updatePaymentHistory'])->name('driver.edit.payment.history');

    Route::post('driver-deletepaymentHistory', [App\Http\Controllers\DriverpanelController::class, 'deletepaymentHistory']);

    //Extra Hours Route from driver panel
    Route::post('/driver-add-extra-hours', [App\Http\Controllers\DriverpanelController::class, 'addExtraHours'])->name('driver.add.extra.hours');
    Route::post('driver-deleteExtraHours', [App\Http\Controllers\DriverpanelController::class, 'deleteExtraHours']);

    Route::put('/driver-edit-Extrahours/{id}', [App\Http\Controllers\DriverpanelController::class, 'updateExtarHours'])->name('driveredit.extra.hours');

    //Extra kilometers Routes fvrom driver panel

    Route::post('/driver-add-extra-kilometers', [App\Http\Controllers\DriverpanelController::class, 'addExtraKilometers'])->name('driver.add.extra.kilometers');

    Route::put('/driver-edit-ExtraKilometers/{id}', [App\Http\Controllers\DriverpanelController::class, 'updateExtarKilometers'])->name('driveredit.extra.kilometers');

    Route::post('driver-deleteExtrakilometers', [App\Http\Controllers\DriverpanelController::class, 'deleteExtraKilometers']);

    Route::get('/view-edit-enquiry', function () {
        $enquiry_id = $_GET['enquiry_id'];
        $enquiries = Enquiries::find($enquiry_id);
        $cartypes = CarTypes::all();
        $carclasses = Carclass::all();
        $drivers = Driver::all();
        $cars = CarDetail::all();
        $vendors = Vendor::all();
        return view('driver-panel.enquiries.edit', compact('enquiries', 'cartypes', 'carclasses', 'drivers', 'cars', 'vendors'));
    })->name('view-edit-enquiry');

    Route::post('driver-edit-enquiry', [App\Http\Controllers\DriverpanelController::class, 'EditEnquiries']);

    Route::post('/update-trip-status', [App\Http\Controllers\DriverpanelController::class, 'updateTripStatus'])->name('updateTripStatus');

    Route::get('/all-complete-enquiries', function () {
        $enquiries = Enquiries::where('confirm_status', 1)->where('driver_id', Auth::guard('driver')->user()->driver_id)->where('trip_status', 1)->get();
        return view('driver-panel.enquiries.all-complete-enquiries', compact('enquiries'));
    })->name('all-complete-enquiries');

    Route::get('/all-cancelled-enquiries', function () {
        $enquiries = Enquiries::where('confirm_status', 1)->where('driver_id', Auth::guard('driver')->user()->driver_id)->where('trip_status', 3)->get();
        return view('driver-panel.enquiries.all-cancelled-enquiries', compact('enquiries'));
    })->name('all-cancelled-enquiries');

    // In routes/web.php
    Route::get('/driver-generate-invoice/{enquiryId}', [App\Http\Controllers\DriverpanelController::class, 'generateInvoice'])->name('driver.generate.invoice');

    Route::get('/driver-download-invoice/{enquiryId}', [App\Http\Controllers\DriverpanelController::class, 'downloadInvoice'])->name('driver.download.invoice');

    Route::put('/driver-customize-invoice/{id}', [App\Http\Controllers\DriverpanelController::class, 'CustomizeInvoice'])->name('driver.customize.invoice');

    // Route::get('/driver-logout', function () {
    //     \Auth::logout();
    //     \Session::flush();
    //     return redirect()->route('login');
    // });

    // Route::post('/driver-logout', function () {
    //     Auth::logout();
    //     return redirect()->route('login');
    // })->name('driver-logout');
});


// Vendor Admin panel routes
Route::get('vendor-login', [App\Http\Controllers\VendorLoginController::class, 'showLoginForm'])->name('vendor-login');
Route::post('vendor-login', [App\Http\Controllers\VendorLoginController::class, 'login'])->name('vendor.login');
Route::post('vendor-logout', [App\Http\Controllers\VendorLoginController::class, 'logout'])->name('vendor.logout');

Route::middleware([CheckAccessVendor::class])->group(function () {

    Route::get('/vendor-dashboard', [App\Http\Controllers\VendorpanelController::class, 'index'])->name('vendor-dashboard');

    Route::get('/all-bookings', function () {
        $vendor = Auth::guard('vendor')->user();
        if ($vendor) {
            $enquiries = Enquiries::where('confirm_status', 1)
                ->where('vendor_id', $vendor->id)
                ->get();
            return view('vendor-panel.enquiries.enquiries', compact('enquiries'));
        }
        return redirect()->route('vendor-login')->withErrors('You need to log in as a vendor.');
    })->name('all-bookings');



    Route::get('/view-booking-details', function () {
        $enquiry_id = $_GET['enquiry_id'];
        $enquiries = Enquiries::find($enquiry_id);
        if (!$enquiries) {
            return redirect()->back()->with('error', 'Enquiry not found');
        }
        $driver = null;
        if ($enquiries->driver_id) {
            $driver = Driver::find($enquiries->driver_id);
        }
        $paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiry_id)->get();
        $extraHours = ExtraHours::where('enquiry_id', $enquiry_id)->get();
        $extraKilometers = Extrakilometers::where('enquiry_id', $enquiry_id)->get();
        return view('vendor-panel.enquiries.enquiry-details', compact('enquiries', 'paymentHistorys', 'driver', 'extraHours', 'extraKilometers'));
    })->name('view-booking-details');


    Route::get('/view-edit-booking', function () {
        $enquiry_id = $_GET['enquiry_id'];
        $enquiries = Enquiries::find($enquiry_id);
        $cartypes = CarTypes::all();
        $carclasses = Carclass::all();
        $drivers = Driver::all();
        $cars = CarDetail::all();
        $vendors = Vendor::all();
        return view('vendor-panel.enquiries.edit', compact('enquiries', 'cartypes', 'carclasses', 'drivers', 'cars', 'vendors'));
    })->name('view-edit-booking');

    Route::post('vendor-edit-booking', [App\Http\Controllers\VendorpanelController::class, 'Editbooking']);

    Route::get('/all-ongoing-bookings', function () {
        $enquiries = Enquiries::where('confirm_status', 1)->where('vendor_id', Auth::guard('vendor')->user()->id)->where('trip_status', 2)->get();
        return view('vendor-panel.enquiries.all-ongoing-bookings', compact('enquiries'));
    })->name('all-ongoing-bookings');

    Route::get('/all-complete-bookings', function () {
        $enquiries = Enquiries::where('confirm_status', 1)->where('vendor_id', Auth::guard('vendor')->user()->id)->where('trip_status', 1)->get();
        return view('vendor-panel.enquiries.all-complete-bookings', compact('enquiries'));
    })->name('all-complete-bookings');

    Route::get('/all-cancelled-bookings', function () {
        $enquiries = Enquiries::where('confirm_status', 1)->where('vendor_id', Auth::guard('vendor')->user()->id)->where('trip_status', 3)->get();
        return view('vendor-panel.enquiries.all-cancelled-bookings', compact('enquiries'));
    })->name('all-cancelled-bookings');

    // Route::post('/vendor-logout', function () {
    //     Auth::logout();
    //     return redirect()->route('login');
    // })->name('vendor-logout');


    Route::get('/drivers', function () {
        $drivers = Driver::where('vendor_id', Auth::guard('vendor')->user()->id)->get();
        return view('vendor-panel.driver.driver-list', compact('drivers'));
    })->name('drivers');

    Route::get('/add', function () {
        $vendors = Vendor::all();
        $cartypes = CarTypes::all();
        $drivers = Driver::all();
        return view('vendor-panel.driver.add-driver', compact('vendors', 'cartypes', 'drivers'));
    });

    Route::post('vendor-driver', [App\Http\Controllers\VendorDriverController::class, 'store']);
    Route::post('deleteVendorDriver', [App\Http\Controllers\VendorDriverController::class, 'DeleteDriver']);


    Route::get('/edit', function () {
        $driverId = $_GET['driver_id'];
        $driver = Driver::find($driverId);
        $vendors = Vendor::all();
        return view('vendor-panel.driver.edit', compact('driver', 'vendors'));
    });

    Route::get('/drivers-details', function () {
        $driverId = $_GET['driver_id'];
        $driver = Driver::find($driverId);
        $vendors = Vendor::all();
        return view('vendor-panel.driver.driver-details', compact('driver', 'vendors'));
    });

    Route::post('update_vednor_driver', [App\Http\Controllers\VendorDriverController::class, 'update']);

    Route::get('/vendors-cars', function () {
        $vendorcars = CarDetail::where('vendor_id', Auth::guard('vendor')->user()->id)->get();
        return view('vendor-panel.vehicle-module.avilable-cars', compact('vendorcars'));
    })->name('vendors-cars');

    Route::get('/add-cars', function () {
        $cartypes = CarTypes::all();
        $carclasses = Carclass::all();
        return view('vendor-panel.vehicle-module.add-cars', compact('cartypes', 'carclasses'));
    })->name('add-cars');

    Route::post('addCarDetails', [App\Http\Controllers\VendorDriverController::class, 'storeCarDetails']);

    Route::get('/vendor-car-details', function () {
        $id = $_GET['car_details_id'];
        $avilablecars = CarDetail::where('id', $id)->first();
        return view('vendor-panel.vehicle-module.avilable-car-details', compact('avilablecars'));
    })->name('vendor-car-details');

    Route::put('/edit-upload-vendor-cars-document/{id}', [App\Http\Controllers\VendorDriverController::class, 'updateCarsDocuments'])->name('edit.upload.vendor.cars.document');

    Route::post('deleteCar', [App\Http\Controllers\VendorDriverController::class, 'DeleteVendorCar']);
});


//Driver Admin Routes
Route::get('/driver/admin', [App\Http\Controllers\DriverAdminController::class, 'getAdminLogin']);
Route::post('/driver/admin', [App\Http\Controllers\DriverAdminController::class, 'postAdminLogin'])->name('driver.admin.login');
Route::get('/driver/register', [App\Http\Controllers\DriverAdminController::class, 'getRegister']);
Route::post('/driver/register', [App\Http\Controllers\DriverAdminController::class, 'postRegister'])->name('register');
Route::get('/driver-admin-logout', [App\Http\Controllers\DriverAdminController::class, 'driverAdminLogout']);
Route::get('/driver-admin-dashboard', [App\Http\Controllers\DriverAdminController::class, 'getDriverDashboard']);

//Driver Carclass Routes
Route::get('/carclass-list', [App\Http\Controllers\DriverAdminController::class, 'getCarClassList']);
Route::post('/carclass-list', [App\Http\Controllers\DriverAdminController::class, 'postCarClass'])->name('add.carclass');
Route::post('/update-carclass', [App\Http\Controllers\DriverAdminController::class, 'updateCarClass'])->name('update.carclass');
Route::delete('/delete-carclass/{carclass}', [App\Http\Controllers\DriverAdminController::class, 'deleteCarClass'])->name('delete.carclass'); {/* Drivers Route */
}
Route::get('/drivers-list', [App\Http\Controllers\DriverAdminController::class, 'getDriversList']);
Route::get('/online-drivers-list', [App\Http\Controllers\DriverAdminController::class, 'getOnlineDriversList']);
Route::get('/offline-drivers-list', [App\Http\Controllers\DriverAdminController::class, 'getOfflineDriversList']);

Route::get('/add-new-driver', [App\Http\Controllers\DriverAdminController::class, 'addDriver']);
Route::post('/add-new-driver', [App\Http\Controllers\DriverAdminController::class, 'postDriver'])->name('store.driver');
Route::get('/edit-driver/{driver}', [App\Http\Controllers\DriverAdminController::class, 'editDriver'])->name('edit.driver');
Route::post('/update-driver', [App\Http\Controllers\DriverAdminController::class, 'updateDriver'])->name('update.driver');
Route::delete('/delete-driver/{driver}', [App\Http\Controllers\DriverAdminController::class, 'deleteDriver'])->name('delete.driver');
Route::get('/add-documents/{driver}', [App\Http\Controllers\DriverAdminController::class, 'getaddDocuments'])->name('add.documents');
Route::post('/add-documents', [App\Http\Controllers\DriverAdminController::class, 'postaddDriverDocuments'])->name('add.driver.documents');
Route::get('/view-driver/{driver}',  [App\Http\Controllers\DriverAdminController::class, 'viewDriver'])->name('view.driver.details'); {/* Fare Management */
}
Route::get('/local-fare-list', [App\Http\Controllers\DriverAdminController::class, 'getLocalFareList']);
Route::get('/outstation-fare-list', [App\Http\Controllers\DriverAdminController::class, 'getOutStationFareList']);
Route::get('/one-way-fare-list', [App\Http\Controllers\DriverAdminController::class, 'getOneWayFareList']);
Route::post('/edit-fare-management/{id}', [App\Http\Controllers\DriverAdminController::class, 'updateFare']);

Route::get('/commission', [App\Http\Controllers\DriverAdminController::class, 'getComission']);
Route::post('/update-commission', [App\Http\Controllers\DriverAdminController::class, 'updateCommission'])->name('update-commission'); {/* Enquiries Routes */
}

Route::get('/all-driver-enquiries', [App\Http\Controllers\DriverAdminController::class, 'getAllEnquiry']);
Route::get('/view-enquiry/{enquiry}', [App\Http\Controllers\DriverAdminController::class, 'viewEnquiry'])->name('view.enquiry.details');
Route::post('/assign-driver', [App\Http\Controllers\DriverAdminController::class, 'assignDriver'])->name('assign.driver');
Route::post('/cancel-enquiry', [App\Http\Controllers\DriverAdminController::class, 'cancelEnquiry'])->name('cancel.enquiry');
Route::get('/track-location/{enquiry}', [App\Http\Controllers\DriverAdminController::class, 'trackLocation']);
Route::get('/get-locations', [App\Http\Controllers\DriverAdminController::class, 'getLocations']);

Route::get('/confirmed-enquiries', [App\Http\Controllers\DriverAdminController::class, 'getConfirmedEnquiry']);
Route::get('/cancelled-enquiries', [App\Http\Controllers\DriverAdminController::class, 'getCancelledEnquiry']);
Route::get('/document-update-requests', [App\Http\Controllers\DriverAdminController::class, 'showDocumentUpdateRequests'])->name('admin.document.update.requests'); {/* Consensual Enquiries Routes */
}
Route::get('/contractual-enquiries', [App\Http\Controllers\DriverAdminController::class, 'getConsensualEnquiry']);
Route::post('/assign', [App\Http\Controllers\DriverAdminController::class, 'assign'])->name('assign'); {/* Driver Login Routes */
}
Route::get('/driver/login', [App\Http\Controllers\DriverDashboardController::class, 'getDriverLogin']);
Route::post('/driver/login', [App\Http\Controllers\DriverDashboardController::class, 'postDriverLogin'])->name('driver-dashboard-login');
Route::post('/driver-verify-otp', [App\Http\Controllers\DriverDashboardController::class, 'postVerifyOtp'])->name('driver-verify-otp');
Route::get('/driver-verify-otp', [App\Http\Controllers\DriverDashboardController::class, 'getVerifyOtp']);
Route::get('/driverLogout', [App\Http\Controllers\DriverDashboardController::class, 'driverLogout']);
Route::get('/driver/dashboard', [App\Http\Controllers\DriverDashboardController::class, 'getDriverDashboard']); {/* Driver Documents Routes */
}
Route::get('/add-driver-documents', [App\Http\Controllers\DriverDashboardController::class, 'addDriverDocuments']);
Route::post('/store-driver-documents', [App\Http\Controllers\DriverDashboardController::class, 'postDriverDocuments'])->name('store.driver.documents');
Route::post('/driver/request-document-update', [App\Http\Controllers\DriverDashboardController::class, 'requestDocumentUpdate'])->name('request.driver.documents.update'); {/* Driver Information Routes */
}
Route::get('/view-driver-info', [App\Http\Controllers\DriverDashboardController::class, 'getDriverInfo']);
Route::get('/edit-driver-info/{driver}', [App\Http\Controllers\DriverDashboardController::class, 'editDriverInfo'])->name('edit.driver.info');
Route::post('/update-driver-info', [App\Http\Controllers\DriverDashboardController::class, 'updateDriverInfo'])->name('update.driver.info'); {/* Drivers Enquiries Routes */
}
Route::get('/driver/all-enquiries', [App\Http\Controllers\DriverDashboardController::class, 'getDriverAllEnquiries']);
Route::get('/view-enquiry-details/{enquiry}', 'App\Http\Controllers\DriverDashboardController@viewEnquiryDetails')->name('view.enquiry');
Route::get('/driver/confirmed-enquiries', [App\Http\Controllers\DriverDashboardController::class, 'getDriverConfirmedEnquiry']);
Route::get('/driver/cancelled-enquiries', [App\Http\Controllers\DriverDashboardController::class, 'getDriverCancelledEnquiry']);
Route::post('/enquiries/{enquiry}', [App\Http\Controllers\DriverDashboardController::class, 'update'])->name('enquiries.update');
Route::post('/complete-enquiry', [App\Http\Controllers\DriverDashboardController::class, 'completeEnquiry'])->name('complete.enquiry');

Route::post('/verify-otp',  [App\Http\Controllers\DriverDashboardController::class, 'verifyOtp'])->name('verify.otp');
Route::post('/accept-enquiry', [App\Http\Controllers\DriverDashboardController::class, 'acceptEnquiry'])->name('accept.enquiry');
Route::post('/decline-enquiry', [App\Http\Controllers\DriverDashboardController::class, 'declineEnquiry'])->name('decline.enquiry');
Route::post('/update-driver-location', [App\Http\Controllers\DriverDashboardController::class, 'updateLocation']);

Route::get('/driver/contractual-enquiry-list', [App\Http\Controllers\DriverDashboardController::class, 'getConsensualList']);
Route::post('/accept-consensual-enquiry', [App\Http\Controllers\DriverDashboardController::class, 'acceptConsensualEnquiry'])->name('accept.consensual.enquiry');
Route::post('/decline-consensual-enquiry', [App\Http\Controllers\DriverDashboardController::class, 'declineConsensualEnquiry'])->name('decline.consensual.enquiry');
Route::post('/complete-consensual-enquiry', [App\Http\Controllers\DriverDashboardController::class, 'completeConsensualEnquiry'])->name('complete.consensual.enquiry');


//BLOGS ROUTES
Route::get('/all-blogs', [App\Http\Controllers\BlogController::class, 'blogs'])->name('blogs');
Route::get('/add-blogs', [App\Http\Controllers\BlogController::class, 'addBlogs'])->name('add.blogs');
Route::post('/store-blog', [App\Http\Controllers\BlogController::class, 'storeblogs'])->name('store.blog');
Route::get('/edit/blog/{id}', [App\Http\Controllers\BlogController::class, 'editblog']);
Route::post('/update-blog', [App\Http\Controllers\BlogController::class, 'updateblogs'])->name('update.blog');
Route::delete('/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'deleteblog'])->name('admin.deleteblog');

//CATEGOTIRS ROUTES
Route::get('/categories', [App\Http\Controllers\BlogController::class, 'categories'])->name('categories');
Route::post('/store-category', [App\Http\Controllers\BlogController::class, 'storecategories'])->name('store.category');
Route::post('/update-category', [App\Http\Controllers\BlogController::class, 'updatecategories'])->name('update.category');
Route::delete('/category/delete/{id}', [App\Http\Controllers\BlogController::class, 'deleteCategory'])->name('admin.deleteCategory');

//TAGS ROUTES
Route::get('/tags', [App\Http\Controllers\BlogController::class, 'tags'])->name('tags');
Route::post('/store-tags', [App\Http\Controllers\BlogController::class, 'storetags'])->name('store.tag');
Route::post('/update-tags', [App\Http\Controllers\BlogController::class, 'updatetags'])->name('update.tag');
Route::delete('/tag/delete/{id}', [App\Http\Controllers\BlogController::class, 'deletetag'])->name('admin.deletetag');
Route::post('/store-tag', [App\Http\Controllers\BlogController::class, 'storetag'])->name('store.tags');

Route::get('/blogs', [App\Http\Controllers\FrontendEnquiryController::class, 'blogs']);
Route::get('/blog/{category}/{slug}', [App\Http\Controllers\FrontendEnquiryController::class, 'blogSingle']);
Route::get('/blog/{subcategory}/{category}/{slug}', [App\Http\Controllers\FrontendEnquiryController::class, 'blogSinglenew']);
Route::get('/blog/{tag}', [App\Http\Controllers\FrontendEnquiryController::class, 'tagname']);
