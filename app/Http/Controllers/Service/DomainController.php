<?php

namespace App\Http\Controllers\Service;

use App\Models\Page;

use GuzzleHttp\Psr7;
use App\Models\Setting;
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
use App\Models\ContentDomain;

class DomainController extends Controller
{

    public function __construct($external)
    {
        $this->external = $external;
    }




public function CheckAvailability(  $data ){



$extension=find_extension($data['origindomain']);
$ContentDomain= ContentDomain::where([ ['name' , $extension ] ])->first();
if($ContentDomain){ }else{
    $error='notfound';
    return notfound_domain($this->external , $error , $data);
}

$setting=Setting::find(1);
 $myurl = data_build_query('api/' , $data).'&domains='.$data['multidomain'];
$resource = Psr7\Utils::tryFopen($myurl, 'r');
$stream = Psr7\Utils::streamFor($resource);
$xml = simplexml_load_string($stream);
$invalid=$xml->reply->invalid;
$var=$xml->reply->unavailable;


if (empty($var)) {
    if (empty($invalid)) {


        if($xml->reply->code=='113'){
            return   $personJSON = response()->json([
                'result' => '1888' ,
                'invalid' => $invalid ,
                'var' => $var ,
                'dataCountWhile' => $data['CountWhile'],
                'xml' => $xml->reply,
                ]);
        }elseif($xml->reply->code!='113'){

    $i=0;
    while($i<$data['CountWhile']){
        if($data['origindomain']==$xml->reply->available->domain[$i]){
            $j = array(  'mydomain' => $xml->reply->available->domain[$i],
            'price' => $xml->reply->available->domain[$i]['price']  ,);
            $data['type']=  'search';
            }
            if($data['origindomain']!=$xml->reply->available->domain[$i]){
                $n[$i] = array(  'topdomain' => $xml->reply->available->domain[$i],
                'price' => $xml->reply->available->domain[$i]['price']  ,);
                $data['type']=  'top';
                }
    $data['domain']= $xml->reply->available->domain[$i]; $domain=$data['domain'];
    $data['extension']=find_extension($domain); $extension=$data['extension'];
    // $data['price']= $xml->reply->available->domain[$i]['price'];
    $data['price']=price_extension($extension);
    $data['riyal']= ($data['price'] * $setting->mngfinical->rateusd );
    Checkdomain::create($data);
    $i++;
     }

    $personJSON = response()->json([
        'result' =>  $j ,
        'alldomain' =>  array($n) ,
    ]);
    if($this->external=='api'){
        $myquery=query_resource($data,'checkdomain');
        return new CheckdomainCollection($myquery);
    }
    if($this->external=='web'){
        $result=Checkdomain::where('webservice_id' , '=' ,$data['webservice_id'])->first();

// Alert::success('با موفقیت پیدا شد', 'اطلاعات با موفقیت پیدا شد');
 return back()->with([  'webservice_id' => $data['webservice_id'] ,  'domain' => $data['origindomain']]);
    }
    }elseif($invalid){


        $error='notfound';
        return  notfound_domain($this->external , $error , $data);
        }
        }

}else{

    $error='unavailable';
    return  notfound_domain($this->external , $error , $data);


}



 }
}
