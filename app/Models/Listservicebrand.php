<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listservicebrand extends Model
{

    protected $fillable = [
        'show', 'requestbrand_id' ,'servicebrand_id' ,
    ];



    public function requestbrand(){
        return $this->belongsTo(Requestbrand::class);
    }



    public function servicebrand(){
        return $this->belongsTo(Servicebrand::class);
    }




}
