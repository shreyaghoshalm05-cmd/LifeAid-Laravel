<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class BloodController extends Controller
{
    public function index()
    {
        $donors = Donor::orderByRaw("FIELD(status, 'available','busy','not_available')")->get();

        return view('blood', compact('donors'));
    }

    public function requestBlood($id)
    {
        $donor = Donor::find($id);

        if (!$donor) {
            return redirect('/blood')->with('error', 'Donor not found');
        }

        // Later: send SMS or email to donor

        return redirect('/blood')->with('success', 'Blood request sent to ' . $donor->name);
    }
}
