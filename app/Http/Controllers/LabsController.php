<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabsController extends Controller
{
    public function index()
{
    $labs = [
        [
            'name' => 'Apollo Diagnostics',
            'location' => 'Salt Lake, Kolkata'
        ],
        [
            'name' => 'Dr Lal PathLabs',
            'location' => 'Park Street, Kolkata'
        ],
        [
            'name' => 'Metropolis Lab',
            'location' => 'Garia, Kolkata'
        ]
    ];

    return view('labs', compact('labs'));
}
}