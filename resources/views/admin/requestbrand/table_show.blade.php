

      @slot('style')





<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">

<script>
    function fetch_select3(val){
        var val = document.getElementById("payment").value;$.ajax({
            type: 'get',
            url: '/fetch/payment/requestbrand/{{$requestbrand->id}}/'+val+'',
        data: {get_option:val},
        success: function (response) {document.getElementById("view_payment").innerHTML=response;}
    });
        }
</script>


@endslot




        <div class="row">

        <div class="col-12 col-xl-12 stretch-card">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            @include('admin.layouts.errors')

                        </th>
                    </tr>
                </thead>

                <tbody>

        @if($aroue=='admin')
        <tr>
           <td>کاربر</td>
           <td> {{ $requestbrand->user->name }}</td>
       </tr>
        @endif


        <tr>
            <td>نام برند درخواستی</td>
            <td> {{ $requestbrand->name }}</td>
        </tr>

        <tr>
            <td>دسته برند  </td>
            <td> {{ $requestbrand->subcategorybrand->categorybrand->name }}</td>
        </tr>


        <tr>
            <td>زیرگروه برند  </td>
            <td> {{ $requestbrand->subcategorybrand->name }}</td>
        </tr>

        <tr>
            <td> هزینه به ریال</td>
            <td> {{flage_price($requestbrand->price)}} </td>
         </tr>


         <tr>
            <td>تاریخ تولد میلادی   </td>
            <td> {{ $requestbrand->birthday }}</td>
        </tr>
         <tr>
            <td>ایمیل   </td>
            <td> {{ $requestbrand->email }}</td>
        </tr>
         <tr>
            <td>کدپیگیری   </td>
            <td> {{ $requestbrand->random }}</td>
        </tr>
         <tr>
            <td>شماره تلفن   </td>
            <td> {{ $requestbrand->tellir }}</td>
        </tr>
         <tr>
            <td>کدپستی   </td>
            <td> {{ $requestbrand->codepir }}</td>
        </tr>
         <tr>
            <td>آدرس پستی   </td>
            <td> {{ $requestbrand->adresir }}</td>
        </tr>
         <tr>
            <td>شماره تلفن خارج از کشور   </td>
            <td> {{ $requestbrand->tellin }}</td>
        </tr>
         <tr>
            <td>کدپستی خارج از کشور   </td>
            <td> {{ $requestbrand->codepin }}</td>
        </tr>
         <tr>
            <td>آدرس پستی خارج از کشور   </td>
            <td> {{ $requestbrand->adresin }}</td>
        </tr>
         <tr>
            <td> آیا قبلا از خدمات ما استفاده کرده اید؟    </td>
            <td>

    <div class="form-check form-check-inline">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="before"
            id="before" value="yes" @if ($requestbrand->before=='yes') checked @endif  disabled  >
        بله
    </label>
</div>

<div class="form-check form-check-inline">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="before"
            id="before" value="no"  @if ($requestbrand->before=='yes') checked @endif disabled    >
        خیر
    </label>
</div>

            </td>
        </tr>
         <tr>
            <td> چطور با ما آشنا شدید؟    </td>
            <td>

                <div class="form-group">

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="reach"
                                id="reach" value="google"  @if ($requestbrand->reach=='google') checked @endif  disabled >
                             گوگل
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="reach"
                                id="reach" value="frind"  @if ($requestbrand->reach=='frind') checked @endif  disabled >
                             دوستان
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="reach"
                                id="reach" value="internet"  @if ($requestbrand->reach=='internet') checked @endif  disabled >
                             تبلیغات اینترنت
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="reach"
                                id="reach" value="other"  @if ($requestbrand->reach=='other') checked @endif  disabled  >
                             سایر
                        </label>
                    </div>


                </div>



            </td>
        </tr>

         <tr>
            <td> خدماتی که می خواهید استفاده نمایید را لطفا انتخاب نمایید    </td>
            <td>
                @if($requestbrand->listservicebrands)
@foreach ($requestbrand->listservicebrands as $list )


<div class="form-check form-check-inline">
    <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="servicebrand[]" value="{{$list->servicebrand->id}}" @if($list->show=='1') checked @endif disabled  >
     {{$list->servicebrand->name}}
    </label>
</div>
@endforeach

                @endif


            </td>
        </tr>


         <tr>
            <td>فایل ها   </td>
            <td>


                @if($requestbrand->filebrands)
    <table width="100%" id="multi_file_uploader" class="table table-bordered dt-responsive nowrap" >
        <tbody>

            {{-- @foreach ($requestbrand->filebrands as $file ) --}}

            <tr class="imageSelectorContainer">
                <td valign="top" align="right">
                 <input type="button" value="مشاهده فایل" title="Add" class="btn btn-success btn-sm" style=""  >
                    <input type="button" value="حذف فایل" title="Remove" class="btn btn-danger btn-sm"  >

                    </input></td>
            </tr>
            {{-- @endforeach --}}
        </tbody>

     </table>
     @endif

            </td>
        </tr>


        @if ($requestbrand->status == 'waiting')

            <tr>
                <td>موجودی شارژ حساب من</td>
                <td> <span class="spanstatus spanstatus_primary">
                        {{ number_format(Mywallet($requestbrand->user->id,'mycharge')) }} ريال </span>
                </td>
            </tr>

        @endif



        <tr>
            <td> وضعیت پرداخت</td>
            <td>  @include('admin.layouts.table.getstatus_requestbrand', ['admin' => $requestbrand ,'route' => ''  ,'type_name' => 'requestbrand'   ]) </td>
        </tr>



        @method('PUT')










        @if($aroue=='user')


        <form method="POST" action="{{$route}}"  enctype="multipart/form-data" onsubmit="return Validate(this);">
            @csrf
        <tr>
            <input type="hidden" name="price" value="{{$requestbrand->price}}" />
            <td>پرداخت</td>


            @if($requestbrand->status=='register')
            <td>  @include('admin.layouts.table.getstatus_requestbrand', ['admin' => $requestbrand ,'route' => ''  ,'type_name' => 'requestbrand'   ]) </td>

            @endif

            @php $payment = $requestbrand->payment;  @endphp
            @if($requestbrand->payment)
            @php $payment = $requestbrand->payment;  @endphp
            @else
            @php $payment = $requestbrand;  @endphp
            @endif

            @if($requestbrand->status!='register')

            <td>
                <div class="elementor-form-fields-wrapper elementor-labels-above"
                    style="padding-bottom: 30px;">
                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">

                        <select name="type" id="payment" onchange="fetch_select3(this.value);"
                            class="elementor-field elementor-size-sm  elementor-field-textual"
                            placeholder=""   aria-required="true" @if (($requestbrand->status == 'active')||($requestbrand->status == 'inactive')||($requestbrand->status == 'waitpay')) disabled @endif >
                            <option value="online" {{(old('type' , $payment->type )   == 'online' ? 'selected' : '')}}   >پرداخت آنلاین   </option>
                            <option value="offline"  {{(old('type' , $payment->type )   == 'offline' ? 'selected' : '')}}  >پرداخت آفلاین</option>
                            <option value="depo"  {{(old('type' , $payment->type )   == 'depo' ? 'selected' : '')}}  >پرداخت از شارژ حساب</option>
                        </select>
                        <input type="hidden" name="textUser" value="پرداخت غیرمستقیم" />
<div  id="view_payment">
@include('custome.fetch.payment', ['oper' => 'requestbrand' ,'order' => $requestbrand ,'value' => old('type' , $payment->type ) ])
</div>
</div>
                    <input type="hidden" name="charge" value="{{Mywallet($requestbrand->user_id,'mycharge')}}" />
                    <input type="hidden" name="user_id" value="{{$requestbrand->user_id}}" />

@method('PUT')
                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">
                        <label> </label>

    @if (($requestbrand->status == 'waiting'))
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">پرداخت</button>
                        </div>
                        @endif
                    </div>
                </div>
        </td>

            @endif




        </tr>
        @endif














    </form>

@if($aroue=='admin')
<tr>
    <td>عملیات سفارش</td>
    <td>


        @if ($requestbrand->status != 'active')

@php $status=$requestbrand->status; @endphp
 @if($requestbrand->status=='inactive')
 @php $status='reactive'; @endphp
 @endif

        @include('admin.requestbrand.modal_operation', [ 'route' => route('admin.requestbrand.status' , [ 'id'=>$requestbrand->id , $status ]  ) ,
         'operat' => 'accept' , 'order'=>$requestbrand  , 'nameoper' =>  status_req($requestbrand->status,'nameoper')    ])
        @endif
        @if ($requestbrand->status != 'inactive')
        @include('admin.requestbrand.modal_operation', [ 'route' => route('admin.requestbrand.status' , [ 'id'=>$requestbrand->id , 'status'=>'inactive' ]  ) ,
        'operat' => 'cancel'  , 'order'=>$requestbrand  ])
        @endif
    </td>
</tr>
@endif


</tbody>
</table>

</div>
<div class="col-12 col-xl-12 stretch-card">




</div>
</div>




@if($requestbrand->discriptionorders)
@include('admin.order.timeline', [  'discriptionorders' => $requestbrand->discriptionorders , 'myoperator'=>'requestbrand' ])
@endif
