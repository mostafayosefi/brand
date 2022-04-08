<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\Domain;
use App\Models\Contact;
use App\Models\Countrie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{


    public function index(){
        $user_id = Auth::guard('user')->user()->id;


        $orders= Domain::where([
            ['user_id' , $user_id ] ,
            ['status' , '=' ,'active' ] ,
        ])->orderby('id','desc')->get();




        // foreach($orders as $admin){

        //     $admin = $admin->domain;
        //     dd($admin->domain);
        // }

        return view('custome.order.index' , compact(['orders'  ]));
    }



    public function show($id)
    {
        $user_id = Auth::guard('user')->user()->id;
        $order= Domain::where([
            ['user_id' , $user_id ] ,
            ['id' , $id ] ,
            ['status' , '=' ,'active' ] ,
        ])->orderby('id','desc')->first();
         $countries= Countrie::all();
         $contacts= Contact::where('user_id' , $user_id)->orderby('id' , 'desc')->get()->all();
        return view('custome.order.show' , compact(['order' , 'countries' , 'contacts'   ]));    }



    public function payment(Request $request , $id , Domain $domain){
        $domain=Domain::find($id);
        $data = $request->all();
        $data['user_id']  = Auth::guard('user')->user()->id;
        dd($data);


        $order = Order::updateOrCreate([
            'title' => 'Post 3'
        ], [
            'description' => 'Description for post 3.',
            'body' => 'body for post 3 - updated.'
        ]);

        $payment = Payment::updateOrCreate([
            'title' => 'Post 3'
        ], [
            'description' => 'Description for post 3.',
            'body' => 'body for post 3 - updated.'
        ]);



        $payment = Payment::create($data);

    }




    public function update(Request $request, $id , Value $value){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $value=Value::find($id);
        $data = $request->all();
        $data['image']= $value->image;
        $data['image']  =  uploadFile($request->file('image'),'images/values',$value->image);
        $value->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        $user_id = Auth::guard('user')->user()->id;
        $delete=Domain::where([ ['id' , $id ] ,  ['user_id' , $user_id ] ,  ['status' , 'rezerve' ] ,  ])->delete();
        // Domain::destroy($id);
        if($delete){
            Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        }else{
            Alert::error('عملیات حذف متاسفانه بامشکل مواجه شد!', 'توجه نمایید فقط سفارشات پرداخت نشده قابل حذف می باشند');
        }
        return redirect()->route('user.order.index');
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'values');
        return back();
    }




}
