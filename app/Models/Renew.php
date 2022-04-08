<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renew extends Model
{


    protected $fillable = [
        'renewendtime',   'price', 'status', 'domain_id', 'years' , 'user_id' ,
    ];


    public function domain()
    {
        return $this->belongsTo(Domain::class );
    }



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
