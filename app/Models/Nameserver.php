<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nameserver extends Model
{

    protected $fillable = [
        'ns1',   'ns2',  'ns3',  'ns4', 'status', 'domain',   'user_id' ,  'code' ,  'detail' ,
    ];



    public function user()
    {
        return $this->belongsTo(User::class );
    }



}
