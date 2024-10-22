<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dwivedianuj9118\PhonePePaymentGateway\PhonePe;
use GuzzleHttp\Client;
use Exception;
use App\Models\PaymentHistorys;
use App\Models\Enquiries;
use App\Models\Carclass;
use App\Models\CarTypes;
use App\Models\ExtraHours;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PhonepayController extends Controller
{
//     public function checkout(Request $request)
// {
//     // Gather necessary data for PhonePe checkout
//     $data = [
//         'merchantId' => 'PGTESTPAYUAT',
//         'transactionId' => uniqid(),
//         'amount' => '1000', // Amount should be in paise
//         'redirectUrl' => 'http://127.0.0.1:8000/',
//         // Add other necessary parameters
//     ];

//     // Determine the payment method (card or UPI)
//     $paymentMethod = $request->input('payment_method'); // Assuming 'payment_method' is sent from your form
    
//     if ($paymentMethod === 'card') {
//         // Add card payment parameters
//         $data['paymentType'] = 'card';
//         // Add card specific parameters like card number, expiry, CVV, etc.
//     } elseif ($paymentMethod === 'upi') {
//         // Add UPI payment parameters
//         $data['paymentType'] = 'upi';
//         // Add UPI specific parameters like UPI ID, VPA, etc.
//     } else {
//         // Handle other payment methods or provide default behavior
//     }

//     // Detect if the request is from a mobile device
//     $isMobile = $this->isMobileDevice();

//     // Redirect based on device type
//     if ($isMobile) {
//         // Redirect to the PhonePe app URI scheme for mobile devices
//         return redirect()->away('phonepe://payment?' . http_build_query($data));
//     } else {
//         // Redirect to the PhonePe checkout page for desktop devices
//         return redirect()->away('https://www.phonepe.com/checkoutPage?' . http_build_query($data));
//     }
// }

    // private function isMobileDevice()
    // {
    //     // Check if the request is from a mobile device
    //     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    //     $mobileKeywords = ['android', 'iphone', 'ipad', 'mobile'];
        
    //     foreach ($mobileKeywords as $keyword) {
    //         if (strpos($userAgent, $keyword) !== false) {
    //             return true;
    //         }
    //     }

    //     return false;
    // }


    public function submitPaymentForm(Request $request) {
       
       // dd($request);


        $enquiryId = $request->enquiryId;
        $enquiry = Enquiries::find($enquiryId);

        $TotalAmount = $enquiry->remaining_amount;
        $AdvanceAmount = $request->input('amount');
        $advance = $AdvanceAmount !== null ? $AdvanceAmount : 0;
        $RemaingAmount = $TotalAmount - $advance;
        $enquiry->prefer_driver_language = implode(',', $request->language);
        $enquiry->advance_amount = $request->input('amount');
		$enquiry->overallpaidamount = $request->input('amount');
        $enquiry->babyseat = $request->input('babyseat');
        $enquiry->customer_id = $request->input('customer_id');
		$enquiry->percent_advance = $request->input('payment');
        $enquiry->remaining_amount = $RemaingAmount;
        $enquiry->confirm_status = 2;
		$enquiry->trip_status = 2;
		$enquiry->booking_datetime = now();
        $enquiry->save();

        // $amount = 10; // Example amount
        // $merchantId = 'PGTESTPAYUAT86'; // Your merchant ID
        // $apiKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399'; // Your API key
        // $redirectUrl = "http://127.0.0.1:8000"; // Your redirect URL
        // $order_id = uniqid(); // Example: generate a unique order ID
        
        // $transaction_data = array(
        //     'merchantId' => $merchantId,
        //     'merchantTransactionId' => $order_id,
        //     'merchantUserId' => $order_id,
        //     'amount' => $amount * 100, // PhonePe expects amount in paisa, hence multiply by 100
        //     'redirectUrl' => $redirectUrl,
        //     'redirectMode' => "POST",
        //     'callbackUrl' => $redirectUrl,
        //     'paymentInstrument' => array(    
        //         'type' => 'PAY_PAGE',
        //     )
        // );
    
        // // Encode transaction data
        // $encode = json_encode($transaction_data);
        // $payloadMain = base64_encode($encode);
        // $salt_index = 1; // Example: salt index
        // $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
        // $sha256 = hash("sha256", $payload);
        // $final_x_header = $sha256 . '###' . $salt_index;
        // $requestPayload = json_encode(array('request' => $payloadMain));
        
        // // Initialize cURL session
        // $curl = curl_init();
    
        // // Set cURL options
        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => $requestPayload,
        //     CURLOPT_HTTPHEADER => [
        //         "Content-Type: application/json",
        //         "X-VERIFY: " . $final_x_header,
        //         "accept: application/json"
        //     ],
        // ]);
    
        // // Execute cURL request
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
    
        // // Close cURL session
        // curl_close($curl);
    
        // // Handle cURL errors
        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     // Parse JSON response
        //     $res = json_decode($response);
    
        //     // Check for PAYMENT_INITIATED status
        //     if (isset($res->code) && $res->code == 'PAYMENT_INITIATED') {
        //         $payUrl = $res->data->instrumentResponse->redirectInfo->url;
        //         return redirect()->away($payUrl);
        //     } else {
        //         // Handle other error scenarios
        //         dd($res);
        //     }
        // }
        $request->session()->flash('success', 'Booking Information Submitted  Successfully!');

        return redirect()->route('/');
    }
    

}
