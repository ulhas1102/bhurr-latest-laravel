<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Vendor;
use App\Models\CarDetail;
use App\Models\ClassWiseCar;
use App\Models\Driver;
use App\Models\Carclass;
use App\Models\DriverCarclass;
use App\Models\Enquiries;
use App\Models\PaymentHistorys;
use App\Models\CarTypes;
use App\Models\Cancellation;
use App\Models\ExtraHours;
use GuzzleHttp\Client;
use App\Helpers\DistanceHelper;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckAccess;
use App\Http\Middleware\CheckAccessDriver;
use App\Http\Middleware\CheckAccessVendor;
use App\Models\Extrakilometers;
use App\Exports\EnquiriesExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/get-prices',[App\Http\Controllers\FrontendEnquiryController::class,'gePriceDetails']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-user-by-mobile', function () {
    \Log::info('get-user-by-mobile route was hit');
	$users = User::all();
    return $users;
});

Route::get('/get-car-models/{class_name}', function ($class_name) {
    \Log::info('get-car-models');
	$models = ClassWiseCar::where('class_name', $class_name)->select('car_name')->get();
	if(!$models->isEmpty()){
		return response()->json(['success' => true,'models' => $models]);
	}else{
		return response()->json(['success' => false ,'message' => 'Car model not found']);
	}
});

//Vendor API
Route::post('/user-registration', [App\Http\Controllers\UserAuthenticationApiController::class,'UserRegistration']);
Route::post('/vendor-registration', [App\Http\Controllers\UserAuthenticationApiController::class,'VendorRegistration']);
Route::post('/vendor-otp', [App\Http\Controllers\UserAuthenticationApiController::class,'verifyVendorOtpLogin']);
Route::post('/vendor-login', [App\Http\Controllers\UserAuthenticationApiController::class,'VendorLogin']);
Route::get('/vendor-user-profile/{id}',[App\Http\Controllers\UserAuthenticationApiController::class,'getVendorUserProfile']);
Route::post('/update-vendor-profile',[App\Http\Controllers\UserAuthenticationApiController::class,'UpdateVendor']);
Route::post('/vendor-add-driver', [App\Http\Controllers\VendorApiController::class,'VendorPostDriver']);
Route::post('/add-car-details',[App\Http\Controllers\VendorApiController::class, 'storeCarDetails']);
Route::get('/car-types',[App\Http\Controllers\VendorApiController::class,'getcarTypes']);
Route::get('/car-class',[App\Http\Controllers\VendorApiController::class,'getCarClass']);

Route::get('/vendors', function () {
    $vendors = Vendor::where('verified_status', 1)->get();
    return response()->json(['success' => true, 'message' => 'Vendor fetch successfully', 'vendors' => $vendors]);
});

Route::get('/v-vendors', function () {
    $vendors = Vendor::where('verified_status', 1)
        ->whereHas('carDetails', function ($query) {
            $query->where('verified_status', 1);
        })
        ->get();

    return response()->json([
        'success' => true, 
        'message' => 'Vendors fetched successfully', 
        'vendors' => $vendors
    ]);
});

Route::get('/vendors-cars/{vendor_id}', function ($vendorId) {
       $vendorcars = CarDetail::where('vendor_id', $vendorId)->get();
	return response()->json(['success' => true, 'message' => 'Vendor Cars fetch successfully', 'cars' => $vendorcars]);
});

Route::get('/drivers/{vendor_id}', function ($vendorId) {
    $drivers = Driver::where('vendor_id', $vendorId)->get();
	return response()->json(['success' => true, 'message' => 'Vendor driver fetch successfully', 'drivers' => $drivers]);
});

Route::get('/v-drivers/{vendor_id}', function ($vendorId) {
    $drivers = Driver::where('vendor_id', $vendorId)->where('verified_status', 1)->get();
	return response()->json(['success' => true, 'message' => 'Vendor driver fetch successfully', 'drivers' => $drivers]);
});

Route::get('/vendor-drivers-count/{vendor_id}', function ($vendorId) {
    $drivers = Driver::where('vendor_id', $vendorId)->count();
	return response()->json(['success' => true, 'message' => 'Vendor driver count successfully', 'drivers' => $drivers]);
});
Route::get('/vendors-cars-count/{vendor_id}', function ($vendorId) {
    $vendorcars = CarDetail::where('vendor_id', $vendorId)->count();
	return response()->json(['success' => true, 'message' => 'Vendor Cars count fetch successfully', 'cars' => $vendorcars]);
});

Route::get('/check-vendor-documents/{vendorId}', [App\Http\Controllers\VendorApiController::class, 'checkVendorDocuments']);

Route::get('get-edit-driver/{id}',[App\Http\Controllers\VendorApiController::class,'editVendorDriver']);
Route::post('post-edit-driver',[App\Http\Controllers\VendorApiController::class,'PostEditDriver']);
Route::post('delete-vendor-driver', [App\Http\Controllers\VendorApiController::class,'DeleteVendorDriver']);
Route::get('get-edit-car-details/{id}',[App\Http\Controllers\VendorApiController::class,'editVendorCars']);
Route::post('post-edit-car-details',[App\Http\Controllers\VendorApiController::class,'PostEditVendorCars']);
Route::post('delete-vendor-cars', [App\Http\Controllers\VendorApiController::class,'DeleteVendorCars']);

//Freelancer Driver part api
Route::post('/driver-registration', [App\Http\Controllers\UserAuthenticationApiController::class,'DriverRegistration']);
Route::post('/driver-login', [App\Http\Controllers\UserAuthenticationApiController::class,'DriverLogin']);
Route::post('/driver-otp', [App\Http\Controllers\UserAuthenticationApiController::class,'verifyDriverOtpLogin']);
Route::get('/driver-user-profile/{id}',[App\Http\Controllers\UserAuthenticationApiController::class,'getDriverUserProfile']);
Route::post('/update-driver-profile',[App\Http\Controllers\UserAuthenticationApiController::class,'UpdateDriver']);
Route::post('/update-driver-live-location',[App\Http\Controllers\UserAuthenticationApiController::class,'UpdateDriveriveLocation']);


//Vendor Driver part api
Route::get('/driver-bank-account/{id}',[App\Http\Controllers\VendorDriverLoginController::class,'Bankaccount']);
Route::post('/driver-add-bank-account',[App\Http\Controllers\VendorDriverLoginController::class,'AddBankaccount']);
Route::get('/get-driver-edit-bank-account/{account_id}',[App\Http\Controllers\VendorDriverLoginController::class,'getEditBankaccount']);
Route::post('/driver-edit-bank-account',[App\Http\Controllers\VendorDriverLoginController::class,'EditBankaccount']);
Route::post('/driver-delete-bank-account',[App\Http\Controllers\VendorDriverLoginController::class,'DeleteBankaccount']);
Route::post('/vendor-driver-fcm-token', [App\Http\Controllers\VendorDriverLoginController::class,'VendorDriverFcmToken']);
Route::post('/vendor-driver-login', [App\Http\Controllers\VendorDriverLoginController::class,'VendorDriverLogin']);
Route::post('/vendor-driver-otp', [App\Http\Controllers\VendorDriverLoginController::class,'verifyVendorDriverOtpLogin']);
Route::get('/vendor-driver-profile/{id}',[App\Http\Controllers\VendorDriverLoginController::class,'getVendorDriverProfile']);
Route::post('/update-vendor-driver-live-location',[App\Http\Controllers\VendorDriverLoginController::class,'UpdateVendorDriveriveLocation']);
Route::get('/vendor-driver-sheduled-trips/{id}',[App\Http\Controllers\VendorDriverLoginController::class,'VendorDriverScheduledTrip']);
Route::get('/vendor-driver-sheduled-otp-button/{id}',[App\Http\Controllers\VendorDriverLoginController::class,'VendorDriverScheduledTripOTPButton']);
Route::post('/verify-trip-otp',[App\Http\Controllers\VendorDriverLoginController::class,'TripOtpVerification']);
Route::get('/vendor-driver-ongoing-trips/{id}',[App\Http\Controllers\VendorDriverLoginController::class,'VendorDriverOngoingTrip']);
Route::post('/vendor-driver-add-payment-history', [App\Http\Controllers\VendorDriverLoginController::class, 'VendorDriveraddPaymentHistory']);
Route::put('/vendor-driver-update-payment-history/{id}', [App\Http\Controllers\VendorDriverLoginController::class, 'VendorDriverupdatePaymentHistory']);
Route::post('/vendor-driver-add-extra-hours', [App\Http\Controllers\VendorDriverLoginController::class, 'VendorDriveraddExtraHours']);
 Route::put('/vendor-driver-update-extra-hours/{id}', [App\Http\Controllers\VendorDriverLoginController::class, 'VendorDriverupdateExtarHours']);
Route::post('/vendor-driver-add-extra-kilometers', [App\Http\Controllers\VendorDriverLoginController::class, 'VendorDriveraddExtraKilometers']);
Route::put('/vendor-driver-update-extra-kilometers/{id}', [App\Http\Controllers\VendorDriverLoginController::class, 'VendorDriverupdateExtarKilometers']);

Route::post('/vendor-driver-add-extra-expence', [App\Http\Controllers\VendorDriverLoginController::class, 'VendorDriveraddExtraExpence']);

Route::post('/vendor-driver-update-trip-status', [App\Http\Controllers\VendorDriverLoginController::class, 'VendorDriverupdateTripStatus']);
Route::get('/vendor-driver-completed-trips-list/{id}',[App\Http\Controllers\VendorDriverLoginController::class,'VendorDriverCompletedTripList']);
Route::get('/vendor-driver-completed-trips/{id}',[App\Http\Controllers\VendorDriverLoginController::class,'VendorDriverCompletedTrip']);




//Vendor part API
Route::get('/vendor-bank-account/{id}',[App\Http\Controllers\VendorApiController::class,'Bankaccount']);
Route::post('/vendor-add-bank-account',[App\Http\Controllers\VendorApiController::class,'AddBankaccount']);
Route::get('/get-vendor-edit-bank-account/{account_id}',[App\Http\Controllers\VendorApiController::class,'getEditBankaccount']);
Route::post('/vendor-edit-bank-account',[App\Http\Controllers\VendorApiController::class,'EditBankaccount']);
Route::post('/vendor-delete-bank-account',[App\Http\Controllers\VendorApiController::class,'DeleteBankaccount']);
Route::post('/vendor-fcm-token',[App\Http\Controllers\VendorApiController::class,'VendorFcmToken']);
Route::get('/vendor-new-trips-list/{id}',[App\Http\Controllers\VendorApiController::class,'VendorNewTripList']);
Route::post('/vendor-accept-new-trips',[App\Http\Controllers\VendorApiController::class,'VendorAcceptNewTrip']);
Route::get('/vendor-sheduled-trips-list/{id}',[App\Http\Controllers\VendorApiController::class,'VendorScheduledTripList']);
Route::get('/vendor-sheduled-trips/{id}',[App\Http\Controllers\VendorApiController::class,'VendorScheduledTrip']);
//Route::get('/vendor-sheduled-otp-button/{id}',[App\Http\Controllers\VendorApiController::class,'VendorScheduledTripOTPButton']);
Route::post('/vednor-verify-trip-otp',[App\Http\Controllers\VendorApiController::class,'VendorTripOtpVerification']);
Route::get('/vendor-ongoing-trips-list/{id}',[App\Http\Controllers\VendorApiController::class,'VendorOngoingTripList']);
Route::get('/vendor-ongoing-trips/{id}',[App\Http\Controllers\VendorApiController::class,'VendorOngoingTrip']);
Route::get('/vendor-completed-trips-list/{id}',[App\Http\Controllers\VendorApiController::class,'VendorCompletedTripList']);
Route::get('/vendor-completed-trips/{id}',[App\Http\Controllers\VendorApiController::class,'VendorCompletedTrip']);


//Customer app APi 
Route::post('/customer-login',[App\Http\Controllers\CustomerAppLoginController::class,'CustomerLogin']);
Route::post('/customer-verify-otp',[App\Http\Controllers\CustomerAppLoginController::class,'CustomerverifyOtp']);
Route::post('/new-customer-register-email',[App\Http\Controllers\CustomerAppLoginController::class,'CustomerEmail']);
Route::post('/new-customer-register-first-name-last-name',[App\Http\Controllers\CustomerAppLoginController::class,'CustomerDetails']);
Route::get('/customer-profile',[App\Http\Controllers\CustomerAppLoginController::class,'CustomerProfile']);
Route::post('/customer-update-profile',[App\Http\Controllers\CustomerAppLoginController::class,'UpdateCustomerProfile']);

//Customer App Cab Flow
Route::post('/one-way',[App\Http\Controllers\CustomerAppCabController::class,'PostCabbookingOneWay']);
Route::post('/round-trip',[App\Http\Controllers\CustomerAppCabController::class,'PostCabbookingRoundTrip']);
Route::post('/local-trip',[App\Http\Controllers\CustomerAppCabController::class,'PostCabbookingLocalTrip']);

Route::get('enquiry-data/{enquiry_id}', function($enquiryId){
$enquiry = Enquiries::find($enquiryId);
return response()->json(['success' => true, 'message' => 'Enquiry Data', 'enquiry' => $enquiry]);
});

Route::post('/submit-car-details',[App\Http\Controllers\CustomerAppCabController::class,'PostCarDetailsAndPricing']);
Route::post('/personal-details',[App\Http\Controllers\CustomerAppCabController::class,'postBookingDetails']);
Route::post('/payment-form',[App\Http\Controllers\CustomerAppCabController::class,'submitPaymentForm']);
Route::get('/all-trips/{customer_id}', [App\Http\Controllers\CustomerAppCabController::class, 'CustomerAllTrips']);
Route::get('/specific-trip-data/{enquiry_id}', [App\Http\Controllers\CustomerAppCabController::class, 'SpecificTripData']);


//Driver App Api
Route::get('/check-driver-documents/{driverId}', [App\Http\Controllers\DriverAppApi::class, 'checkDriverDocuments']);
Route::post('/local-trip-request',[App\Http\Controllers\DriverAppApi::class,'LocalTripRequest']);
Route::post('/outstation-trip-request',[App\Http\Controllers\DriverAppApi::class,'OutstationTripRequest']);
Route::post('/contractual-trip-request',[App\Http\Controllers\DriverAppApi::class,'ContractualTripRequest']);
Route::post('/personal-info',[App\Http\Controllers\DriverAppApi::class,'postPersonalInfo']);
Route::get('/review-trip-details/{enquiry_id}',[App\Http\Controllers\DriverAppApi::class,'reviewTripDetails']);

Route::get('driver-car-class', function(){
$carclass = DriverCarclass::select('carclass_name','carclass_id')->get();
return $carclass;
});

Route::get('/all-enquiry-request/{customer_id}', [App\Http\Controllers\DriverAppApi::class,'allEnquiryRequest']);
Route::get('/specificdriver-enquiry-request/{enquiry_id}', [App\Http\Controllers\DriverAppApi::class,'SpecificEnquiryRequest']);
Route::get('/all-contractual-enquiry-request/{customer_id}', [App\Http\Controllers\DriverAppApi::class,'AllContractualEnquiryRequest']);
Route::get('/specificdriver-contractula-enquiry-request/{enquiry_id}', [App\Http\Controllers\DriverAppApi::class,'SpecificContratualEnquiryRequest']);

Route::get('/review-contractual-enquiry', [App\Http\Controllers\DriverAppApi::class,'reviewContractualDetails']);




