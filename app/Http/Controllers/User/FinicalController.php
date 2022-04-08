<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FinicalController extends Controller
{



    public function index(){
        return view('custome.finical.index' );
    }



}
