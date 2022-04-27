<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRequest extends Model
{


    protected $fillable = [
        'name', 'email' , 'tellir', 'adresir', 'codepir',  'birthday',
        'reach','before','status', 'user_id', 'company_plan_id', 'company_type_id',
         'fromshow' , 'toshow' ,'price' ,'random' ,
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }



    public function company_list_services(){
        return $this->hasMany(CompanyListService::class , 'company_request_id');
    }

    public function company_files(){
        return $this->hasMany(CompanyFile::class, 'company_request_id' );
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'company_request_id');
    }

    public function company_plan(){
        return $this->belongsTo(CompanyPlan::class);
    }

    public function company_type(){
        return $this->belongsTo(CompanyType::class);
    }



    public function discriptionorders()
    {
        return $this->hasMany(Discriptionorder::class , 'company_request_id' );
    }



    public function company_registers()
    {
        return $this->hasMany(CompanyRegister::class , 'company_request_id' );
    }





}
