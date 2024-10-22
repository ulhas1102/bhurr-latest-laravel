<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraExpences extends Model
{
    use HasFactory;
    public $table = 'extra_expence';
    public $primaryKey = 'extra_expence_id';
}
