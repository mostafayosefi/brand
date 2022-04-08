<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categoryapi;
use Illuminate\Http\Request;
use App\Models\Textwebservice;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ContentController extends Controller
{
    public function index(){
   $textwebservices= Textwebservice::all();
   return view('admin.content.index' , compact(['textwebservices'  ]));

   }




   public function create(){
    $categoryapis= Categoryapi::all();
    return view('admin.content.create' , compact([ 'categoryapis' ]) );
}

public function store(Request $request)
{


    $request->validate([
        'title' => 'required',
        'url' => 'required',
        'link'  => 'required',
        'text'  => 'required',
    ]);

    $data = $request->all();

   Textwebservice::create($data);
   Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
    return redirect()->route('admin.content.webservice.index');
}


public function destroy($id , Request $request){
    Textwebservice::destroy($request->id);
    Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
    return back();
}



   public function edit($id){
    $categoryapis= Categoryapi::all();
  $textwebservice= Textwebservice::find($id);
  return view('admin.content.edit' , compact(['textwebservice'  , 'categoryapis'  ]));

  }

  public function update(Request $request , $id){

    $request->validate([
        'title' => 'required',
        'url' => 'required',
        'link'  => 'required',
        'text'  => 'required',
    ]);

$textwebservice= Textwebservice::find($id);
$textwebservice->update($request->all());
Alert::info('با موفقیت ویرایش شد', 'اطلاعات با ویرایش  شد');
return back();

    }




}
