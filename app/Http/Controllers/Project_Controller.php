<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project_Controller extends Controller

{
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
   
    public function notfound()
    {
        return view('404');
    }
    public function blogs()
    {
        return view('blog');
    }
    public function about()
    {
        return view('about');
    }
    public function cardiology()
    {
        return view('cardiology');
    }
    public function generalsurgery()
    {
        return view('generalsurgery');
    }
    public function dermatology()
    {
        return view('dermatology');
    }
    public function gynaecology()
    {
        return view('gynaecology');
    }
    public function nephrology()
    {
        return view('nephrology');
    }
    public function islmabad()
    {
        return view('islmabad-hosp');
    }
    public function karachi()
    {
        return view('karachi-hosp');
    }
    public function lahore()
    {
        return view('lahore-hosp');
    }
    public function multan()
    {
        return view('multan-hosp');
    }
    public function peshawar()
    {
        return view('peshawar-hosp');
    }
    public function pharmacy()
    {
        return view(view: 'pharmacy');
    }
    public function covid()
    {
        return view('covid');
    }
    public function emergency()
    {
        return view('emergency');
    }
    public function radiology()
    {
        return view('radiology');
    }
    public function bloodbank()
    {
        return view('bloodbank');
    }
    public function doctors()
    {
        return view('doctors');
    }
    public function calendar()
    {
        return view('calendar');
    }
    public function patients()
    {
        return view('patients');
    }
    public function appointments()
    {
        return view('appointments');
    }
    public function schedule()
    {
        return view('schedule');
    }
    public function departments()
    {
        return view('departments');
    }
    public function adddoctor()
    {
        return view('add-doctor');
    }
    public function addpatient()
    {
        return view('add-patient');
    }
    public function addappointment()
    {
        return view('add-appointment');
    }
    public function addshedule()
    {
        return view('add-shedule');
    }
    public function location()
    {
        return view('location');
    }
   
}
