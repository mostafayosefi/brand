<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webservice extends Model
{


    protected $fillable = [
        'name',
        'code',
        'link',
        'status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class );
    }

    public function checkdomains()
    {
        return $this->hasMany(Checkdomain::class, 'webservice_id');
    }

}
