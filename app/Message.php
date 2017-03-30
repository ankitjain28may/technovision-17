<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
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
    protected $table = 'messages';

    protected $fillable = [
        'doctorId', 'patientId', 'messages',
    ];
}
