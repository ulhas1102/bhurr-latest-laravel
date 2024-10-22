<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;
use App\Services\PushNotificationService;


class NotificationController extends Controller
{
	public function PushNotification(Request $request, PushNotificationService $service)
	{
			$tokens = [];
        	$tokens = User::where('id', $userrequest->customer_id)->whereNotNull('device_token')->pluck('device_token')->all();

			$title = 'Bhurr-Technologies';
			$body = 'Your Ride Accepetd By Driver.';
			$data = [
				'productId' => 'ABC123',
				'category' => 'electronics',
				'price' => 199.99,
			];
			$response = $service->sendNotification($tokens, $title, $body, $data);
	   		return response()->json(['message' => 'Ride request accepted successfully', 'status' => 200]);
	}
}