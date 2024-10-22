<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Dashboardlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();

            if ($user->access_id == 2) {
                return redirect()->route('dashboard');
            } elseif ($user->access_id == 1) {
                // return redirect()->route('/');
                return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
            }
            elseif ($user->access_id == 3) {
                return redirect()->route('driver-dashboard');
            } elseif ($user->access_id == 4) {
                return redirect()->route('vendor-dashboard');
            }
        }

        // Authentication failed...
        return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
}
