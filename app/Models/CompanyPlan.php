<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPlan extends Model
{

    protected $fillable = [
        'name', 'short', 'text', 'price', 'image',
    ];

    public function company_properties(){
        return $this->hasMany(CompanyProperty::class , 'company_plan_id');
    }


    public function company_requests(){
        return $this->hasMany(CompanyRequest::class , 'company_plan_id');
    }





}
