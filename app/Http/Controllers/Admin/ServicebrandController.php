<?php

namespace App\Http\Controllers\Admin;

use App\Models\Servicebrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ServicebrandController extends Controller
{


    public function index(){
        $servicebrands= Servicebrand::all();
        return view('admin.servicebrand.index' , compact(['servicebrands'  ]));
    }


    public function create(){
        return view('admin.servicebrand.create' );
    }

    public function edit($id){
        $servicebrand=Servicebrand::find($id);
        return view('admin.servicebrand.edit' , compact(['servicebrand'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $data = $request->all();

        $data['price'] = str_rep_price($data['price']);
       Servicebrand::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.servicebrand.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Servicebrand $servicebrand){

        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $servicebrand=Servicebrand::find($id);
        $data = $request->all();

        $data['price'] = str_rep_price($data['price']);
        $servicebrand->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Servicebrand::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }



}
