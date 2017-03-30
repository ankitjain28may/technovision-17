<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorProfile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'doctorsProfile';

    protected $fillable = [
        'qualification', 'speciality', 'gender', 'contact', 'doctorId', 'experience', 'address', 'city', 'fees',
    ];
}
