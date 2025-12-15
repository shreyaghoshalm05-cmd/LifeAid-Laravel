<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session()->has('user_id')) {
            return redirect('/');
        }
        return view('auth.login');
    }

    public function showRegister()
    {
        if (session()->has('user_id')) {
            return redirect('/');
        }
        return view('auth.register');
    }

    public function login(Request $r)
    {
        $user = User::where('email', $r->email)
                    ->where('password', $r->password)
                    ->first();

        if (!$user) {
            return back()->with('error', 'Invalid credentials');
        }

        session([
            'user_id'   => $user->id,
            'user_name' => $user->name
        ]);

        return redirect('/')->with('success', 'Logged in successfully');
    }

    public function register(Request $r)
    {
        $user = User::create([
            'name'     => $r->name,
            'email'    => $r->email,
            'phone'    => $r->phone,
            'password' => $r->password,
            'address'  => $r->address,
        ]);

        session([
            'user_id'   => $user->id,
            'user_name' => $user->name
        ]);

        return redirect('/')->with('success', 'Registered successfully');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
