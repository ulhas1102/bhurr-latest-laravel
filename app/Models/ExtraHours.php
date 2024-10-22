<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraHours extends Model
{
    use HasFactory;
    public $table = 'extra_hours';
    public $primaryKey = 'extra_hours_id';
}
