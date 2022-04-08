<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\Domain;
use App\Models\Wallet;
use App\Models\Contact;
use App\Models\Payment;
use App\Models\Countrie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Service\DomainController;
use App\Http\Controllers\Service\RegisterDomainController;

class BasketController extends Controller
{

    public function index()
    {
        $user_id = Auth::guard('user')->user()->id;
        $orders= Domain::where([
            ['user_id' , $user_id ] ,
        ])->orderby('id','desc')->get();
         $user_id=Auth::guard('user')->user()->id;
         $contacts= Contact::where('user_id' , $user_id)->orderby('id' , 'desc')->get()->all();
        return view('custome.basket.index' , compact(['orders' , 'contacts'   ]));    }

    public function show($id)
    {
        $user_id = Auth::guard('user')->user()->id;
        $order= Domain::where([
            ['user_id' , $user_id ] ,
            ['id' , $id ] ,
        ])->orderby('id','desc')->first();
         $countries= Countrie::all();
         $user_id=Auth::guard('user')->user()->id;
         $contacts= Contact::where('user_id' , $user_id)->orderby('id' , 'desc')->get()->all();



        return view('custome.basket.show' , compact(['order' , 'countries' , 'contacts'   ]));    }



        public function store(Request $request , $id , Domain $domain){

        $data=rule_buy_domain($request);
            $domain=Domain::find($id);
            $data = $request->all();
            // dd($request->all());
        $data['order_id']=Null;
        $data['renew_id']=Null;

            $data['user_id']  = Auth::guard('user')->user()->id;
            $data['domain_id']  = $id;
            $data['contact_id_namesilo']=Contact::find($data['contact_id'])->contact_id;


           $order = Order::updateOrCreate([
            'domain_id' => $domain->id
        ], [
            'user_id' => $data['user_id'],
            'contact_id' => $data['contact_id'],
            'private' => $data['private'],
        ]);
        $payment = Payment::updateOrCreate([
            'order_id' => $order->id
        ], [
            'type' => $data['type'],
            'textUser' => $data['textUser'],
        ]);
        $data['order_id']=$order->id;
        $data['status']='waiting';
$extension=find_extension($domain->domain);
$price=riyal_extension($extension);
$data['price']=  finaly_price($data['private']  ,$data['years'] , $price);
$x=0; $data['starttime']=now_time($x);
      $data['endtime']=now_time($data['years']);
      $data['oper']='buy_domain';
      $exito=method_payment($data);
      $data['status']=$exito['status'];
      $activedes=$exito['active'];

      store_timeline('user' , 'order' , $data['textUser'] , $data['type'] , $order->user_id , $data ,  $activedes);

      if($exito['status']=='active'){

        // $data['operator']= 'registerDomain';
        // $tasks_controller = new RegisterDomainController('web');
        // return  $tasks_controller->registerDomain(  $data );

      }

      $domain->update($data);
      return back();



        }






        public function destroy($id , Request $request){
            $user_id = Auth::guard('user')->user()->id;
            $domain=Domain::where([ ['id' , $id ] ,  ['user_id' , $user_id ] ,  ['status' , '<>' ,'active' ] ,  ])->first();
            if($domain){
                $delete_domain=Domain::where([ ['id' , $id ] ,  ['user_id' , $user_id ] ,  ['status' , '<>' ,'active' ] ,  ])->delete();
                Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
            }else{
                Alert::error('عملیات حذف متاسفانه بامشکل مواجه شد!', 'توجه نمایید فقط سفارشات پرداخت نشده قابل حذف می باشند');
            }
            return back();
        }






}
