

      @slot('style') 

<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">


<script>
    function fetch_select3(val){
        var val = document.getElementById("payment").value;$.ajax({
            type: 'get',
            url: '/fetch/payment/transfer/{{$transfer->id}}/'+val+'',
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
           <td> {{ $transfer->user->name }}</td>
       </tr>
        @endif


        <tr>
            <td>نام دامنه</td>
            <td> {{ $transfer->domain }}</td>
        </tr>



{{-- 
        <tr>
            <td>مشاهده Whois</td>
            <td>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="private" id="private" value="0" @if (old('private', $transfer->private) == '0')  checked @endif
                            @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                              قابل مشاهده
                        <i class="input-frame"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="private" id="private" value="1"   @if (old('private', $transfer->private) == '1')  checked @endif
                            @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                            غیرقابل مشاهده
                        <i class="input-frame"></i></label>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td> قابلیت تمدید اتوماتیک </td>
            <td>
                <div class="form-group" disabled >
                    <div class="form-check">
                        <label class="form-check-label">
                            <input  type="radio" class="form-check-input" name="renew" id="renew" value="0"  @if (old('renew', $transfer->renew) == '0')  checked @endif
                            @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                              غیرقابل تمدید(اتوماتیک)
                        <i class="input-frame"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="renew" id="renew" value="1"  @if (old('renew', $transfer->renew) == '1')  checked @endif
                            @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                            قابل تمدید(اتوماتیک)
                        <i class="input-frame"></i></label>
                    </div>
                </div>
            </td>
        </tr>
 --}}


        <tr>
            <td>کد امنیتی انتقال دامنه  </td>
            <td>

                <label  class="{{ $errors->has('auth') ? 'red' : '' }}"  >    کد AUTH </label>
                <input id="auth" class="form-control" name="auth" type="password"  value="{{old('auth')}}"   required="required"  style="height: 50px;">


            </td>
        </tr>

        
        @if (($transfer->status != 'active')&&($transfer->status != 'waiting'))

            <tr>
                <td>موجودی شارژ حساب من</td>
                <td> <span class="spanstatus spanstatus_primary">
                        {{ number_format(Mywallet($transfer->user->id,'mycharge')) }} ريال </span>
                </td>
            </tr>

        @endif

        <tr>
            <td>هزینه انتقال دامنه</td>
            <td>
                
{{number_format($transfer->price)}}  ريال     

            </td>
        </tr>

        <input type="hidden" name="domain" value="{{$transfer->domain}}"  />


@method('PUT')




        @if($aroue=='user')
        <tr>
            <td>پرداخت</td> 


            
        @if($transfer->payment)
        @php $payment = $transfer->payment;  @endphp
        @else
        @php $payment = $transfer;  @endphp
        @endif


 
            <td>


                    <div class="elementor-form-fields-wrapper elementor-labels-above"
                        style="padding-bottom: 30px;">
                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">

                            <select name="type" id="payment" onchange="fetch_select3(this.value);"
                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                placeholder=""   aria-required="true" @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                                <option value="online" {{(old('type')  == 'online' ? 'selected' : '')}}   >پرداخت آنلاین   </option>
                                <option value="offline"  {{(old('type')  == 'offline' ? 'selected' : '')}}  >پرداخت آفلاین</option>
                                <option value="depo"  {{(old('type')  == 'depo' ? 'selected' : '')}}  >پرداخت از شارژ حساب</option>
                            </select>
                            <input type="hidden" name="textUser" value="پرداخت غیرمستقیم" />
<div  id="view_payment">
@include('custome.fetch.payment', ['oper' => 'transfer' ,'order' => $transfer ,'value' => old('type' , $payment->type ) ])
</div>
</div>
                        <input type="hidden" name="charge" value="{{Mywallet($transfer->user_id,'mycharge')}}" />
                        <input type="hidden" name="user_id" value="{{$transfer->user_id}}" />

@method('PUT')
                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">
                            <label> </label>

        @if (($transfer->status != 'active')&&($transfer->status != 'waiting'))
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">پرداخت و انتقال دامنه</button>
                            </div>
                            @endif
                        </div>
                    </div>
            </td>
        </tr>
        @endif






 




         <tr>
            <td> وضعیت انتقال</td>
            <td>

 @include('index.layouts.table.getstatus', ['admin' => $transfer ,'route' => ''
   ,'type_name' => 'status_domain' ])
 
</td>
  </tr>



    </form> 

    </tbody>
</table>
