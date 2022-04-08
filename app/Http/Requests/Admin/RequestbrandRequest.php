<?php

namespace App\Http\Requests\Admin;

use App\Rules\ValidateRule;
use Illuminate\Foundation\Http\FormRequest;

class RequestbrandRequest extends FormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
     return ['name' => 'required']
     +
     ($this->isMethod('POST') ? $this->store() : $this->status());

    }



    public function store()
    {

        return [
            'user_id' => 'required',
            'name' => 'required|unique:users|min:8',
            'categorybrand_id' => 'required',
            'subcategorybrand_id' => 'required',
            'email' => 'required',
            'tellir' => 'required',
            'codepir' => 'required',
            'adresir' => 'required',
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


    public function status()
    {
        return [
            
            'price' => ['required',new ValidateRule('validate_rep_price')] ,
        ];
    }








}
