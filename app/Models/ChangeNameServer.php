<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeNameServer extends Model
{

    protected $fillable = [
        'ns1',   'ns2',  'ns3',  'ns4', 'status', 'domain_id',   'user_id' ,
    ];



    public function domain()
    {
        return $this->belongsTo(Domain::class );
    }


    public function user()
    {
        return $this->belongsTo(User::class );
    }





}
