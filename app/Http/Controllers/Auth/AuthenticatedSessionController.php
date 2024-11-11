<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authenticate the user
        $request->authenticate();
        $request->session()->regenerate();
    
        // Check the user's role and redirect accordingly
        $user = Auth::user();
        
        // Use in_array to check if the role is valid
        if (in_array($user->role, ['doctor', 'patient', 'management'])) {
            // Redirect based on role
            if ($user->role === 'doctor') {
                return redirect()->intended(route('doctor.dashboard'));
            } elseif ($user->role === 'patient') {
                return redirect()->intended(route('patient.dashboard'));
            } elseif ($user->role === 'management') {
                return redirect()->intended(route('management.dashboard'));
            }
        }
    
        // Default fallback if no role matches
        return redirect()->intended(route('dashboard'));
    }
    
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
