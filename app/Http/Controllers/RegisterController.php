<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    // Method to handle the user registration
    public function store(Request $request)
    {
        // Log the incoming request to check the submitted role
        Log::info('Role from registration form: ' . $request->role);
    
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:doctor,management,patient', // Ensures valid role
        ]);
    
        // Create the user with the selected role
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role, // Ensure the role is correctly stored
        ]);
    
        // Log the user data to confirm the role assignment
        Log::info('User created: ', $user->toArray());
    
        // Automatically log the user in
        Auth::login($user);
    
        // Redirect to dashboard or intended route
        return redirect()->route('dashboard');
    }
    
}
