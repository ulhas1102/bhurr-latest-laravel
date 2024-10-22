<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiries;
use App\Models\PaymentHistorys;
use PDF;

class InvoiceController extends Controller
{
    public function generateInvoice($enquiryId)
    {
        $enquiry = Enquiries::find($enquiryId);
        $paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiryId)->get();

        if (!$enquiry) {
            return redirect()->back()->with('error', 'Enquiry not found.');
        }

        return view('Enquiries.invoice', compact('enquiry', 'paymentHistorys'));
    }

    public function downloadInvoice($enquiryId)
    {
        $enquiry = Enquiries::find($enquiryId);
        $paymentHistorys = PaymentHistorys::where('enquiry_id', $enquiryId)->get();

        if (!$enquiry) {
            return redirect()->back()->with('error', 'Enquiry not found.');
        }

        $pdf = PDF::loadView('Enquiries.invoice-two', compact('enquiry', 'paymentHistorys'));

        return $pdf->download('invoice.pdf');
    }
}
