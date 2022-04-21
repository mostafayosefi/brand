<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{

    protected $fillable = [
        'name', 'short', 'text',
    ];


    public function company_requests(){
        return $this->hasMany(CompanyRequest::class , 'company_type_id');
    }


}
