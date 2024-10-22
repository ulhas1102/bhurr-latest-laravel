<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistorys extends Model
{
    use HasFactory;
    public $table = 'payment_history';
    public $primaryKey = 'payment_history_id';
}
