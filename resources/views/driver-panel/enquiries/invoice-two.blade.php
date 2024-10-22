<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 12px;
            line-height: 18px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 2px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        /* .invoice-box table tr.top table td {
            padding-bottom: 20px;
        } */

        .invoice-box table tr.information table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        /* .invoice-box table tr.details td {
            padding-bottom: 10px;
        } */

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        .buttonbox{
            align-items: center;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<body>
    <div class="invoice-box" id="invoice">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h2>GAYATRI</h2>
                                <p>Tours & Travels</p>
                            </td>

                            <td>
                                Bill No.: 0<br>
                                Date: 00-01-1900
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Hitesh Shah<br>
                                9552273143<br>
                                9420082122
                            </td>
                            <td>
                                D-7, Radhika Park, Benkar Nagar,<br>
                                Dhayari, Pune - 411041
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>Details</td>
                <td>Information</td>
            </tr>
            
            <tr class="details">
                <td>Booked by</td>
                <td>{{ $enquiry->customer_name }}</td>
            </tr>
            
            <tr class="details">
                <td>Type of Vehicle</td>
                <td>{{ $enquiry->vehicle_type }}</td>
            </tr>
            <tr class="details">
                <td>Class of Vehicle</td>
                <td>{{ $enquiry->vehicle_class }}</td>
            </tr>
            
            <tr class="details">
                <td>Trip No.</td>
                <td>#{{$enquiry->enquiry_id}}</td>
            </tr>
            <tr class="details">
                <td>Journey from</td>
                <td>{{ $enquiry->from_location }}</td>
            </tr>
            <tr class="details">
                <td>Journey To</td>
                <td>{{ $enquiry->to_location }}</td>
            </tr>
            
            <tr class="details">
                <td>Journey Start Date</td>
                <td>{{ $enquiry->start_journy_date }}</td>
            </tr>
            <tr class="details">
                <td>Journey End Date</td>
                <td>{{ $enquiry->end_journy_date }}</td>
            </tr>
            <tr class="details">
                <td>Number Of Days</td>
                <td>{{ $enquiry->number_of_days_trip }}</td>
            </tr>
            
            <tr class="heading">
                <td>PARTICULARS</td>
                <td>Amount</td>
            </tr>
            <tr class="item">
                <td>Total Distance</td>
                <td>{{ $enquiry->total_distance }} Km/m</td>
            </tr>
            <tr class="item">
                <td>Time Duration</td>
                <td>{{ $enquiry->duration }} Minutes/s</td>
            </tr>
            
            <tr class="item">
                <td>Per Km Charges</td>
                {{ $enquiry->per_km_charges }}
            </tr>
            
            <tr class="item">
                <td>Extra hours</td>
                <td>
                @if( $enquiry->extra_hours != null)    
                {{ $enquiry->extra_hours }}
                @else
                    0
                @endif
                </td>
            </tr>
            <tr class="item">
                <td>Extra hours charges</td>
                <td>
                    {{ $enquiry->extra_hour_charges }}
                </td>
            </tr>

            <tr class="item">
                <td>Total Hours amount</td>
                <td>{{ $enquiry->extra_hours_amount }} Rs</td>
            </tr>
            
            <tr class="item">
                <td>Basic Trip Total</td>
                <td>{{ $enquiry->total_amount }} Rs</td>
            </tr>
            
            
            
            <tr class="item">
                <td>Minimum Running Average</td>
                <td>8Hr/80Km</td>
            </tr>
            
            <tr class="item">
                <td>Total Running</td>
                <td>{{ $enquiry->total_distance }} Km/m</td>
            </tr>
            
            <tr class="item">
                <td>Cleaning Charges Rs.</td>
                <td>{{ $enquiry->cleaning_charges}}</td>
            </tr>
            
            <tr class="item">
                <td>Driver Allowance per day Rs.</td>
                <td>0</td>
            </tr>
            <tr class="total">
                <td></td>
                <td>Advance payment: - {{ $enquiry->advance_amount }} Rs.</td>
            </tr>
            
            <tr class="total">
                <td></td>
                <td>Sub-total: {{ $enquiry->total_amount + $enquiry->extra_hours_amount }} Rs.</td>
            </tr>
            
            <tr class="total">
                <td></td>
                <td>Toll & Parking: - {{$enquiry->toll_amount}} Rs.</td>
            </tr>

            <tr class="total">
                <td></td>
                <td>Tax: - {{$enquiry->tax_amount}} Rs.</td>
            </tr>

            <tr class="total">
                <td></td>
                <td>Paid Amount: {{ $enquiry->overallpaidamount }} Rs.</td>
            </tr>
            
           
            <tr class="total">
                <td></td>
                <td>Remaining Amount: {{ $enquiry->remaining_amount }} Rs.</td>
            </tr>
            
            <tr class="total">
                <td></td>
                <td>Net Amount: - {{ $enquiry->remaining_amount }} Rs.</td>
            </tr>
            
            <tr class="details">
                <td>Terms & Conditions</td>
                <td>Information</td>
            </tr>
            
            <tr class="item">
                <td>1. Minimum Running of 300 kms per day for any type of vehicle.</td>
                <td>-</td>
            </tr>
            
            <tr class="item last">
                <td>2. Dispute if any subject to Pune Jurisdiction only.</td>
                <td>-</td>
            </tr>
            
            <tr class="details">
                <td>Authorized Signatory</td>
                <td>For, GAYATRI TOURS & TRAVELS</td>
            </tr>
        </table>
        
    </div>
   
   
</body>
</html>
