<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Auth;
use App\Doctor;


class DoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'name'=>'required|string',
            'departmentId'=>'required',
            'doctorId'=>'required|string|unique:doctors',
            'doctorUsername'=>'required|string|unique:doctors',
            'password'=>'required',
        ];
    }
}
