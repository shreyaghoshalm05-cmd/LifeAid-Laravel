<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospitals';
    public $timestamps = false;

    protected $fillable = [
        'hospital_name',
        'address',
        'phone',
        'email',
        'category',
        'beds_available',
        'image',
        'map_link',
        'services'
    ];

    /**
     * Relationship:
     * A hospital can have many doctors.
     * Links to doctors.hospital_id
     */
    public function doctors()
    {
        return $this->hasMany(\App\Models\Doctor::class, 'hospital_id');
    }
}
