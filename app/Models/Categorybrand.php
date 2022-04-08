<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorybrand extends Model
{


    protected $fillable = [
        'name', 'text' , 'url', 'status',
    ];

    public function subcategorybrands(){
        return $this->hasMany(Subcategorybrand::class , 'categorybrand_id');
    }



}
