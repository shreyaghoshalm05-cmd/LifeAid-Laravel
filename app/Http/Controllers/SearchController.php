<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = strtolower(trim($request->q));

        /*
        |--------------------------------------------------------------------------
        | HOSPITAL SEARCH
        |--------------------------------------------------------------------------
        */
        if (
            str_contains($q, 'hospital') ||
            str_contains($q, 'apollo') ||
            str_contains($q, 'fortis') ||
            str_contains($q, 'amri')
        ) {
            return redirect()->route('hospitals.index', [
                'search' => $request->q
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | DOCTOR SEARCH
        |--------------------------------------------------------------------------
        */
        if (
            str_contains($q, 'doctor') ||
            str_contains($q, 'physician') ||
            str_contains($q, 'specialist')
        ) {
            return redirect()->route('doctors.index');
        }

        /*
        |--------------------------------------------------------------------------
        | BLOOD DONATION SEARCH ✅ (THIS WAS MISSING)
        |--------------------------------------------------------------------------
        */
        if (
            str_contains($q, 'blood') ||
            str_contains($q, 'donation') ||
            str_contains($q, 'donor')
        ) {
            return redirect('/blood');
        }

        /*
        |--------------------------------------------------------------------------
        | LABS & CLINICS SEARCH
        |--------------------------------------------------------------------------
        */
        if (
            str_contains($q, 'lab') ||
            str_contains($q, 'labs') ||
            str_contains($q, 'clinic') ||
            str_contains($q, 'test')
        ) {
            return redirect('/labs');
        }

        /*
        |--------------------------------------------------------------------------
        | PHARMACY / MEDICINE SEARCH
        |--------------------------------------------------------------------------
        */
        if (
            str_contains($q, 'pharmacy') ||
            str_contains($q, 'medicine') ||
            str_contains($q, 'drug')
        ) {
            return redirect('/pharmacy');
        }

        /*
        |--------------------------------------------------------------------------
        | FIRST AID SEARCH
        |--------------------------------------------------------------------------
        */
        if (
            str_contains($q, 'first aid') ||
            str_contains($q, 'injury') ||
            str_contains($q, 'wound')
        ) {
            return redirect('/firstaid');
        }

        /*
        |--------------------------------------------------------------------------
        | EMERGENCY SEARCH
        |--------------------------------------------------------------------------
        */
        if (
            str_contains($q, 'emergency') ||
            str_contains($q, 'ambulance') ||
            str_contains($q, 'police')
        ) {
            return redirect('/emergency');
        }

        /*
        |--------------------------------------------------------------------------
        | FALLBACK (NO MATCH FOUND)
        |--------------------------------------------------------------------------
        */
        return view('search.results', [
            'q' => $request->q
        ]);
    }
}
