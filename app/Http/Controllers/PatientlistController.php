<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class PatientlistController extends Controller
{
    public function index(Request $request)
    {
        date_default_timezone_set('Europe/Skopje');
        if($request->date){
        $bookings = Booking::latest()->where('date',$request->date)->get();
        return view('admin.patientlist.index',compact('bookings'));
        }
        
        $bookings = Booking::latest()->where('date',date('d-m-Y'))->get();
        return view('admin.patientlist.index',compact('bookings'));
    }

    public function toogleStatus($id)
    {
        $booking = Booking::find($id);
        $booking->status =! $booking->status;
        $booking->save();
        return redirect()->back();


    }


}
