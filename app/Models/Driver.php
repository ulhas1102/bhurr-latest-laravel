<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Driver extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'driver'; // Ensure this matches your table name
    protected $primaryKey = 'driver_id';

    // Define additional properties and methods if needed
}
