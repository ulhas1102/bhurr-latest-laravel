<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\CarDetail;

class Vendor extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'vendors';  // Use protected instead of public for consistency
    protected $primaryKey = 'id';  // Use protected instead of public for consistency

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        // Add other fields that are fillable
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	public function carDetails()
	{
		return $this->hasMany(CarDetail::class, 'vendor_id');
	}


    // Optionally, if you are using a custom access control logic, add methods for roles or permissions
}
