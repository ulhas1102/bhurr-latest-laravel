<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassWiseCar extends Model
{
    use HasFactory;
    public $table = 'class_wise_cars';
    public $primaryKey = 'id';
}
