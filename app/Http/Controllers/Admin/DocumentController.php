<?php

namespace App\Http\Controllers\Admin;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class DocumentController extends Controller
{


    public function index(){
        $documents= Document::all();
        return view('admin.document.index' , compact(['documents'  ]));
    }


    public function create(){
        return view('admin.document.create' );
    }

    public function edit($id){
        $document =Document::find($id);
        return view('admin.document.edit' , compact(['document'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'documentname' => 'required',
        ]);
        $data = $request->all();
       Document::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.content.document.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Document $document ){
        $request->validate([
            'documentname' => 'required',
         ]);
        $document =Document::find($id);
        $data = $request->all(); 
        $document ->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Document::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'documents');
        return back();
    }




}
