<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\User;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {

        return
            [
                'fullName'=>'required|string',
                'email'=>'required|email|unique:users',
                'number'=>'required|digits:10',
                'department'=>'required|in:1,2,3',
                // 'addinformation'=>'',

            ];
    }
}