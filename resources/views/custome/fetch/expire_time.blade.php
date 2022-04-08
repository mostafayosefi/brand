@if($order->status == 'active')

@php $starttime=$order->starttime;
$endtime=$order->endtime;@endphp

@else

@php $x=0; $starttime=now_time($x);
$endtime=now_time($value); @endphp

@endif




@if ($oper=='time')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card"  >


            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>زمان شروع</th>
                        <th>زمان منقضی</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>میلادی </td>
                        <td>{{$starttime}}</td>
                        <td>{{$endtime}}</td>
                    </tr>
                    <tr>
                        <td>شمسی</td>
                        <td>{{date_frmat_ymd($starttime)}}</td>
                        <td>{{date_frmat_ymd($endtime)}}</td>
                     </tr>
                </tbody>

            </table>



        </div>
        </div>
        <input type="hidden" name="starttime" value="{{$starttime}}"  />
        <input type="hidden" name="endtime" value="{{$endtime}}"  />


@endif


@if ($oper=='price')

@php
$extension=find_extension($order->domain);
$price=riyal_extension($extension);
 
  

// private_price_finaly($order->private);
private_price_finaly($value);
$final_price= ($price * session('year')) + session('private_price');   
 @endphp


{{number_format($final_price)}}  ريال    

<input type="hidden" name="price" value="{{$final_price}}"  />
@endif


