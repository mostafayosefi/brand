<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Domain extends Model
{


    protected $fillable = [
        'domain', 'price', 'status', 'riyal', 'user_id',
        'dns1' , 'dns2' , 'dns3' , 'dns4' ,'private' ,'renew' ,'years' ,
        'starttime' ,'endtime' ,
    ];


    public function user(){
        return $this->belongsTo(User::class  , 'user_id' , 'id');
    }



    public function nameserver(){
        return $this->hasOne(Nameserver::class , 'id');

    }


    public function order()
    {
        return $this->hasOne(Order::class);
    }



    public function renew()
    {
        return $this->hasOne(Renew::class , 'id' );
    }
 
}
