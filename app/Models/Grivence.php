<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grivence extends Model
{
    use HasFactory;
    public $table = 'grivence_form';
    public $primaryKey = 'id';
}
