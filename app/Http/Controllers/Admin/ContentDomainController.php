<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ContentDomain;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ContentDomainController extends Controller
{


    public function create(){ 
        return view('admin.contentdomain.create' );
    }

    public function index(){
        $contentdomains= ContentDomain::all();
        return view('admin.contentdomain.index' , compact(['contentdomains'  ]));
    }



    public function edit($id){
        $contentdomain=ContentDomain::find($id);
        return view('admin.contentdomain.edit' , compact(['contentdomain'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'text' => 'required',
            'image' => 'required',
        ]);
        $data = $request->all();
        $data['status']='active';
        $data['image']  =  uploadFile($request->file('image'),'images/contentdomains','');

        ContentDomain::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
       return back();
    }



    public function update(Request $request, $id , contentdomain $contentdomain){

        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'text' => 'required',
        ]);

        $contentdomain=ContentDomain::find($id);
        $data = $request->all();
        $data['image']= $contentdomain->image;
        $data['image']  =  uploadFile($request->file('image'),'images/contentdomains',$contentdomain->image);
        $contentdomain->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function status(Request $request , $id){
        $status=Change_status($id,'contentdomains');
        return back();
    }


    public function destroy($id , Request $request)
    {
        ContentDomain::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }


}
