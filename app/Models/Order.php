<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    protected $fillable = [
        'domain_id', 'user_id', 'contact_id' ,
    ];


    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function contact(){
        return $this->belongsTo(Contact::class  , 'contact_id' , 'id');
    }



    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }




    public function discriptionorders()
    {
        return $this->hasMany(Discriptionorder::class , 'order_id' );
    }




}
