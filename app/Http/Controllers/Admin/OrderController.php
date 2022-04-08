<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Domain;
use App\Models\Contact;
use App\Models\Countrie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Discriptionorder;
use phpDocumentor\Reflection\Types\Null_;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{



    public function index(){
        $orders= Domain::all();

        $orders= Domain::where([
            ['status' , '<>' ,'activee' ] ,
        ])->orderby('id','desc')->get();

        return view('admin.order.index' , compact(['orders'  ]));
    }

    public function show($id){


         $order= Domain::where([
            ['id' , $id ] ,
        ])->orderby('id','desc')->first();
         $countries= Countrie::all();
         $contacts= $order->user->contacts->all();
         $contacts= Contact::where('user_id' , $order->user->id)->orderby('id' , 'desc')->get()->all();


        return view('admin.order.show' , compact(['order' , 'countries' , 'contacts'  ]));
    }



    public function status( $id , $status , Request $request){

        $domain=Domain::find($id);


        $data = $request->all();


        $data['order_id']=Null;
        $data['renew_id']=Null;
        if($domain->order){

            $data['order_id']=$domain->order->id;
            $data['renew_id']='0';
         }



        store_timeline('admin' , 'order' , $data['text'] , $status , $domain->user_id , $data  , 1);


if($status=='active'){
    if($domain->order){
        Alert::success('دامنه با موفقیت فعال شد', 'دامنه با موفقیت فعال شد');
        $domain->update(['status' =>$status]);
    }else{
        Alert::error('جهت فعالسازی دامنه اطلاعات وارد شده توسط کاربر باید تکمیل شده باشد        ', 'متاسفانه دامنه فعال نشد');
     }

    } elseif($status!='active'){

        Alert::error('دامنه فعال نشد         ', 'متاسفانه دامنه فعال نشد');
        $domain->update(['status' =>$status]);
    }



        return back();

    }




    public function destroy($id , Request $request){
        $domain=Domain::where([ ['id' , $id ]   ,  ['status' , '<>' ,'active' ] ,  ])->first();
        if($domain){
            $delete_domain=Domain::where([ ['id' , $id ]  ,  ['status' , '<>' ,'active' ] ,  ])->delete();
            Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        }else{
            Alert::error('عملیات حذف متاسفانه بامشکل مواجه شد!', 'توجه نمایید فقط سفارشات پرداخت نشده قابل حذف می باشند');
        }
        return back();
    }




}
