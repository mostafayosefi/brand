<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFile extends Model
{

    protected $fillable = [
        'name',   'company_request_id' ,
    ];


    public function company_request(){
        return $this->belongsTo(CompanyRequest::class);
    }


}
