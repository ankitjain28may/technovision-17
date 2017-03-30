<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
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
    protected $table = 'patientsProfile';

    protected $fillable = [
        'age', 'gender', 'contact', 'patientId', 'disease', 'symptoms', 'city',
    ];
}
