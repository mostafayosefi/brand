<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestbrandListSubcategory extends Model
{

    protected $fillable = [

        'show', 'requestbrand_id', 'subcategorybrand_id',
    ];


    public function requestbrand(){
        return $this->belongsTo(Requestbrand::class);
    }


    public function subcategorybrand(){
        return $this->belongsTo(Subcategorybrand::class);
    }




}
