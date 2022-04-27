<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRegisterFile extends Model
{

    protected $fillable = [
        'type',   'name',   'company_register_id' ,
    ];


    public function company_register(){
        return $this->belongsTo(CompanyRegister::class);
    }

}
