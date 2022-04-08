<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkdomain extends Model
{


    protected $fillable = [
        'domain', 
        'price',
        'riyal',
        'type', 
        'webservice_id',
    ];
 
    public function webservice()
    {
        return $this->belongsTo(Webservice::class );
    }

}
