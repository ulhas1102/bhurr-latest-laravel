<?php

namespace app\Helpers;

use GuzzleHttp\Client;

class DistanceHelper
{
    public static function getDistanceAndDuration($fromLocation, $toLocation)
    {
        $apiKey = 'AIzaSyDUkMVVi6QljBfyIuIVsE8MbkgEzu9C0P0'; // Replace with your Google Maps API key
        $client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/distancematrix/json', [
            'query' => [
                'origins' => $fromLocation,
                'destinations' => $toLocation,
                'key' => $apiKey
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        $distance = $data['rows'][0]['elements'][0]['distance']['value'] / 1000; // distance in km
        $duration = $data['rows'][0]['elements'][0]['duration']['value'] / 60; // duration in minutes

        return [
            'distance' => $distance,
            'duration' => round($duration)
        ];
    }
}
