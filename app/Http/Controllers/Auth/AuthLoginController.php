<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.loginview');
    }

    // Handle login attempts
    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to a protected resource
        return redirect('/dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
        
        // return response()->json([
        //     'Message' => 'Email not found.',
        //     'success' => false,
        // ]);
    }
}