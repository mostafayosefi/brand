<?php

namespace App\Http\Controllers\Admin;

use App\Models\Document;
use App\Models\Categoryapi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryapiController extends Controller
{


    public function index(){
        $categoryapis= Categoryapi::all();
        return view('admin.categoryapi.index' , compact(['categoryapis'  ]));
    }


    public function create(){
        $documents= Document::all();
        return view('admin.categoryapi.create' , compact([ 'documents' ]) );
    }

    public function edit($id){
        $categoryapi=Categoryapi::find($id);
        $documents= Document::all();

        return view('admin.categoryapi.edit' , compact(['categoryapi' , 'documents' ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);
        $data = $request->all();
        $data['image']  =  uploadFile($request->file('image'),'images/categoryapis','');

       Categoryapi::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.content.categoryapi.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Categoryapi $categoryapi){
        $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);
        $categoryapi=Categoryapi::find($id);
        $data = $request->all();
        $data['image']= $categoryapi->image;
        $data['image']  =  uploadFile($request->file('image'),'images/categoryapis',$categoryapi->image);
        $categoryapi->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Categoryapi::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'categoryapis');
        return back();
    }




}
