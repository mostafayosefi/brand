<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{

    public function setting(){
        return $this->belongsTo(Setting::class  , 'setting_id' , 'id');
    }
}
