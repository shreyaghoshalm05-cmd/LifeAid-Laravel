<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'donors';

    protected $fillable = [
        'name',
        'blood_group',
        'phone',
        'location',
        'status'
    ];

    public $timestamps = false;
}
