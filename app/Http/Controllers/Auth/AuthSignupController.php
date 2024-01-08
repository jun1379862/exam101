<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class AuthSignupController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signupview');
    }
    
    public function signup(Request $request)
    {
        try {
            // Validate the form data
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
            ]);

            // Create a new user
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);

            // Log in the user after signup
            Auth::login($user);

            return redirect('/');
        } catch (QueryException $exception) {
            // If the exception is due to a duplicate entry (email)
            if ($exception->errorInfo[1] === 1062) {
                return back()->withErrors(['email' => 'Email already exists']);
            }
    
            // Handle other types of exceptions or errors as needed
            return back()->withErrors(['error' => 'An error occurred. Please try again.']);
        }
    }
}