<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use App\Models\User;

class PushNotificationService
{
    protected $messaging;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount('/var/www/vhosts/advancetaxiservice.com/httpdocs/storage/app/firebase_credentials.json');
        $this->messaging = $factory->createMessaging();
    }

    public function sendNotification(array $tokens, $title, $body, $imageUrl, $data = [])
{
    // Load Firebase credentials
    $factory = (new Factory)->withServiceAccount('/var/www/vhosts/advancetaxiservice.com/httpdocs/storage/app/firebase_credentials.json');
    $messaging = $factory->createMessaging();

    // Get FCM tokens for the specified user IDs
    // $FcmToken = User::whereIn('id', $userIds)->whereNotNull('device_token')->pluck('device_token')->all();

// $FcmToken = ['d-1iTZCsS1yhS12jScRmdR:APA91bGY0khzYXTR1-x0F_GUUw8z8gu5G-MYCHXcv_ud98iw6M9TSaEpP7W8cL26kXTPIUAUb5gd1eS5BA0_QHajo1yV9g3-oYQNF2-Qq_qMSYN5MdrI9J-us08SSK7zlo4sW-o6Q9fY'];

    // Check if there are tokens to send the notification to
    if (empty($tokens)) {
        return ['success' => false, 'error' => 'No device tokens found for the specified user IDs'];
    }

    // Prepare the notification
    $notification = Notification::create($title, $body);
    $androidNotification = [
        'title' => $title,
        'body' => $body,
        'icon' => 'https://booking.advancetaxiservice.com/customer-app/public/assets/img/vehicle/ats-logo.png',
		'image' => $imageUrl,
        'sound' => 'notification.wav',
        'channel_id' => 'fcm_default_channel'
    ];

    $messageData = array_merge([
        "notification_body" => $body,
        "notification_title" => $title,
        "notification_foreground" => "true",
        "notification_android_channel_id" => "fcm_default_channel",
        "notification_android_priority" => "2",
        "notification_android_visibility" => "1",
        "notification_android_color" => "#ff0000",
        "notification_android_icon" => "favicon",
        "notification_android_vibrate" => "500, 200, 500",
        "notification_android_lights" => "#ffff0000, 250, 250",
        "contentAvailable" => true,
        "priority" => 'high'
    ], $data);

    $message = CloudMessage::fromArray([
        'notification' => $notification->jsonSerialize(),
        'android' => [
            'notification' => $androidNotification,
            'priority' => 'high'
        ],
        'data' => $messageData
    ]);

    try {
        if (count($tokens) > 1) {
            $messaging->sendMulticast($message, $tokens);
        } else {
            $messaging->send($message->withChangedTarget('token', $tokens[0]));
        }
        return ['success' => true];
    } catch (\Exception $e) {
        return ['success' => false, 'error' => $e->getMessage()];
    }
}
}
