<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validerequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'password'=>'required',
            'age'=>'required',
            'sexe'=>'required',
        ];
    }
}
