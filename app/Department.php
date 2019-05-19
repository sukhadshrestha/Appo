<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;

class Department extends Model
{
    protected $fillable=[
        'departmentName','departmentId',
    ];

    public function doctor()
    {
    	return $this->hasMany(Doctor::class,'departmentId','departmentId');
    }
}
