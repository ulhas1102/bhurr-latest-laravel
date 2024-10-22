<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialBookingForm extends Model
{
    use HasFactory;
    public $table = 'special_booking_form';
    public $primaryKey = 'id';
}
