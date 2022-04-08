<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{


    protected $fillable = [
        'price',
        'flag',
        'status',
        'user_id',
        'order_id',
    ];




    public function user()
    {
        return $this->belongsTo(User::class );
    }


    public function order()
    {
        return $this->belongsTo(Order::class);
    }


}
