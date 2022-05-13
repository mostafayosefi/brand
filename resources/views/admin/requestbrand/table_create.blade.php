
@slot('style')





<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('template/assets/css/demo_1/style.css') }}">

<script>
    function fetch_myselect_4(vall){
        var vall = document.getElementById("mycategorybrand").value;$.ajax({
            type: 'get',
            url: '/fetch/requestbrand/0/'+vall+'',
        data: {get_option:vall},
        success: function (response) {document.getElementById("view_mycategorybrand").innerHTML=response;}
    });
        }
</script>

<script>
    function fetch_myselect_5(valle){
        var valle = document.getElementById("view_mycategorybrand_help").value;


        $.ajax({
            type: 'get',
            url: '/fetch/subcategorybrand/0/'+valle+'',
        data: {get_option:valle},
        success: function (response) {document.getElementById("view_mysubcategorybrand_help").innerHTML=response;}
    });
        }
</script>





@endslot



                              <form class="forms-sample" method="POST" action="{{$route}}"    onchange="totalIt()"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf


                                  <div class="row">

                                    <div class="col-lg-12">
                                        @include('index.layouts.elementor.txtalert', [ 'id' => '15' ])

                                    </div>
                                    </div>


                                  <div class="row">

                                    <div class="col-lg-5">



                                        @if($arou=='admin')
                                        @include('admin.layouts.table.selectbox', [ 'allforeachs' => $users ,  'input_name' => 'name'  ,
                                          'name_select' => ' کاربر ' ,  'value' =>  old('user_id')  , 'required'=>'required'  ,
                                          'index_id'=>'user_id' ])
                                        @endif



                                          <div class="form-group">
                                              <label for="name">نام برند درخواستی</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام برند درخواستی  " name="name" value="{{ old('name') }}"   onclick="totalIt()">
                                          </div>


                                          {{-- <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="categorybrand">   دسته بندی برند     </label>

                                                <select name="categorybrand_id" id="mycategorybrand"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder=""   aria-required="true"  onchange="fetch_myselect_4(this.value);"   style="font-size: 18px;"   >
                                                 <option value="">لطفا دسته برند را انتخاب نمایید  </option>
                                                 @foreach ($categorybrands as $categorybrand  )
                                                <option value="{{$categorybrand->id}}"
                                                       >{{$categorybrand->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            </div>   --}}




                                            <div class="form-group row" >

                                                <div class="col-md-12">
                                                    <label for="view_mycategorybrand">   طبقات دسته بندی برند     </label>
                                                    <select name="subcategorybrand[]"  multiple="multiple"
                                                    class="js-example-basic-multiple w-100"
                                                    placeholder=""   aria-required="true"      style="font-size: 18px;"
                                                    id="view_mycategorybrand"      onclick="totalIt()"
                                                       >


                                                    @foreach ($mysubcategorybrands as $subcategorybrand  )

                                                         <option value="{{ $subcategorybrand->id }}"   data-var1="1250"
                                                            {{is_array(old('subcategorybrand',$mysubcategorybrands??[]))&&in_array($subcategorybrand->id,old('subcategorybrand',$subcategorybrand_data??[]))?'selected':null}}>{{$subcategorybrand->name}}</option>

                                                         @endforeach



                                                </select>
                                                </div>

                                                </div>






                                                <div class="form-group">


                                                    <label for="name">هزینه پلان (به ریال)</label>
                                                    <input type="text" class="form-control"  autocomplete="off"  id="resultplan"
                                                    placeholder=" هزینه پلان " name="qty"   readonly="true" type="text"  value="0 ریال " disabled  >
                                                    </div>






 @include('admin.requestbrand.modal_help', [$subcategorybrands ])


 <a href="{{asset('upload/images/help/sinf.pdf')}}" target="_blank" >
    <span   class="btn btn-success">مشاهده فایل راهنما</span>
   </a>


<br><hr>



<div class="form-group ">
    <label for="date">   تاریخ تولد میلادی </label>

      <input class="form-control" id="date" name="birthday" placeholder="YYYY/MM/DD" type="text" value="{{old('birthday')}}"  style="direction: ltr;"/>

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





<script>
    function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>




<hr>
<div class="form-group" >
    <label for="extr">آیا آدرس خارج از کشور دارید؟</label>
</div>



<div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="in"
            id="in" value="1"  onclick="show2();" >
        بله
    </label>
</div>

<div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="in"
            id="in" value="2"  onclick="show1();" >
        خیر
    </label>
</div>



<div  id="div1"  style="display: none;" >

    <div class="form-group">
        <label for="tellin">شماره تلفن خارج از ایران</label>
        <input type="text" class="form-control" id="tellin" autocomplete="off"
            placeholder=" شماره تلفن خارج از ایران  " name="tellin" value="{{ old('tellin') }}">
    </div>

    <div class="form-group">
        <label for="codepin">کدپستی خارج از ایران</label>
        <input type="text" class="form-control" id="codepin" autocomplete="off"
            placeholder="  کدپستی خارج از ایران  " name="codepin" value="{{ old('codepin') }}">
    </div>


    <div class="form-group">
        <label for="adresin"> آدرس پستی خارج از ایران</label>
        <textarea class="form-control" id="adresin" name="adresin"
            rows="5">{{old('adresin')}}</textarea>
    </div>

</div>


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


    @php $jam=0; @endphp

    @foreach ($servicebrands as $servicebrand )
    <div class="form-check form-check-inline">
        <label class="form-check-label">
         <input type="checkbox" class="form-check-input" name="servicebrand[]" value="{{$servicebrand->id}}"  onclick="totalIt()"
         {{is_array(old('servicebrand',$servicebrands??[]))&&in_array($servicebrand->id,old('servicebrand',$servicebrand_data??[]))?'checked':null}} >
         {{$servicebrand->name}}
        </label>
    </div>

@if(in_array($servicebrand->id,old('servicebrand',$servicebrand_data??[])))
@php $jam=$jam+$servicebrand->price; @endphp

@endif

    @endforeach

</div>







    <div class="form-group">
        <input type="hidden" name="qty" id="resulttotal_hidden">

    <label for="name">هزینه خدمات</label>
    <input type="text" class="form-control"  autocomplete="off"
    placeholder=" هزینه کل "  readonly="readonly" type="text"    id="resulttotal" value="{{$jam}} ریال " disabled  >
    </div>


<script>


function totalIt() {

$(function(){
  $('#view_mycategorybrand').change(function() {
    // var sum = $(this).find(':checked').map(function() { return parseInt(this.value, 10); }).get().reduce(function(a,b) { return a + b; });


    var i=0;
    var c = <?php echo $setting->mngfinical->priceplan; ?>;
    var sum = $(this).find(':checked').map(function() { return parseInt(<?php echo $setting->mngfinical->priceplan; ?>, 10); }).get().reduce(function(a,b) { i++;
        if(i=='0'){var jam = 0;}else{var jam = a + b ;}
         return i * c;
        });

    var resultplan = document.getElementById('resultplan');
    $('#resultplan').val(sum);
  });

});

  var input = document.getElementsByName("servicebrand[]");
  var total = 0;
  for (var i = 1; i < input.length; i++) {
    if (input[i].checked) {
var idvalue = parseFloat(input[i].value);
<?php foreach ($servicebrands as $servicebrand ){ ?>
var servicebrand_id = <?php echo $servicebrand->id; ?>;
if(servicebrand_id==idvalue){
var orgvalue = <?php echo $servicebrand->price;?> ;
}
<?php } ?>
  total += orgvalue;


}
}

    //   document.getElementsByName("total")[0].value =  total.toFixed(0)+ " ريال " ;
    resulttotal_hidden.value = parseFloat(total);
    resulttotal.value = parseFloat(total)  + " ريال";




}
</script>










<div>

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

  @include('index.layouts.elementor.txtalert', [ 'id' => '17' ])

</div>



<div class="card-footer">
                                                    <a href="{{ route('admin.faq.index') }}" class="btn btn-danger">بازگشت</a>
                                                    <button type="submit" class="btn btn-primary float-right">ثبت</button>
                                                </div>


                                            </div>


                                        </div>

                                    </form>






                              @slot('script')





	<script src="{{ asset('template/assets/vendors/select2/select2.min.js') }}"></script>


	<script src="{{ asset('template/assets/js/select2.js') }}"></script>

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




                              <script>




                              </script>

                                    @endslot

