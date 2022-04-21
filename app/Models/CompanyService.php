<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{

    protected $fillable = [
        'name', 'price' ,
    ];


    public function company_list_services(){
        return $this->hasMany(CompanyListService::class , 'company_service_id');
    }



}
