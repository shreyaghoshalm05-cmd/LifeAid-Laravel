<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    // Table name - only set if your table name is not "doctors"
    protected $table = 'doctors';

    // Mass-assignable fields
    protected $fillable = [
        'hospital_id',
        'specialization',
        'name',
        'title',
        'email',
        'phone',
        'photo',
        'fee',
        'bio',
        'available_days' // JSON stored as TEXT in DB
    ];

    // Cast available_days to array automatically when reading
    protected $casts = [
        'available_days' => 'array',
        'fee' => 'decimal:2',
    ];

    // Relationships
    public function hospital(): BelongsTo
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(\App\Models\Appointment::class, 'doctor_id');
    }

    // Helper: returns human-friendly specialization
    public function getSpecializationLabelAttribute(): string
    {
        return $this->specialization ?? 'General';
    }

    // Helper: returns photo or placeholder
    public function getPhotoUrlAttribute(): string
    {
        return $this->photo ?: 'https://via.placeholder.com/800x600?text=Doctor';
    }
}
