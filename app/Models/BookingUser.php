<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class BookingUser extends Authenticatable
{
    use Notifiable;

    // IMPORTANT: points to the table you renamed in phpMyAdmin
    protected $table = 'booking_user';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // If you use casts for created_at / updated_at, keep them
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
