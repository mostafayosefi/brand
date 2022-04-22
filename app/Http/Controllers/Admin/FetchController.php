<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Domain;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyRequest;
use App\Models\Renew;
use App\Models\Requestbrand;
use App\Models\Subcategorybrand;
use App\Models\Transfer;

class FetchController extends Controller
{
    public function font($value){
        return view('admin.fetch.font' , compact(['value'  ]));
    }

    public function timeexpire($id , $oper , $value){
        if($id=='renew'){ $order=''; }else{ $order=Domain::find($id); }

        return view('custome.fetch.expire_time' , compact(['value' , 'order' , 'oper'  ]));
    }


    public function private_domain($id , $value){
         $order=Domain::find($id);
        return view('custome.fetch.private_domain' , compact(['value' , 'order'    ]));
    }



    public function payment($oper , $id , $value ){
        if($oper=='order'){
            $order=Domain::find($id);
        }
        if($oper=='renew'){
            $order=Renew::find($id);
        }
        if($oper=='transfer'){
            $order=Transfer::find($id);
        }
        if($oper=='requestbrand'){
            $order=Requestbrand::find($id);
        }
        if($oper=='company_request'){
            $order=CompanyRequest::find($id);
        }


        return view('custome.fetch.payment' , compact(['value' , 'order'  , 'oper'  ]));
    }

    public function contact( $id , $value ){
        $order=Domain::find($id);
        $contact=Contact::where([ ['id' , $value] ])->first();
        return view('custome.fetch.contact' , compact(['value' , 'order' , 'contact' ]));
    }


    public function renew($id , $oper , $value){
        $renew=Renew::find($id);
        return view('custome.fetch.renew' , compact(['value' , 'renew' , 'oper'  ]));
    }


    public function requestbrand($id ,  $value){
        $requestbrand=Requestbrand::find($id);
        $subcategorybrands=Subcategorybrand::where([ ['categorybrand_id' ,$value], ])->get();
        return view('custome.fetch.requestbrand' , compact(['value' , 'id' , 'requestbrand' , 'subcategorybrands'  ]));
    }

    public function subcategorybrand($id ,  $value){
        $requestbrand=Requestbrand::find($id);
        $subcategorybrand=Subcategorybrand::find($value);
        return view('custome.fetch.subcategorybrand' , compact(['value' , 'id' , 'requestbrand' , 'subcategorybrand'  ]));
    }





}
