<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{


    protected $fillable = [
        'documentname',
    ];


    public function categoryapis(){
        return $this->hasMany(Categoryapi::class , 'document_id');
    }

}
