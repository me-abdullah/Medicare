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
//cardiologist
route::get('docrobert', [Project_Controller::class, 'cardi'])->name('docrobert');
route::get('dralice', [Project_Controller::class, 'cardio'])->name('dralice');
route::get('dremly', [Project_Controller::class, 'cardiolo'])->name('dremly');
route::get('drmichael', [Project_Controller::class, 'cardioloo'])->name('drmichael');
route::get('drsarah', [Project_Controller::class, 'cardd'])->name('drsarah');
route::get('drdavid', [Project_Controller::class, 'dav'])->name('drdavid');
route::get('drlaura', [Project_Controller::class, 'lau'])->name('drlaura');
route::get('drjames', [Project_Controller::class, 'jam'])->name('drjames');
route::get('dranna', [Project_Controller::class, 'anna'])->name('dranna');
route::get('drmark', [Project_Controller::class, 'mark'])->name('drmark');
route::get('drlisa', [Project_Controller::class, 'lisa'])->name('drlisa');
route::get('drthomas', [Project_Controller::class, 'thomas'])->name('drthomas');
route::get('apointmentform', [Project_Controller::class, 'form'])->name('form');
route::get('doc-schedule', [Project_Controller::class, 'sche'])->name('doc-schedule');

//general surgeon
route::get('drandrew', [Project_Controller::class, 'andrew'])->name('drandrew');
route::get('drrebecca', [Project_Controller::class, 'rabe'])->name('drrebecca');
route::get('drolivia', [Project_Controller::class, 'olivia'])->name('drolivia');
route::get('drmatthew', [Project_Controller::class, 'matthew'])->name('drmatthew');
route::get('drlauramit', [Project_Controller::class, 'lauramit'])->name('drlauramitt');
route::get('drethan', [Project_Controller::class, 'ethan'])->name('drethan');
route::get('drgrace', [Project_Controller::class, 'grace'])->name('drgrace');
route::get('drnicholas', [Project_Controller::class, 'nicholas'])->name('drnicholas');
route::get('drhannah', [Project_Controller::class, 'hannah'])->name('drhannah');
route::get('drwilliam', [Project_Controller::class, 'william'])->name('drwilliam');
route::get('drsophia', [Project_Controller::class, 'sophia'])->name('drsophia');
route::get('drjackson', [Project_Controller::class, 'jackson'])->name('drjackson');
//dermatologist
route::get('drleesa', [Project_Controller::class, 'leesa'])->name('drleesa');
route::get('drjason', [Project_Controller::class, 'jason'])->name('drjason');
route::get('drnatalie', [Project_Controller::class, 'natalie'])->name('drnatalie');
route::get('drethann', [Project_Controller::class, 'ethann'])->name('drethann');
route::get('droliviaturner', [Project_Controller::class, 'tur'])->name('droliviaaturner');
route::get('drandrewcol', [Project_Controller::class, 'col'])->name('drandrewcol');
route::get('drmegan', [Project_Controller::class, 'megan'])->name('drmegan');
route::get('drdaniel', [Project_Controller::class, 'daniel'])->name('drdaniel');
route::get('dremilyy', [Project_Controller::class, 'emilyy'])->name('dremilyy');
route::get('drsamuel', [Project_Controller::class, 'sam'])->name('drsamuel');
route::get('drsophiaa', [Project_Controller::class, 'sophi'])->name('drsophiaa');
route::get('drryan', [Project_Controller::class, 'ry'])->name('drryan');
//gynecology
route::get('drannaa', [Project_Controller::class, 'an'])->name('drannaa');
route::get('drlauraa', [Project_Controller::class, 'la'])->name('drlauraa');
route::get('drrachell', [Project_Controller::class, 'ri'])->name('drrachell');
route::get('droliviaa', [Project_Controller::class, 'ol'])->name('droliviaa');
route::get('drsophiia', [Project_Controller::class, 'so'])->name('drsophiia');
route::get('dremmaa', [Project_Controller::class, 'em'])->name('dremmaa');
route::get('drmegann', [Project_Controller::class, 'meg'])->name('drmegann');
route::get('drisabel', [Project_Controller::class, 'is'])->name('drisabel');
route::get('drgracce', [Project_Controller::class, 'gr'])->name('drgracce');
route::get('drjulia', [Project_Controller::class, 'ju'])->name('drjulia');
route::get('drsamanthaa', [Project_Controller::class, 'samm'])->name('drsamanthaa');
route::get('drnataliee', [Project_Controller::class, 'nate'])->name('drnataliee');
//nephrologist
route::get('drwilliamgreen', [Project_Controller::class, 'doc1'])->name('drwilliamgreen');
route::get('droliviaparker', [Project_Controller::class, 'doctor'])->name('droliviaparker');
route::get('drandrewcarter', [Project_Controller::class, 'doc3'])->name('drandrewcarter');
route::get('drgracelewis', [Project_Controller::class, 'doc4'])->name('drgracelewis');
route::get('drethanharris', [Project_Controller::class, 'doc5'])->name('thanharris');
route::get('drsophiabennett', [Project_Controller::class, 'doc6'])->name('drsophiabennett');
route::get('drdanielmorris', [Project_Controller::class, 'doc7'])->name('drmegann');
route::get('dremlywalker', [Project_Controller::class, 'doc8'])->name('dremlywalker');
route::get('drsamuelhill', [Project_Controller::class, 'doc9'])->name('drsamuelhill');
route::get('drlaurascott', [Project_Controller::class, 'doc10'])->name('rlaurascott');
route::get('drbenjaminturner', [Project_Controller::class, 'doc11'])->name('drbenjaminturner');
route::get('drrebeccaadams', [Project_Controller::class, 'docc'])->name('drrebeccaadams');
Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
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
Route::get('/management/patients', [Project_Controller::class, 'patients']);
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
