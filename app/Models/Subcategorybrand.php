<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorybrand extends Model
{

    protected $fillable = [
        'name', 'text' , 'url', 'status', 'categorybrand_id' ,
    ];


    public function categorybrand(){
        return $this->belongsTo(Categorybrand::class);
    }


    public function requestbrands(){
        return $this->hasMany(Requestbrand::class , 'subcategorybrand_id');
    }



}
