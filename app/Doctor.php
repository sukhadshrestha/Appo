<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DepartmentId;
class Doctor extends Model
{
    protected $fillable = [
        'name','departmentId','doctorId','doctorUsername','password',
    ];

    protected $hidden=[
        'doctorId','password',
    ];

    public function department()
    {
    	return $this->hasOne(Department::class,'departmentId','departmentId');
    }
}
