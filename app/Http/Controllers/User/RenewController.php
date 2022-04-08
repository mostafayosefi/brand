<?php

namespace App\Http\Controllers\User;

use App\Models\Renew;
use App\Models\Domain;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\RenewRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Service\RegisterDomainController;

class RenewController extends Controller
{


    public function index(){
        $data['user_id']  = Auth::guard('user')->user()->id;
        $renews=Renew::where([ ['user_id' , $data['user_id']], ])->get();
        return view('custome.domain.renew.index' , compact(['renews'  ]));
    }


    public function create(){
        $domains= Domain::all();
        return view('custome.domain.renew.create', compact(['domains'  ] ));
    }

    public function edit($id){
    }


    public function store(Request $request)
    {
        $request->validate([
            'domain_id' => 'required',
        ]);
        $data = $request->all();
        $domain=Domain::find($data['domain_id']);
        $renew=Renew::where([ ['domain_id' , $data['domain_id']], ])->first();

        $data['user_id']  = $domain->user_id;


        $data['status']='rezerve';
        $data['years']='1';


$data['renewendtime']=renew_time($domain->endtime ,$data['years'] );

        if($renew){ return redirect()->route('user.domain.renew.show' , $renew);  }

        $extension=find_extension($domain->domain);
        $price=riyal_extension($extension);
        $price=$price * $data['years'];
        $data['price']=$price;




       $renew=Renew::create($data);


       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('user.domain.renew.show' ,$renew );
    }

    public function show($id)
    {
        $renew=Renew::find($id);
        return view('custome.domain.renew.show' , compact(['renew'  ]));
    }



    public function update(RenewRequest $request, $id , Renew $renew){

        $renew=Renew::find($id);
        $data = $request->all();



        $data['order_id']=$renew->domain->order->id;
        $payment = Payment::updateOrCreate([
            'renew_id' => $id
        ], [
            'type' => $data['type'],
            'textUser' => $data['textUser'],
            'order_id' => $data['order_id'],
        ]);
        $data['status']='waiting';
$extension=find_extension($renew->domain->domain);
$price=riyal_extension($extension);
$data['price']=$price * $data['years'];
$data['renewendtime']=renew_time($renew->domain->endtime,$data['years']);
      $data['domain_id']=$renew->domain->id;
      $data['oper']='renew';
      $data['user_id']=$renew->domain->user_id;
      $exito=method_payment($data);
      $data['status']=$exito['status'];
      $activedes=$exito['active'];
      $arrtimeline['order_id']=$data['order_id'];
      $arrtimeline['renew_id']=$id;

      store_timeline('user' , 'renew' , $data['textUser'] , $data['type'] , $renew->domain->user_id , $arrtimeline ,  $activedes);

      if($exito['status']=='active'){

        // $data['operator']= 'registerDomain';
        // $tasks_controller = new RegisterDomainController('web');
        // return  $tasks_controller->registerDomain(  $data );

      }

      $renew->update($data);
      return back();









    }


    public function destroy($id , Request $request){

        $renew=Renew::where([ ['id' , $id ]   ,  ['status' , '<>' ,'active' ] ,  ])->first();
        if($renew){
            $delete=Renew::where([ ['id' , $id ]  ,  ['status' , '<>' ,'active' ] ,  ])->delete();
            Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        }else{
            Alert::error('عملیات حذف متاسفانه بامشکل مواجه شد!', 'توجه نمایید فقط سفارشات تایید نشده قابل حذف می باشند');
        }
        return back();



    }

    public function status(Request $request , $id){
        $status=Change_status($id,'renews');
        return back();
    }




}
