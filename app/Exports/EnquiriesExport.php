<?php

namespace App\Exports;

use App\Models\Enquiries;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EnquiriesExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Enquiries::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            `enquiry_id` ,
 `customer_name` ,
 `customer_email` ,
 `customer_mobile` ,
 `alternate_customer_mobile` ,
 `customer_address` ,
 `customer_pincode` ,
 `package_type` ,
 `from_location` ,
 `to_location` ,
 `start_journy_date` ,
 `start_journy_time` ,
 `end_journy_date` ,
 `number_of_days_trip` ,
 `round_return` ,
 `number_of_persons` ,
 `total_distance` ,
 `duration` ,
 `driver_id` ,
 `vendor_id` ,
 `vehicle_name` ,
 `vehicle_type` ,
 `vehicle_class` ,
 `total_amount` ,
 `advance_amount` ,
 `confirm_status` ,
 `trip_status` ,
 `remaining_amount` ,
 `overallpaidamount` ,
 `extra_hours`,
 `extra_hours_amount` ,
 `extra_hour_charges` ,
 `per_km_charges` ,
 `kilometers` ,
 `extra_kilometers_amount` ,
 `extra_kilometer_charges` ,
 `cleaning_charges` ,
 `tax_amount` ,
 `toll_amount`,
 `created_at` ,
 `updated_at` ,
        ];
    }
}
