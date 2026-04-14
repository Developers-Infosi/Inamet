<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistered;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register-site');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',

        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],

            'is_approved' => false, // Pendente de aprovação
            'level' => "Usuário Normal"
        ]);

        Mail::to($user->email)->send(new UserRegistered($user));

        return redirect()->back()->with('registeredSuccessfull', '1');
    }
}
