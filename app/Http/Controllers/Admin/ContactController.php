<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Service\MyContactController;

class ContactController extends Controller
{


    public function index(){
        $contacts= Contact::all();
        return view('admin.contact.index' , compact(['contacts'  ]));
    }

    public function show(Contact  $contact){
        return view('admin.contact.show' , compact(['contact'  ]));
    }




    public function store(Request $request)
    {
        $rulle=rulecontact($request);
        $data = $request->all(); 
        $data['operator']= 'contactAdd';
       $tasks_controller = new MyContactController('web');
       return  $tasks_controller->ContactAdd(  $data );
       Contact::create($data);
       Alert::success('با موفقیت ثبت شد', 'اکانت جدید با موفقیت ثبت شد');
       return back();
    }



}
