<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Driver;
use App\Models\Carclass;
use App\Models\CarTypes;
use App\Models\CarDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;

class DriverApiController extends Controller
{
    //
	public function UpdateDriveriveLocation(Request $request)	
	{
		$driverId = $request->driver_id;
		$driver = Driver::find($driverId);
		if (!$driver) {
			return response()->json(['success' => false, 'message' => 'A driver not found.']);
		}
		$driver->latitude = $request->latitude;
		$driver->longitude = $request->longitude;
		$driver->save();
		return response()->json(['success' => false, 'message' => 'Location Updated successfully.']);
	}
}
