<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RenewRequest extends FormRequest
{


    public function authorize()
    {
        return true;
    }

    public function rules()
    {
     return ['years' => 'required']
     +
     ($this->isMethod('POST') ? $this->store() : $this->update());
    }



    public function store()
    {
     return [
     'email' => 'required|email|unique:users',
     'password' => 'required|confirmed|min:8',
     //… more validation

     ];
    }




    public function update()
    {
        return [
            'years' => 'required|numeric',
        ];
    }



    public function destroy()
    {
        return [
            //
        ];
    }




    public function view()
    {
        return [
            //
        ];
    }








}
