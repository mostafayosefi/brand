<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RequestbrandRequest extends FormRequest
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
            'name' => 'required|unique:users|min:8',
            //… more validation
        ];

    }


    public function update()
    {
        return [
            //
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
