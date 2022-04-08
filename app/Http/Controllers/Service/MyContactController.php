<?php

namespace App\Http\Controllers\Service;

use App\Models\Page;

use GuzzleHttp\Psr7;
use App\Models\Contact;
use App\Models\Webservice;
use App\Models\Checkdomain;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Resources\WebserviceCollection;
use App\Http\Resources\CheckdomainCollection;
use App\Models\Order;

class MyContactController extends Controller
{

    public function __construct($external)
    {
        $this->external = $external;
    }



    public function ContactUpdate(  $data ){
        $array = data_build_query_array('contact' , $data);
        $myurl = data_build_query('api/' , $data).'&'.$array;
$resource = Psr7\Utils::tryFopen($myurl, 'r');
$stream = Psr7\Utils::streamFor($resource);
$xml = simplexml_load_string($stream);
$code=$xml->reply->code;
$output=array();
if ( $code!='300') {
    $output['code']=$code;
    $output['detail']=$xml->reply->detail;
    $error=$output['detail'];
    if($this->external=='api'){
        return $men=Error_Namesilo($data['operator'] , $error  );

      }
    if($this->external=='web'){
  Alert::error(  ' مشکلی در ثبت اطلاعات به وجود آمد ',  'متاسفانه اطلاعات ثبت نشد' .$error );
  return back();
}

 }else{
    //success
    $contact_id=$xml->reply->contact_id;
    $output['code']=$code;
    if($this->external=='api'){
        return new CheckdomainCollection(Checkdomain::where('webservice_id' , $data['webservice_id'])->orderBy('type' ,'asc')->get());

      }
    if($this->external=='web'){

        $contact=Contact::find($data['id']);
        $contact->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    return $output;

}



    }





    public function ContactAdd(  $data ){
        $array = data_build_query_array('contact' , $data);
        $myurl = data_build_query('api/' , $data).'&'.$array;
$resource = Psr7\Utils::tryFopen($myurl, 'r');
$stream = Psr7\Utils::streamFor($resource);
$xml = simplexml_load_string($stream);
$code=$xml->reply->code;
$output=array();
if ( $code!='300') {
    $output['code']=$code;
    $output['detail']=$xml->reply->detail;
    $error=$output['detail'];
    if($this->external=='api'){
        return $men=Error_Namesilo($data['operator'] , $error  );

      }
    if($this->external=='web'){
  Alert::error(  ' مشکلی در ثبت اطلاعات به وجود آمد ',  'متاسفانه اطلاعات ثبت نشد' .$error );
  return back();
}

    return $output;
}else{
    //success
    $contact_id=$xml->reply->contact_id;
    $output['code']=$code;
    $output['contact_id']=$xml->reply->contact_id;
    $data['contact_id']=$output['contact_id'];
    if($this->external=='api'){
        return new CheckdomainCollection(Checkdomain::where('webservice_id' , $data['webservice_id'])->orderBy('type' ,'asc')->get());
      }
    if($this->external=='web'){
        Contact::create($data);
        Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return back();
    }
} }




public function ContactDelete(  $data ){
    $order = Order::where([   ['contact_id' , $data['id'] ] ,  ])->first();
    if($order){
        if($this->external=='api'){
            return $men=Error_Namesilo($data['operator'] , 'unavailable_foreign'  );
          }
        if($this->external=='web'){
        Alert::error(  ' این اکانت قبلا یک سفارش ایجاد کرده است و امکان حذف آن وجود ندارد  ',  'متاسفانه اکانت حذف نشد'  );
        return back();
        }
    }
    $array = data_build_query_array('contact' , $data);
    $myurl = data_build_query('api/' , $data).'&'.$array;
$resource = Psr7\Utils::tryFopen($myurl, 'r');
$stream = Psr7\Utils::streamFor($resource);
$xml = simplexml_load_string($stream);
$code=$xml->reply->code;
$output=array();
if ( $code!='300') {
$output['code']=$code;
$output['detail']=$xml->reply->detail;
$error=$output['detail'];
if($this->external=='api'){
    return $men=Error_Namesilo($data['operator'] , $error  );

  }
if($this->external=='web'){
Alert::error(  ' مشکلی در حذف اکانت به وجود آمد ',  'متاسفانه اکانت حذف نشد' .$error );
return back();
}

return $output;
}else{
//success
$output['code']=$code;
if($this->external=='api'){
    return new CheckdomainCollection(Checkdomain::where('webservice_id' , $data['webservice_id'])->orderBy('type' ,'asc')->get());
  }
if($this->external=='web'){
    Contact::destroy($data['id']);
    Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
    $user_id=Auth::guard('user')->user()->id;
    $status=SelectDefault($user_id,'0');
    return back();
}
} }



}
