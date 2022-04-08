<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicebrand extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'price' ,
    ];



    public function listservicebrands(){
        return $this->hasMany(Listservicebrand::class , 'servicebrand_id');
    }


}
