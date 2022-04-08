<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Textwebservice extends Model
{
     protected $fillable=[
         'title',
         'text',
         'url',
         'link',
         'categoryapi_id',
     ];

     public function categoryapi(){
         return $this->belongsTo(Categoryapi::class);
     }

}
