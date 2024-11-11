<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Project_Controller;
use App\Http\Controllers\AppointmentController;

route::get('404', [Project_Controller::class, 'notfound'])->name('notfound');
route::get('portfolio', [Project_Controller::class, 'port'])->name('portfolio');
route::get('blog', [Project_Controller::class, 'blogs'])->name('blog');
route::get('about', [Project_Controller::class, 'about'])->name('about');
route::get('contact', [Project_Controller::class, 'contact'])->name('contact');
route::get('cardiology', [Project_Controller::class, 'cardiology'])->name('cardiology');
route::get('generalsurgery', [Project_Controller::class, 'generalsurgery'])->name('generalsurgery');
route::get('dermatology', [Project_Controller::class, 'dermatology'])->name('dermatology');
route::get('gynaecology', [Project_Controller::class, 'gynaecology'])->name('gynaecology');
route::get('nephrology', [Project_Controller::class, 'nephrology'])->name('nephrology');
route::get('islmabad-hosp', [Project_Controller::class, 'islmabad'])->name('islmabad');
route::get('karachi-hosp', [Project_Controller::class, 'karachi'])->name('karachi');
route::get('lahore-hosp', [Project_Controller::class, 'lahore'])->name('lahore');
route::get('multan-hosp', [Project_Controller::class, 'multan'])->name('multan');
route::get('peshawar-hosp', [Project_Controller::class, 'peshawar'])->name('peshawar');
route::get('pharmacy', [Project_Controller::class, 'pharmacy'])->name('pharmacy');
route::get('bloodbank', [Project_Controller::class, 'bloodbank'])->name('bloodbank');
route::get('radiology', [Project_Controller::class, 'radiology'])->name('radiology');
route::get('emergency', [Project_Controller::class, 'emergency'])->name('emergency');
route::get('covid', [Project_Controller::class, 'covid'])->name('covid');
Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/doctor/dashboard', function () {
        return view('doctor');
    })->name('doctor.dashboard');
});

Route::middleware(['auth', 'role:patient'])->group(function () {
    Route::get('/patient/dashboard', function () {
        return view('patient');
    })->name('patient.dashboard');
});

Route::middleware(['auth', 'role:management'])->group(function () {
    Route::get('/management/dashboard', function () {
        return view('management');
    })->name('management.dashboard');
    Route::get('/management/doctors', [Project_Controller::class, 'doctors']);
    Route::get('/management/calendar', [Project_Controller::class, 'calendar']);
    Route::get('/management/patients', [AppointmentController::class, 'showAppointments']);
    Route::get('/management/appointments', [Project_Controller::class, 'appointments']);
    Route::get('/management/schedule', [Project_Controller::class, 'schedule']);
    Route::get('/management/departments', [Project_Controller::class, 'departments']);
    Route::get('/management/adddoctor', [Project_Controller::class, 'adddoctor']);
    Route::get('/management/addpatient', [Project_Controller::class, 'addpatient']);
    Route::get('/management/addappointment', [Project_Controller::class, 'addappointment']);
    Route::get('/management/addshedule', [Project_Controller::class, 'addshedule']);
    Route::get('/management/location', [Project_Controller::class, 'location']);
});

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store']);
Route::post('/appointments', [AppointmentController::class, 'store'])
    ->middleware('auth')
    ->name('appointments.store');



require __DIR__ . '/auth.php';
