<?php

namespace App\Http\Controllers\Service;


use GuzzleHttp\Psr7;
use App\Models\Domain;
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

class MyNameserverController extends Controller
{


    public function __construct($external)
    {
        $this->external = $external;
    }




    public function changeNameServers(  $data ){
        $array = data_build_query_array('nameserver' , $data);
        $myurl = data_build_query('api/' , $data).'&'.$array;

$resource = Psr7\Utils::tryFopen($myurl, 'r');
$stream = Psr7\Utils::streamFor($resource);
$xml = simplexml_load_string($stream);
$code=$xml->reply->code;
$data['codeerror']= $code;

$output=array();
if ( $code!='300') {
    $output['code']=$code; $data['code']=$code;
    $output['detail']=$xml->reply->detail; $data['detail']=$xml->reply->detail;
    $error=$output['detail'];
    if($this->external=='api'){
        return $men=Error_Namesilo($data['operator'] , $error  );

      }
    if($this->external=='web'){
  Alert::error(  ' مشکلی در تغییر نیم سرور به وجود آمد ',  'متاسفانه قابلیت تغییر نیم سرور وجود ندارد      ' .$error );
  return back();



}

    return $output;
}else{
    //success
     $output['code']=$code;
    $data['message']=$xml->reply->message;
    if($this->external=='api'){

    }
    if($this->external=='web'){

        $nameserver=query_table_nameserver($data);

        $data['status']='active';
        $nameserver->update([  'status' => $data['status']    ]);

        Alert::success('تغییر نیم سرور سایت شما باموفقیت انجام شد        ', 'تغییر نیم سرور باموفقیت انجام شد  ');
        return redirect()->route('user.nameserver.show' , $nameserver );    }
}


}




}
