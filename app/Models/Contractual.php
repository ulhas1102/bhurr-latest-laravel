<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractual extends Model
{
    use HasFactory;
    public $table = 'contractual_enquries';
    public $primaryKey = 'id';
}
