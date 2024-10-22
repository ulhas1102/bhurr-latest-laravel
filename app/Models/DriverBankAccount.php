<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverBankAccount extends Model
{
    use HasFactory;
    public $table = 'driverbankaccount';
    public $primaryKey = 'id';
}
