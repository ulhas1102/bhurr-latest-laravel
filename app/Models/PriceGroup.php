<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carclass;

class PriceGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_class_id',
        'from_location',
        'oneway_disel_per_km_charges',
        'oneway_base_fare',
        'oneway_cng_per_km_charges',
        'electric_per_km_charges',
        'local_disel_per_km_charges',
        'local_cng_per_km_charges',
        'local_base_fare',
        'outstation_base_fare',
        'outstation_cng_per_km_charges',
        'outstation_disel_per_km_charges'
    ];

    // Relationship with CarClass
    public function carClass()
    {
        return $this->belongsTo(Carclass::class);
    }
}
