<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login-site');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_approved) {

                return redirect()->intended(route('site.home'));
            } else {
                Auth::logout();
                return redirect()->route('site.login')->with('notApproved', '1');
            }
        }
        return redirect()->back()->with('incorrectCredential', '1');
    }





    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('site.login');
    }
}
