<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctors', [
            'doctors' => $doctors,
            'hospital' => (object) ['hospital_name' => 'All Hospitals']
        ]);
    }

    // Show doctor page with slots
    public function show($id)
    {
        $doctor = Doctor::with('hospital')->find($id);

        if (!$doctor) {
            return redirect('/hospitals')->with('error', 'Doctor not found.');
        }

        return view('doctor_details', compact('doctor'));
    }

    // BOOKING LOGIC
    public function book(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
            'hospital_id' => 'required',
            'slot' => 'required',
            'day' => 'required',
        ]);

        \DB::table('appointments')->insert([
            'doctor_id'   => $request->doctor_id,
            'hospital_id' => $request->hospital_id,
            'slot'        => $request->slot,
            'day'         => $request->day,
            'created_at'  => now(),
        ]);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}
