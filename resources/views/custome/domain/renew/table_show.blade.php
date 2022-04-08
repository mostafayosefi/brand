

      @slot('style')





<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">



<script>
    function fetch_select2(val){
        var val = document.getElementById("cat").value;$.ajax({
            type: 'get',
            url: '/fetch/renew/{{$renew->id}}/time/'+val+'',
        data: {get_option:val},
        success: function (response) {
            document.getElementById("catamrc").innerHTML=response;
        }
    });




    var val = document.getElementById("cat").value;$.ajax({
            type: 'get',
            url: '/fetch/renew/{{$renew->id}}/price/'+val+'',
        data: {get_option:val},
        success: function (response) {
            document.getElementById("price_domain").innerHTML=response;
        }
    });

        }
</script>




<script>
    function fetch_select3(val){
        var val = document.getElementById("payment").value;$.ajax({
            type: 'get',
            url: '/fetch/payment/renew/{{$renew->id}}/'+val+'',
        data: {get_option:val},
        success: function (response) {document.getElementById("view_payment").innerHTML=response;}
    });
        }
</script>






@endslot







<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                #
            </th>
            <th>

            </th>
        </tr>
    </thead>

    <tbody>

        @include('admin.layouts.errors')


        <form method="POST" action="{{$route}}"  enctype="multipart/form-data" onsubmit="return Validate(this);">
            @csrf
        @if($aroue=='admin')
        <tr>
           <td>کاربر</td>
           <td> {{ $renew->user->name }}</td>
       </tr>
        @endif


        <tr>
            <td>نام دامنه</td>
            <td> {{ $renew->domain->domain }}</td>
        </tr>




        <input type="hidden" name="starttime" value=""  />
        <input type="hidden" name="endtime" value=""  />
        <input type="hidden" name="price" value=""  />
        <input type="hidden" name="domain" value="{{$renew->domain->domain}}"  />


        <tr>
            <td> جزییات زمان دامنه </td>
            <td>

                <div class="form-group row">
                     <div class="col-md-6">
                        <select name="domainyears"
                        placeholder="" value="{{$renew->domain->years}}" aria-required="true"    required   disabled  >
                        <option value="">لطفا مدت زمان استفاده از دامنه را وارد نمایید  </option>
                        @for ($x = 1; $x <= 10; $x++) {
                        <option value="{{$x}}"
                   {{(old('years', $renew->domain->years)  == $x ? 'selected' : '')}} >{{$x}} ساله</option>
                       @endfor
                    </select>
<br>
    @include('custome.fetch.expire_time', ['order' => $renew->domain ,'value' =>  $renew->domain->years  ,'oper' => 'time' ])
</div>

</div>
</td>
</tr>



<tr>
    <td>  تمدید دامنه </td>
    <td>

        <div class="form-group row">
            <input type="hidden" name="starttime" value="{{now()->format('Y-m-d');}}">
            <div class="col-md-6">
                <select name="years" id="cat"
                placeholder="" value="{{$renew->years}}" aria-required="true"  onchange="fetch_select2(this.value);"   required   @if (($renew->status == 'active')||($renew->status == 'waiting')) disabled @endif     >
                <option value="">لطفا مدت زمان استفاده از دامنه را وارد نمایید  </option>
                @for ($x = 1; $x <= 10; $x++) {
                <option value="{{$x}}"
           {{( $renew->years  == $x ? 'selected' : '')}} >{{$x}} ساله</option>
               @endfor
            </select>
<br>
<div  id="catamrc">
@include('custome.fetch.renew', ['renew' => $renew ,'value' =>    $renew->years  ,'oper' => 'time' ])
</div>
</div>

</div>
</td>
</tr>




        <tr>
            <td>هزینه تمدید دامنه</td>
            <td>
                <div  id="price_domain">
                    @include('custome.fetch.renew', ['order' => $renew ,'value' => old('years', $renew->years),'oper' => 'price' ])
                </div>
            </td>
        </tr>



        @if (($renew->status != 'active')&&($renew->status != 'waiting'))
            <tr>
                <td>موجودی شارژ حساب من</td>
                <td> <span class="spanstatus spanstatus_primary">
                        {{ number_format(Mywallet($renew->domain->user->id,'mycharge')) }} ريال </span>
                </td>
            </tr>
        @endif



        @if (($renew->status != 'active')&&($renew->status != 'waiting'))
        <tr>
            <td> وضعیت پرداخت</td>
            <td> @include('index.layouts.table.getstatus', ['admin' => $renew ,'route' => ''
                ,'type_name' => 'status_domain' ]) </td>
        </tr>


        @endif


        @if($aroue=='user')

        @if($renew->payment)
        @php $payment = $renew->payment;  @endphp
        @else
        @php $payment = $renew;  @endphp
        @endif

        <tr>

            <td>پرداخت   </td>
            <td>


                    <div class="elementor-form-fields-wrapper elementor-labels-above"
                        style="padding-bottom: 30px;">
                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">

                            <select name="type" id="payment" onchange="fetch_select3(this.value);"
                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                placeholder=""   aria-required="true" @if (($renew->status == 'active')||($renew->status == 'waiting')) disabled @endif >
                                <option value="online"   @if (old('type', $payment->type)     == 'online')  selected  @endif    >پرداخت آنلاین   </option>
                                <option value="offline" @if (old('type', $payment->type)     == 'offline')  selected  @endif   >پرداخت آفلاین</option>
                                <option value="depo"  @if (old('type', $payment->type)     == 'depo')  selected  @endif    >پرداخت از شارژ حساب</option>
                            </select>
<div  id="view_payment">
@include('custome.fetch.payment', ['oper' => 'renew' ,'order' => $renew ,'value' =>  $payment->type   ])
</div>
</div>
                        <input type="hidden" name="charge" value="{{Mywallet($renew->user_id,'mycharge')}}" />

@method('PUT')
                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">
                            <label> </label>

        @if (($renew->status != 'active')&&($renew->status != 'waiting'))
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">پرداخت</button>
                            </div>
                            @endif
                        </div>
                    </div>
            </td>
        </tr>
        @endif




        @if (($renew->status == 'active')||($renew->status == 'waiting'))
        <tr>
            <td> وضعیت پرداخت</td>
            <td>

 @include('index.layouts.table.getstatus', ['admin' => $renew ,'route' => ''
   ,'type_name' => 'status_domain' ])





</td>
        </tr>


        @endif

    </form>

@if($aroue=='admin')
@if($renew)
<tr>
    <td>عملیات سفارش</td>
    <td>

        @if ($renew->status != 'active')
        @include('admin.order.modal_operation', [ 'route' => route('admin.domain.renew.status' , [ 'renew'=>$renew , 'status'=>'active' ]  ) , 'operat' => 'accept' ])
        @endif
        @if ($renew->status != 'inactive')
        @include('admin.order.modal_operation', [ 'route' => route('admin.domain.renew.status' , [ 'renew'=>$renew , 'status'=>'inactive' ]  ) , 'operat' => 'cancel' ])
        @endif
    </td>
</tr>
@endif
@endif







    </tbody>
</table>

@if(($renew->discriptionorders))
@include('admin.order.timeline', [  'discriptionorders' => $renew->discriptionorders , 'myoperator'=>'renew' ])
@endif
