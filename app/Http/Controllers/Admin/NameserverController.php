<?php

namespace App\Http\Controllers\Admin;

use App\Models\Nameserver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Service\MyNameserverController;

class NameserverController extends Controller
{


    public function index(){

        $nameservers= Nameserver::all();
        return view('admin.nameserver.index' , compact(['nameservers'  ]));
    }

    public function show($id)
    {
        $nameserver= Nameserver::find($id);
        return view('admin.nameserver.show' , compact(['nameserver'  ]));

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



}
