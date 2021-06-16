<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class PatientlistController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Europe/Skopje');
        $bookings = Booking::latest()->where('date',date('d-m-Y'))->get();
        return view('admin.patientlist.index',compact('bookings'));
    }
}
