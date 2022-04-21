<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discriptionorder extends Model
{

    protected $fillable = [
        'order_id',  'renew_id', 'user_id', 'by' , 'operator' , 'text' , 'flag' ,'active' , 'transfer_id' ,
        'requestbrand_id' , 'company_request_id' ,
    ];

    public function user() {
        return $this->belongsTo(User::class );
    }


    public function order() {
        return $this->belongsTo(Order::class );
    }
    public function renew() {
        return $this->belongsTo(Renew::class );
    }

    public function transfer() {
        return $this->belongsTo(Transfer::class );
    }

    public function requestbrand() {
        return $this->belongsTo(Requestbrand::class );
    }


    public function company_request()
    {
        return $this->belongsTo(CompanyRequest::class);
    }


}
