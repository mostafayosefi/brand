<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProperty extends Model
{


    protected $fillable = [
        'name', 'company_plan_id' ,
    ];



    public function company_plan()
    {
        return $this->belongsTo(CompanyPlan::class);
    }




}
