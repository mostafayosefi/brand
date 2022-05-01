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


    public function requestbrand_list_subcategories(){
        return $this->hasMany(RequestbrandListSubcategory::class , 'subcategorybrand_id');
    }




}
