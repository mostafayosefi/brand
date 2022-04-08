

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryapi extends Model
{

    protected $fillable = [
        'name',
        'url',
        'document_id',
    ];

    public function textwebservices(){
        return $this->hasMany(Textwebservice::class , 'categoryapi_id');
    }


    public function document(){
        return $this->belongsTo(Document::class);
    }

}
