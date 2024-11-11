<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest; // Ensure you have this request class created
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        // Validate and create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'role' => $request->role, // Store the role
        ]);
    
        // Log the user in
        Auth::login($user);
    
        // Redirect to a specific route
        return redirect()->route('home')->with('status', 'Registration successful! You are now logged in.');
    }
    
    
}
