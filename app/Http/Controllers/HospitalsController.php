<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\Doctor;

class HospitalsController extends Controller
{
    // Show hospital list with optional search
    public function index(Request $r)
    {
        $query = Hospital::query();

        if ($r->search) {
            $query->where('hospital_name', 'like', '%' . $r->search . '%')
                  ->orWhere('address', 'like', '%' . $r->search . '%')
                  ->orWhere('category', 'like', '%' . $r->search . '%');
        }

        $hospitals = $query->get();

        return view('hospitals', compact('hospitals'));
    }

    // Store new hospital record
    public function store(Request $r)
    {
        $r->validate([
            'hospital_name'  => 'required',
            'address'        => 'required',
            'phone'          => 'nullable',
            'email'          => 'nullable|email',
            'category'       => 'nullable',
            'beds_available' => 'nullable|numeric',
            'image'          => 'nullable',
            'map_link'       => 'nullable',
            'services'       => 'nullable'
        ]);

        Hospital::create([
            'hospital_name'  => $r->hospital_name,
            'address'        => $r->address,
            'phone'          => $r->phone,
            'email'          => $r->email,
            'category'       => $r->category,
            'beds_available' => $r->beds_available,
            'image'          => $r->image,
            'map_link'       => $r->map_link,
            'services'       => $r->services,
        ]);

        return redirect('/hospitals')->with('success', 'Hospital added successfully!');
    }

    // Delete a hospital record
    public function delete($id)
    {
        Hospital::where('id', $id)->delete();
        return redirect('/hospitals')->with('success', 'Hospital deleted successfully!');
    }


    /**
     * ✔ FIXED: Show doctors for a hospital using NAME, not ID.
     */
    public function doctors($name)
    {
        $decodedName = urldecode($name);

        // Find hospital by hospital_name
        $hospital = Hospital::with('doctors')
                     ->where('hospital_name', $decodedName)
                     ->first();

        if (!$hospital) {
            return redirect('/hospital')->with('error', 'Hospital not found.');
        }

        $doctors = $hospital->doctors;

        return view('doctors', compact('hospital', 'doctors'));
    }

    public function consultation($id)
    {
        $hospital = Hospital::find($id);

        return view('consultation', compact('hospital'));
    }

}
