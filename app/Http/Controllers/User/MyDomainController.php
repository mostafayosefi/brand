<?php

namespace App\Http\Controllers\User;


use App\Models\User;
use GuzzleHttp\Psr7;
// use GuzzleHttp\Psr7\Request;

use App\Models\Domain;

use GuzzleHttp\Client;

use App\Models\Setting;
use App\Models\Webservice;
use App\Models\Checkdomain;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ContentDomain;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use GuzzleHttp\Exception\RequestException;
use App\Http\Controllers\Service\DomainController;
use App\Models\Order;
use App\Models\Payment;

class MyDomainController extends Controller
{

    public function __construct()
    {
     }


    public function index(){
        $user = Auth::guard('user')->user();
        return view('user.domain.index', compact(['user' ]));


    }

    public function CheckDomain($name='all'){

        $user = Auth::guard('user')->user();

        $contentdomains= ContentDomain::where('status' , 'active')->get();
        $query=Checkdomain::query()->where([
            ['webservice_id' , '=' ,Session::get('webservice_id')],
            ['domain' , '=' ,Session::get('domain')],
            ]);
            $result=$query->first();
            $resultdomain=$query->get();
        $checkdomains=Checkdomain::where([
            ['webservice_id' , '=' ,Session::get('webservice_id')],
            ['domain' , '<>' ,Session::get('domain')],
            ])->get();



            if(Route::currentRouteName() == 'user.domain.check.custome'){
                return view('custome.domain.search', compact(['user' , 'contentdomains' , 'result'  , 'checkdomains' ,'name'  ,'resultdomain' ]));

            }else{
                return view('user.domain.search', compact(['user' , 'contentdomains' , 'result'  , 'checkdomains' ,'name'  ,'resultdomain' ]));

            }

    }




    public function CheckDomainPost(Request $request){
  $data=all_request_domain($request);
  $tasks_controller = new DomainController('web');
  return  $tasks_controller->CheckAvailability(  $data );


    }




    public function BuyPost(Request $request , $id){

        $request->validate([
            'domain' => 'required',
        ]);

        $data = $request->all();
        $data['status']  =  'rezerve';
        $data['user_id']  = Auth::guard('user')->user()->id;
   $defaultcontact=ValidateContact($data['user_id']);
   
   $domain = Domain::where([  ['domain' ,$data['domain'] ], ])->first(); 

   if($domain){ 
    Alert::success('مشاهده اطلاعات دامنه ثبت شده      ', 'اطلاعات دامنه را می توانید مشاهده فرمایید ');
    }else{ 
    Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
    $domain = Domain::create($data);  }
 

return redirect()->route('user.domain.basket.show',$domain->id);

    }









}
