<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Appointmentlist extends Model
{
    protected $fillable = [
        'name' ,
        'phone',
        'email',
        'appointment_date',
        'department',
        'doctor',
        'message',

    ];
}
