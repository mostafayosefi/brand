<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyListService extends Model
{

    protected $fillable = [
        'show', 'company_request_id', 'company_service_id',
    ];


    public function company_request(){
        return $this->belongsTo(CompanyRequest::class);
    }


    public function company_service(){
        return $this->belongsTo(CompanyService::class);
    }




}
