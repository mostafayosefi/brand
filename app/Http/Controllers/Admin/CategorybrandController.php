<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Categorybrand;
use App\Http\Controllers\Controller;
use App\Models\Subcategorybrand;
use RealRashid\SweetAlert\Facades\Alert;

class CategorybrandController extends Controller
{


    public function index(){
        $categorybrands= Categorybrand::all();
        return view('admin.categorybrand.index' , compact(['categorybrands'  ]));
    }


    public function create(){
        return view('admin.categorybrand.create' );
    }

    public function edit($id){
        $categorybrand=Categorybrand::find($id);
        return view('admin.categorybrand.edit' , compact(['categorybrand'  ]));
    }


    public function show($id){
        $categorybrand=Categorybrand::find($id);
        return view('admin.categorybrand.show' , compact(['categorybrand'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $data = $request->all();
        $data['url']=$request->name;

       Categorybrand::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.categorybrand.index');
    }





    public function substore(Request $request, $id , Categorybrand $categorybrand){

        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $data = $request->all();
        $data['url']=$request->name;
       Subcategorybrand::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.categorybrand.show',$id);


    }


    public function update(Request $request, $id , Categorybrand $categorybrand){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $categorybrand=Categorybrand::find($id);
        $data = $request->all();
        $categorybrand->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Categorybrand::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'categorybrands');
        return back();
    }




    public function editsubcategory($id)
    {
        $subcategorybrand=Subcategorybrand::find($id);
        return view('admin.categorybrand.editsub' , compact(['subcategorybrand'  ]));
    }




    public function updatesubcategory(Request $request, $id , Subcategorybrand $subcategorybrand){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $subcategorybrand=Subcategorybrand::find($id);
        $data = $request->all();
        $subcategorybrand->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function subdestroy($id , Request $request){
        Subcategorybrand::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }



    public function substatus(Request $request , $id){
        $status=Change_status($id,'subcategorybrands');
        return back();
    }



}
