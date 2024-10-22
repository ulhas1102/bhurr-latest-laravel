<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extrakilometers extends Model
{
    use HasFactory;
    public $table = 'extra_kilometers';
    public $primaryKey = 'extra_kilometers_id';
}
