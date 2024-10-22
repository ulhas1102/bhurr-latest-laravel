<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancellation extends Model
{
    use HasFactory;
    public $table = 'cancellation_policy';
    public $primaryKey = 'cancellation_policy_id';
}
