<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filebrand extends Model
{



    protected $fillable = [
        'name', 'price', 'requestbrand_id' ,
    ];


    public function requestbrand(){
        return $this->belongsTo(Requestbrand::class);
    }





}
