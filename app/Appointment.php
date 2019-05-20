<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
     protected $fillable = [
        'fullName', 'email', 'number','department',
    ];

    //  protected $hidden = [
    //     'userId',
    // ];
}
