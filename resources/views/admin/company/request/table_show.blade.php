

      @slot('style')





<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">

<script>
    function fetch_select3(val){
        var val = document.getElementById("payment").value;$.ajax({
            type: 'get',
            url: '/fetch/payment/company_request/{{$company_request->id}}/'+val+'',
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
           <td> {{ $company_request->user->name }}</td>
       </tr>
        @endif

        <tr>
            <td> پلان </td>
            <td> {{ $company_request->company_plan->name }}</td>
        </tr>

        <tr>
            <td>نوع شرکت</td>
            <td> {{ $company_request->company_type->name }}</td>
        </tr>


        <tr>
            <td>نام شرکت درخواستی</td>
            <td> {{ $company_request->name }}</td>
        </tr>


        <tr>
            <td> هزینه به ریال</td>
            <td> {{flage_price($company_request->price)}} </td>
         </tr>


         <tr>
            <td>تاریخ تولد میلادی   </td>
            <td> {{ $company_request->birthday }}</td>
        </tr>
         <tr>
            <td>ایمیل   </td>
            <td> {{ $company_request->email }}</td>
        </tr>
        <tr>
           <td>کدپیگیری   </td>
           <td> {{ $company_request->random }}</td>
       </tr>

         <tr>
            <td>شماره تلفن   </td>
            <td> {{ $company_request->tellir }}</td>
        </tr>
         <tr>
            <td>کدپستی   </td>
            <td> {{ $company_request->codepir }}</td>
        </tr>
         <tr>
            <td>آدرس پستی   </td>
            <td> {{ $company_request->adresir }}</td>
        </tr>
         <tr>
            <td> آیا قبلا از خدمات ما استفاده کرده اید؟    </td>
            <td>

    <div class="form-check form-check-inline">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="before"
            id="before" value="yes" @if ($company_request->before=='yes') checked @endif  disabled  >
        بله
    </label>
</div>

<div class="form-check form-check-inline">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="before"
            id="before" value="no"  @if ($company_request->before=='yes') checked @endif disabled    >
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
                                id="reach" value="google"  @if ($company_request->reach=='google') checked @endif  disabled >
                             گوگل
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="reach"
                                id="reach" value="frind"  @if ($company_request->reach=='frind') checked @endif  disabled >
                             دوستان
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="reach"
                                id="reach" value="internet"  @if ($company_request->reach=='internet') checked @endif  disabled >
                             تبلیغات اینترنت
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="reach"
                                id="reach" value="other"  @if ($company_request->reach=='other') checked @endif  disabled  >
                             سایر
                        </label>
                    </div>


                </div>



            </td>
        </tr>

         <tr>
            <td> خدماتی که می خواهید استفاده نمایید را لطفا انتخاب نمایید    </td>
            <td>
@if($company_request->company_list_services)
@foreach ($company_request->company_list_services as $list )


<div class="form-check form-check-inline">
    <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="company_service[]" value="{{$list->company_service->id}}" @if($list->show=='1') checked @endif disabled  >
     {{$list->company_service->name}}
    </label>
</div>
@endforeach

                @endif


            </td>
        </tr>


         <tr>
            <td>فایل ها   </td>
            <td>


                @if($company_request->filebrands)
    <table width="100%" id="multi_file_uploader" class="table table-bordered dt-responsive nowrap" >
        <tbody>


            <tr class="imageSelectorContainer">
                <td valign="top" align="right">
                 <input type="button" value="مشاهده فایل" title="Add" class="btn btn-success btn-sm" style=""  >
                    <input type="button" value="حذف فایل" title="Remove" class="btn btn-danger btn-sm"  >

                    </input></td>
            </tr>
        </tbody>

     </table>
     @endif

            </td>
        </tr>


        @if ($company_request->status == 'waiting')

            <tr>
                <td>موجودی شارژ حساب من</td>
                <td> <span class="spanstatus spanstatus_primary">
                        {{ number_format(Mywallet($company_request->user->id,'mycharge')) }} ريال </span>
                </td>
            </tr>

        @endif



        <tr>
            <td> وضعیت پرداخت</td>
            <td>  @include('admin.layouts.table.getstatus_requestbrand', ['admin' => $company_request ,'route' => ''  ,'type_name' => 'requestbrand'   ]) </td>
        </tr>



        @method('PUT')










        @if($aroue=='user')


        <form method="POST" action="{{$route}}"  enctype="multipart/form-data" onsubmit="return Validate(this);">
            @csrf
        <tr>
            <input type="hidden" name="price" value="{{$company_request->price}}" />
            <td>پرداخت</td>


            @if($company_request->status=='register')
            <td>  @include('admin.layouts.table.getstatus_requestbrand', ['admin' => $company_request ,'route' => ''  ,'type_name' => 'requestbrand'   ]) </td>

            @endif

            @php $payment = $company_request->payment;  @endphp
            @if($company_request->payment)
            @php $payment = $company_request->payment;  @endphp
            @else
            @php $payment = $company_request;  @endphp
            @endif

            @if($company_request->status!='register')

            <td>
                <div class="elementor-form-fields-wrapper elementor-labels-above"
                    style="padding-bottom: 30px;">
                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">

                        <select name="type" id="payment" onchange="fetch_select3(this.value);"
                            class="elementor-field elementor-size-sm  elementor-field-textual"
                            placeholder=""   aria-required="true" @if (($company_request->status == 'active')||($company_request->status == 'inactive')||($company_request->status == 'waitpay')) disabled @endif >
                            <option value="online" {{(old('type' , $payment->type )   == 'online' ? 'selected' : '')}}   >پرداخت آنلاین   </option>
                            <option value="offline"  {{(old('type' , $payment->type )   == 'offline' ? 'selected' : '')}}  >پرداخت آفلاین</option>
                            <option value="depo"  {{(old('type' , $payment->type )   == 'depo' ? 'selected' : '')}}  >پرداخت از شارژ حساب</option>
                        </select>
                        <input type="hidden" name="textUser" value="پرداخت غیرمستقیم" />
<div  id="view_payment">
@include('custome.fetch.payment', ['oper' => 'requestcompany' ,'order' => $company_request ,'value' => old('type' , $payment->type ) ])
</div>
</div>
                    <input type="hidden" name="charge" value="{{Mywallet($company_request->user_id,'mycharge')}}" />
                    <input type="hidden" name="user_id" value="{{$company_request->user_id}}" />

@method('PUT')
                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">
                        <label> </label>

    @if (($company_request->status == 'waiting'))
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


        @if ($company_request->status != 'active')

@php $status=$company_request->status; @endphp
 @if($company_request->status=='inactive')
 @php $status='reactive'; @endphp
 @endif

        @include('admin.requestbrand.modal_operation', [ 'route' => route('admin.company.request.status' , [ 'id'=>$company_request->id , $status ]  ) ,
         'operat' => 'accept' , 'order'=>$company_request  , 'nameoper' =>  status_req($company_request->status,'nameoper')    ])
        @endif
        @if ($company_request->status != 'inactive')
        @include('admin.requestbrand.modal_operation', [ 'route' => route('admin.company.request.status' , [ 'id'=>$company_request->id , 'status'=>'inactive' ]  ) ,
        'operat' => 'cancel'  , 'order'=>$company_request  ])
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




@if($company_request->discriptionorders)
@include('admin.order.timeline', [  'discriptionorders' => $company_request->discriptionorders , 'myoperator'=>'company_request' ])
@endif
