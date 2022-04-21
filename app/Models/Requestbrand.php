<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestbrand extends Model
{


    protected $fillable = [

        'name', 'email' , 'tellir', 'adresir', 'codepir',
        'tellin', 'adresin', 'codepin', 'birthday',
        'reach','before','status', 'user_id', 'subcategorybrand_id',
         'fromshow' , 'toshow' ,'price' ,'random' ,
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function subcategorybrand(){
        return $this->belongsTo(Subcategorybrand::class);
    }


    public function listservicebrands(){
        return $this->hasMany(Listservicebrand::class , 'requestbrand_id');
    }

    public function filebrands(){
        return $this->hasMany(Filebrand::class, 'requestbrand_id' );
    }


    public function payment()
    {
        return $this->hasOne(Payment::class, 'requestbrand_id');
    }


    public function discriptionorders()
    {
        return $this->hasMany(Discriptionorder::class , 'requestbrand_id' );
    }



}
