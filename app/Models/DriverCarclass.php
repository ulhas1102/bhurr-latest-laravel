<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverCarclass extends Model
{
    use HasFactory;
    public $table = 'driver_carclass';
    public $primaryKey = 'carclass_id';
}
