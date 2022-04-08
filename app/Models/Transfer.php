<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{

    protected $fillable = [
        'domain',  'auth',   'price', 'status', 'renew', 'private' , 'user_id' ,
    ];


    
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }



    public function discriptionorders()
    {
        return $this->hasMany(Discriptionorder::class , 'renew_id' );
    }



    public function user()
    {
        return $this->belongsTo(User::class );
    }




}
