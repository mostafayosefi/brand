<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function mycharge(Request $request){
        $user_id  = auth('api')->user()->id;
        $charge=Mywallet($user_id,'mycharge');
        return response()->json(
            ['message' => 'success' ,
            'currency' => 'riyal' ,
            'charge' => $charge ],  200);

    }

    public function test(){


    }

}
