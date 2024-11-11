<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;
class AppointmentController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string',
        'department' => 'required|string',
        'doctor' => 'required|string',
        'date' => 'required|date_format:m/d/Y', 
        'message' => 'nullable|string',
    ]);

    // Convert the date format to YYYY-MM-DD
    $formattedDate = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');

    Appointment::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'department' => $request->department,
        'doctor' => $request->doctor,
        'date' => $formattedDate, 
        'message' => $request->message,
    ]);

    return redirect()->back()->with('success', 'Appointment booked successfully!');
}
}
