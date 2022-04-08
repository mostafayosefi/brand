<?php

namespace App\Http\Controllers\User;

use App\Models\Domain;
use App\Models\Setting;
use App\Rules\Uniqemail;
use App\Models\Nameserver;
use App\Rules\ValidateRule;
use Illuminate\Http\Request;
use App\Rules\NameserverRule;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\MyNameserverController;
use App\Http\Controllers\Service\MyNameserviceController;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class NameserverController extends Controller
{

    public function index(){

        $user_id=Auth::guard('user')->user()->id;
        $nameservers= Nameserver::where([ ['user_id' , '=' ,$user_id ] , ]   )->get();
        return view('custome.nameserver.index' , compact(['nameservers'  ]));
    }


    public function create(){
        $domains= Domain::all();
        return view('custome.nameserver.create', compact(['domains'  ] ));

     }

    public function edit($id){
    }


    public function store(Request $request)
    {
         $data = $request->all();
         $data['user_id']=Auth::guard('user')->user()->id;
 
        $nameserver=query_table_nameserver($data);

       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('user.nameserver.show', $nameserver);
    }

    public function show($id)
    {

        $user_id=Auth::guard('user')->user()->id;
        $nameserver= Nameserver::where([ ['user_id' , '=' ,$user_id ] , ['id' , '=' ,$id ] , ]   )->first();
        return view('custome.nameserver.show' , compact(['nameserver'  ]));

    }



    public function update(Request $request, $id  ){

        $data=rule_change_nameserver($request);
        $data = $request->all();

        $nameserver=query_table_nameserver($data);


        $nameserver->update($data);

        $data['operator']= 'changeNameServers';
        $tasks_controller = new MyNameserverController('web');
        return  $tasks_controller->changeNameServers(  $data );
    }


    public function destroy($id , Request $request){


        $nameserver=Nameserver::where([ ['id' , $id ]   ,  ['status' , '<>' ,'active' ] ,  ])->first();
        if($nameserver){
            $delete_domain=Nameserver::where([ ['id' , $id ]  ,  ['status' , '<>' ,'active' ] ,  ])->delete();
            Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        }else{
            Alert::error('عملیات حذف متاسفانه بامشکل مواجه شد!', 'توجه نمایید فقط سفارشات تایید نشده قابل حذف می باشند');
        }
        return back();


    }

    public function status(Request $request , $id){
        $status=Change_status($id,'namesevers');
        return back();
    }




}
