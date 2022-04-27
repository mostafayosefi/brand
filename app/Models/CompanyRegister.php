<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRegister extends Model
{


    protected $fillable = [
        'number', 'authcode' , 'office', 'dateconfermation', 'company_request_id',
    ];


    public function company_request()
    {
        return $this->belongsTo(CompanyRequest::class);
    }


    public function company_register_files(){
        return $this->hasMany(CompanyRegisterFile::class, 'company_register_id' );
    }



}
