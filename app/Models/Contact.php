<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{



    protected $fillable = [
        'firstname',  'lastname', 'adress',   'state',  'city', 'zip', 'country',
        'email', 'phone', 'nikname', 'company', 'adres2', 'nexus', 'purpose',
        'user_id','contact_id','default',
    ];



    public function getFullNameAttribute() {
    return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }



    public function orders(){
        return $this->hasMany(Order::class , 'id');
    }



    public function user()
    {
        return $this->belongsTo(User::class );
    }





}
