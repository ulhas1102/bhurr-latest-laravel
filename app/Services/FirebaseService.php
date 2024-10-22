<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Exception\AuthException;

class FirebaseService
{
    protected $auth;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(config('firebase.credentials.file'));
        $this->auth = $factory->createAuth();
    }

    public function sendOtp($phoneNumber)
    {
        try {
            $phoneAuth = $this->auth->sendVerificationCode($phoneNumber);
            return $phoneAuth;
        } catch (AuthException | FirebaseException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
