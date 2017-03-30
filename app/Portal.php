<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portal extends Model
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
    protected $table = 'portal';

    protected $fillable = [
        'approveRequest', 'sendRequest', 'doctorId', 'patientId', 'disease', 'medicines', 'prescription',
    ];
}
