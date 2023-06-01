<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|digits:10|numeric',
            'address' => 'required',
            'doctor_id' => 'required',
            'appointment_time' => 'required',
            'gender' => 'required',
            'description' => 'nullable|max:300',
            'age' => 'required|integer'
        ];
    }
}
