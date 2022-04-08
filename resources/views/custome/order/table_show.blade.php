

      @slot('style')





<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">

<script>
    function fetch_myselect_4(vall){
        var vall = document.getElementById("mycontact").value;$.ajax({
            type: 'get',
            url: '/fetch/contact/{{$order->id}}/'+vall+'',
        data: {get_option:vall},
        success: function (response) {document.getElementById("view_mycontact").innerHTML=response;}
    });
        }
</script>


<script>
    function fetch_select2(val){
        var val = document.getElementById("cat").value;$.ajax({
            type: 'get',
            url: '/fetch/timeexpire/{{$order->id}}/time/'+val+'',
        data: {get_option:val},
      beforeSend: function (){
        $(".cat") .html("aaaaaaaaaaaaaaaa");
      },

        success: function (response) {
            document.getElementById("catamrc").innerHTML=response;
        }
    });




    var val = document.getElementById("cat").value;$.ajax({
            type: 'get',
            url: '/fetch/timeexpire/{{$order->id}}/price/'+val+'',
        data: {get_option:val},
        success: function (response) {
            document.getElementById("price_domain").innerHTML=response;
        }
    });



    var val = document.getElementById("cat").value;$.ajax({
            type: 'get',
            url: '/fetch/private_domain/{{$order->id}}/'+val+'',
        data: {get_option:val},
        success: function (response) {
            document.getElementById("private_domain").innerHTML=response;
        }
    });



        }
</script>


<script>
    function fetch_select3(val){
        var val = document.getElementById("payment").value;$.ajax({
            type: 'get',
            url: '/fetch/payment/order/{{$order->id}}/'+val+'',
        data: {get_option:val},
        success: function (response) {document.getElementById("view_payment").innerHTML=response;}
    });
        }
</script>




<script>
    function fetch_select5(val){
        var val = document.getElementById("private").value;$.ajax({
            type: 'get',
            url: '/fetch/timeexpire/{{$order->id}}/price/'+val+'',
        data: {get_option:val},
        success: function (response) {document.getElementById("price_domain").innerHTML=response;}
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


        @if($aroue=='admin')
        <tr>
           <td>کاربر</td>
           <td> {{ $order->user->name }}</td>
       </tr>
        @endif


        <tr>
            <td>نام دامنه</td>
            <td> {{ $order->domain }}</td>
        </tr>



        @if($aroue=='admin')
        @php
$routecreate=route('admin.contact.store');
        @endphp
        @else
        @php
$routecreate=route('user.contact.store');

        @endphp
        @endif

        <tr>
            <td> انتخاب اکانت
                @if (($order->status != 'active')&&($order->status != 'waiting'))
                <div class="col-md-4">
                    @include('custome.contact.modal_create', [ 'routecreate' => $routecreate ,  'user_id' => $order->user->id   ])
                </div>
                @endif
            </td>
            <td>


                @include('index.layouts.elementor.txtalert', [ 'id' => '12' ])




                <form method="POST" action="{{$route}}"  enctype="multipart/form-data" onsubmit="return Validate(this);">
                    @csrf
                <div class="form-group row">



                    <div class="col-md-12">
                        <select name="contact_id" id="mycontact"

                        class="elementor-field elementor-size-sm  elementor-field-textual"
                        placeholder=""   aria-required="true"  onchange="fetch_myselect_4(this.value);"     @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >
                         <option value="">لطفا اکانت خود را انتخاب نمایید  </option>
                         @foreach ($contacts as $contact  )
                        <option value="{{$contact->id}}"
                        @if($order->order) {{(old('contact_id',$order->order->contact_id )  == $contact->id ? 'selected' : '')}}
                        @else  {{(old('contact_id')  == $contact->id ? 'selected' : '')}}  @endif         >{{$contact->full_name}}</option>
                        @endforeach

                    </select>


                    </div>
                    </div>




                <div  id="view_mycontact">
                    @if ($order->order)
                    @include('custome.fetch.contact', ['contact' => $order->order->contact ,'value' => old('contact_id', $order->order->contact_id) ])
                    @else
                    @foreach ($contacts as $contact  )
                    @if ($contact->id== old('contact_id'))
                    @include('custome.fetch.contact', [ $contact , 'value' =>  old('contact_id') ])
                    @endif
                    @endforeach
                    @endif
                </div>






            </td>
        </tr>




        <input type="hidden" name="starttime" value=""  />
        <input type="hidden" name="endtime" value=""  />
        <input type="hidden" name="price" value=""  />
        <input type="hidden" name="domain" value="{{$order->domain}}"  />


        <tr>
            <td> مدت زمان دامنه </td>
            <td>

                <div class="form-group row">
                    <input type="hidden" name="starttime" value="{{now()->format('Y-m-d');}}">
                    <div class="col-md-6">
                        <select name="years" id="cat"
                        placeholder="" value="{{$order->years}}" aria-required="true"  onchange="fetch_select2(this.value);"   required @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >
                        <option value="">لطفا مدت زمان استفاده از دامنه را وارد نمایید  </option>
                        @for ($x = 1; $x <= 10; $x++) {
                        <option value="{{$x}}"
                   {{(old('years', $order->years)  == $x ? 'selected' : '')}} >{{$x}} ساله</option>
                       @endfor
                    </select>
<br>
<div  id="catamrc">
    @include('custome.fetch.expire_time', ['order' => $order ,'value' => old('years', $order->years) ,'oper' => 'time' ])
</div>
</div>

</div>
</td>
</tr>



<tr>
    <td>مشاهده Whois</td>
    <td>
        @include('index.layouts.elementor.txtalert', [ 'id' => '13' ])

        <div class="col-md-6">



<select name="private" id="private"
placeholder="" value="{{$order->private}}"  onchange="fetch_select5(this.value);"   aria-required="true"  required @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >

<div  id="private_domain">
@include('custome.fetch.private_domain', ['order' => $order ,'value' => $order->years ])
</div>

 </select>


        </div>

    </td>
</tr>

        <tr>
            <td>هزینه دامنه</td>
            <td>
                <div  id="price_domain">
                    @include('custome.fetch.expire_time', ['order' => $order ,'value' => old('years', $order->years)  ,'oper' => 'price' ])
                </div>
            </td>
        </tr>


        <tr>
            <td> تنظیمات nameserver  </td>
            <td  dir="ltr">

                @include('admin.layouts.errors')

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('dns1') ? 'red' : '' }}"  ><span class="red">*</span>Name Server 1</label> </div>
                    <div class="col-lg-8"> <input class="form-control"  name="dns1"  id="dns1" type="text" placeholder="dns1.example.com"
                    value="{{old('dns1', $order->dns1)}}" @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif  >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('dns2') ? 'red' : '' }}"  ><span class="red">*</span>Name Server 2</label> </div>
                    <div class="col-lg-8"> <input class="form-control"  name="dns2"  id="dns2" type="text" placeholder="dns2.example.com"
                        value="{{old('dns2', $order->dns2)}}" @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif  >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('dns3') ? 'red' : '' }}"  >Name Server 3</label>  </div>
                    <div class="col-lg-8"> <input class="form-control"  name="dns3"  id="dns3" type="text" placeholder="dns3.example.com"
                        value="{{old('dns3', $order->dns3)}}" @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif  >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('dns4') ? 'red' : '' }}"  >Name Server 4</label>  </div>
                    <div class="col-lg-8"> <input class="form-control"  name="dns4"  id="dns4" type="text" placeholder="dns4.example.com"
                        value="{{old('dns4', $order->dns4)}}" @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif   >
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
                            <input  type="radio" class="form-check-input" name="renew" id="renew" value="0"  @if (old('renew', $order->renew) == '0')  checked @endif
                            @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >
                              غیرقابل تمدید(اتوماتیک)
                        <i class="input-frame"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="renew" id="renew" value="1"  @if (old('renew', $order->renew) == '1')  checked @endif
                            @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >
                            قابل تمدید(اتوماتیک)
                        <i class="input-frame"></i></label>
                    </div>
                </div>
            </td>
        </tr>



        @if (($order->status != 'active')&&($order->status != 'waiting'))

            <tr>
                <td>موجودی شارژ حساب من</td>
                <td> <span class="spanstatus spanstatus_primary">
                        {{ number_format(Mywallet($order->user->id,'mycharge')) }} ريال </span>
                </td>
            </tr>

        @endif



        @if (($order->status != 'active')&&($order->status != 'waiting'))
        <tr>
            <td> وضعیت پرداخت</td>
            <td> @include('index.layouts.table.getstatus', ['admin' => $order ,'route' => ''
                ,'type_name' => 'status_domain' ]) </td>
        </tr>


        @endif


        @if($aroue=='user')
        <tr>
            <td>پرداخت</td>
            @if($order->order)
            @php $payment = $order->order->payment;  @endphp
            @else
            @php $payment = $order;  @endphp
            @endif

            <td>


                    <div class="elementor-form-fields-wrapper elementor-labels-above"
                        style="padding-bottom: 30px;">
                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">

                            <select name="type" id="payment" onchange="fetch_select3(this.value);"
                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                placeholder=""   aria-required="true" @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >
                                <option value="online" {{(old('type')  == 'online' ? 'selected' : '')}}   >پرداخت آنلاین   </option>
                                <option value="offline"  {{(old('type')  == 'offline' ? 'selected' : '')}}  >پرداخت آفلاین</option>
                                <option value="depo"  {{(old('type')  == 'depo' ? 'selected' : '')}}  >پرداخت از شارژ حساب</option>
                            </select>
                            <input type="hidden" name="textUser" value="پرداخت غیرمستقیم" />
<div  id="view_payment">
@include('custome.fetch.payment', ['oper' => 'order' ,'order' => $order ,'value' => old('type' , $payment->type ) ])
</div>
</div>
                        <input type="hidden" name="charge" value="{{Mywallet($order->user_id,'mycharge')}}" />
                        <input type="hidden" name="user_id" value="{{$order->user_id}}" />

@method('PUT')
                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">
                            <label> </label>

        @if (($order->status != 'active')&&($order->status != 'waiting'))
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">پرداخت</button>
                            </div>
                            @endif
                        </div>
                    </div>
            </td>
        </tr>
        @endif




        @if (($order->status == 'active')||($order->status == 'waiting'))
        <tr>
            <td> وضعیت پرداخت</td>
            <td>

 @include('index.layouts.table.getstatus', ['admin' => $order ,'route' => ''
   ,'type_name' => 'status_domain' ])





</td>
        </tr>


        @endif

    </form>

@if($aroue=='admin')
<tr>
    <td>عملیات سفارش</td>
    <td>

        @if ($order->status != 'active')
        @include('admin.order.modal_operation', [ 'route' => route('admin.order.status' , [ 'id'=>$order->id , 'status'=>'active' ]  ) , 'operat' => 'accept' ])
        @endif
        @if ($order->status != 'inactive')
        @include('admin.order.modal_operation', [ 'route' => route('admin.order.status' , [ 'id'=>$order->id , 'status'=>'inactive' ]  ) , 'operat' => 'cancel' ])
        @endif
    </td>
</tr>
@endif







    </tbody>
</table>

@if($order->order)
@include('admin.order.timeline', [  'discriptionorders' => $order->order->discriptionorders , 'myoperator'=>'order' ])
@endif
