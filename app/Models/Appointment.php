<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Optionally, define the table if it's not following the convention
    protected $table = 'appointments';  // This is just to be explicit (not required if the table follows the default naming convention)
    
    // Define the fillable attributes (so you can mass assign data safely)
    protected $fillable = [
        'name', 'email', 'phone', 'department', 'doctor', 'date', 'message',
    ];
}
