@if($renew->status == 'active')

@php
$endtime=$renew->renewendtime;@endphp

@else

@php
$endtime=renew_time($renew->domain->endtime,$value); @endphp

@endif




@if ($oper=='time')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card"  >


            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>زمان منقضی</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>میلادی </td>
                        <td>{{$endtime}}</td>
                    </tr>
                    <tr>
                        <td>شمسی</td>
                        <td>{{date_frmat_ymd($endtime)}}</td>
                     </tr>
                </tbody>

            </table>



        </div>
        </div>
        <input type="hidden" name="endtime" value="{{$endtime}}"  />


@endif

@php

$extension=find_extension($renew->domain->domain);
$price=riyal_extension($extension);
$price=$price * $value;
 @endphp


@if ($oper=='price')
{{number_format($price)}}  ريال

<input type="hidden" name="price" value="{{$price}}"  />
@endif


