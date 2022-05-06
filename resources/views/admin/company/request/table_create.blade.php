
@slot('style')

<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">




@endslot



                              <form class="forms-sample" method="POST" action="{{$route}}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                    <div class="col-lg-12">
                                        @include('index.layouts.elementor.txtalert', [ 'id' => '16' ])

                                    </div>
                                    </div>
                                        <div class="row">

                                          <div class="col-lg-5">



                                        @if($arou=='admin')
                                        @include('admin.layouts.table.selectbox', [ 'allforeachs' => $users ,  'input_name' => 'name'  ,
                                          'name_select' => ' کاربر ' ,  'value' => '' , 'required'=>'required'  ,
                                          'index_id'=>'user_id' ])
                                        @endif


                                        @include('admin.layouts.table.selectbox', [ 'allforeachs' => $company_plans ,  'input_name' => 'name'  ,
                                          'name_select' => ' پلان ' ,  'value' => $plan , 'required'=>'required'  ,
                                          'index_id'=>'company_plan_id'  ])

@php $my_price_plan = 0; @endphp

@foreach ($company_plans as $company_plan )

@if($company_plan->id==$plan)
@php $my_price_plan = $company_plan->price; @endphp
@endif

@endforeach


<div class="form-group">

    <input type="hidden" name="qty"  id="resultBox_hidden"  value="{{$my_price_plan}}"   />

    <label for="name">هزینه پلان (به ریال)</label>
    <input type="text" class="form-control"  autocomplete="off"  id="resultBox"
    placeholder=" هزینه پلان "  readonly="true" type="text"  value="{{$my_price_plan}} ریال " disabled  >
    </div>



<script>
    function calc() {
    var resultBox_hidden = document.getElementById('resultBox_hidden');
    var resultBox = document.getElementById('resultBox');

    var select1 = document.getElementById("dropdown_test");
    var item = select1.options[select1.selectedIndex];
    var select1_control = 1;

    var var1 = item.getAttribute('data-var1');

    resultBox_hidden.value = (parseFloat(var1) * parseFloat(select1_control))  ;
    resultBox.value = (parseFloat(var1) * parseFloat(select1_control))  + " ريال";
}
</script>






                                        @include('admin.layouts.table.selectbox', [ 'allforeachs' => $company_types ,  'input_name' => 'name'  ,
                                          'name_select' => ' نوع شرکت ' ,  'value' => '' , 'required'=>'required'  ,
                                          'index_id'=>'company_type_id' ])

                                          <div class="form-group">
                                              <label for="name">نام شرکت درخواستی</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام شرکت درخواستی  " name="name" value="{{ old('name') }}">
                                          </div>





<div class="form-group ">
    <label for="date">   تاریخ تولد میلادی </label>

      <input class="form-control" id="date" name="birthday" placeholder="YYYY/MM/DD" type="text" {{ old('birthday') }} style="direction: ltr;"/>

   </div>


   <div class="form-group">
    <label for="email">ایمیل</label>
    <input type="text" class="form-control" id="email" autocomplete="off"
        placeholder=" ایمیل " name="email" value="{{ old('email') }}">
</div>



<div class="form-group">
<label for="tellir">شماره تلفن </label>
<input type="text" class="form-control" id="tellir" autocomplete="off"
placeholder=" شماره تلفن   " name="tellir" value="{{ old('tellir') }}">
</div>

<div class="form-group">
<label for="codepir">کدپستی </label>
<input type="text" class="form-control" id="codepir" autocomplete="off"
placeholder="  کدپستی   " name="codepir" value="{{ old('codepir') }}">
</div>


<div class="form-group">
<label for="adresir"> آدرس پستی </label>
<textarea class="form-control" id="adresir" name="adresir"
rows="5">{{old('adresir')}}</textarea>
</div>



                                    </div>

   <div class="col-lg-2"></div>
   <div class="col-lg-5">





<hr>
<div class="form-group" >
    <label for="extr">آیا قبلا از خدمات ما استفاده کرده اید؟</label>
</div>

<div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="before"
            id="before" value="yes"    >
        بله
    </label>
</div>

<div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="before"
            id="before" value="no" checked   >
        خیر
    </label>
</div>


<hr>
<div class="form-group" >
    <label for="extr">چطور با ما آشنا شدید؟</label>
</div>



<div class="form-group">

    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="reach"
                id="reach" value="google">
             گوگل
        </label>
    </div>

    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="reach"
                id="reach" value="frind">
             دوستان
        </label>
    </div>

    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="reach"
                id="reach" value="internet">
             تبلیغات اینترنت
        </label>
    </div>

    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="reach"
                id="reach" value="other" checked >
             سایر
        </label>
    </div>


</div>



<hr>
<div class="form-group" >
    <label for="extr">خدماتی که می خواهید استفاده نمایید را لطفا انتخاب نمایید</label>
</div>



<div>



    <script>
        function totalIt() {
      var input = document.getElementsByName("company_service[]");
      var resulttotal = document.getElementById('resulttotal');
      var resulttotal_hidden = document.getElementById('resulttotal_hidden');

      var total = 0;
      for (var i = 0; i < input.length; i++) {
        if (input[i].checked) {
        //   total += parseFloat(input[i].value);


var idvalue = parseFloat(input[i].value);

<?php
foreach ($company_services as $company_service ){
?>
var company_service_id = <?php echo $company_service->id; ?>;
if(company_service_id==idvalue){
    var orgvalue = <?php echo $company_service->price;?> ;
}

<?php
  }
 ?>
     total += orgvalue;
        }
      }


    //   document.getElementsByName("total")[0].value =  total.toFixed(0)+ " ريال " ;
    resulttotal_hidden.value = parseFloat(total);
    resulttotal.value = parseFloat(total)  + " ريال";





    }
    </script>



    @foreach ($company_services as $company_service )
    <div class="form-check form-check-inline">
        <label class="form-check-label">
         <input type="checkbox" class="form-check-input" name="company_service[]" value="{{$company_service->id}}"  onclick="totalIt()" >
         {{$company_service->name}}
        </label>
    </div>
    @endforeach

</div>


    <div class="form-group">
        <input type="hidden" name="qty" id="resulttotal_hidden">
    <label for="name">هزینه خدمات</label>
    <input type="text" class="form-control"  autocomplete="off"
    placeholder=" هزینه کل "  readonly="readonly" type="text"   id="resulttotal" value="0 ریال " disabled  >
    </div>

<script>
    window.sumInputs = function() {
    var inputs = document.getElementsByName('qty'),
        result = document.getElementById('totall'),
        sum = 0;
    for(var i=0; i<inputs.length; i++) {
        var ip = inputs[i];
        if (ip.name && ip.name.indexOf("totall") < 0) {
            sum += parseInt(ip.value) || 0;
        }
    }
    result.value = sum + " ريال";
}
</script>

<hr>


<div class="form-group">
جمع کل هزینه : <input type="text" name="totall" id="totall" disabled />
<a class="btn btn-primary" href="javascript:sumInputs()">محاسبه هزینه</a>
<div>


<div>

  <hr>




  @include('admin.layouts.table.multiupload', [ $label='آپلود فایل' , ])

  <hr>

  @include('index.layouts.elementor.txtalert', [ 'id' => '18' ])

</div>







                                          <div class="card-footer">
                                              <a href="{{ route('admin.faq.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ثبت</button>
                                          </div>


                                      </div>


                                  </div>

                              </form>



                              @slot('script')

                              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
                              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

                              <script>
                                  $(document).ready(function(){
                                      var date_input=$('input[id="date"]'); //our date input has the name "date"
                                      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                                      date_input.datepicker({
                                          format: 'yyyy/mm/dd',
                                          container: container,
                                          todayHighlight: true,
                                          autoclose: true,
                                      })
                                  })
                              </script>

                                    @endslot

