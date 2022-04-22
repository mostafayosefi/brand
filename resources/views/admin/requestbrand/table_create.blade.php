
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
        var valle = document.getElementById("view_mycategorybrand").value;$.ajax({
            type: 'get',
            url: '/fetch/subcategorybrand/0/'+valle+'',
        data: {get_option:valle},
        success: function (response) {document.getElementById("view_mysubcategorybrand").innerHTML=response;}
    });
        }
</script>




@endslot



                              <form class="forms-sample" method="POST" action="{{$route}}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                    <div class="col-lg-5">



                                        @if($arou=='admin')
                                        @include('admin.layouts.table.selectbox', [ 'allforeachs' => $users ,  'input_name' => 'name'  ,
                                          'name_select' => ' کاربر ' ,  'value' => '' , 'required'=>'required'  ,
                                          'index_id'=>'user_id' ])
                                        @endif



                                          <div class="form-group">
                                              <label for="name">نام برند درخواستی</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام برند درخواستی  " name="name" value="{{ old('name') }}">
                                          </div>



                                          <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="categorybrand">   دسته بندی برند     </label>

                                                <select name="categorybrand_id" id="mycategorybrand"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder=""   aria-required="true"  onchange="fetch_myselect_4(this.value);"   style="font-size: 18px;"   >
                                                 <option value="">لطفا دسته برند را انتخاب نمایید  </option>
                                                 @foreach ($categorybrands as $categorybrand  )
                                                <option value="{{$categorybrand->id}}"
                                                     {{(old('categorybrand_id')  == $categorybrand->id ? 'selected' : '')}}   >{{$categorybrand->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            </div>



                                        <div class="form-group row" >

                                        <div class="col-md-12">
                                            <label for="categorybrand">   زیرگروه دسته بندی برند     </label>
                                            <select name="subcategorybrand_id"  multiple="multiple"
                                            class="js-example-basic-multiple w-100"
                                            placeholder=""   aria-required="true"    style="font-size: 18px;"    onchange="fetch_myselect_5(this.value);"   id="view_mycategorybrand"   >

                                            <option value="">لطفا  زیرگروه دسته برند را انتخاب نمایید  </option>

                                        </select>
                                        </div>

                                        </div>


                                        <div class="form-group row"  id="view_mysubcategorybrand" >
                                            <div class="col-md-12">

                                    </div>

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



    <script>
        function totalIt() {
      var input = document.getElementsByName("servicebrand[]");
      var total = 0;
      for (var i = 0; i < input.length; i++) {
        if (input[i].checked) {
        //   total += parseFloat(input[i].value);


var idvalue = parseFloat(input[i].value);

<?php
foreach ($servicebrands as $servicebrand ){
?>
var servicebrand_id = <?php echo $servicebrand->id; ?>;
if(servicebrand_id==idvalue){
    var orgvalue = <?php echo $servicebrand->price;?> ;
}

<?php
        }
 ?>
          total += orgvalue;
        }
      }


      document.getElementsByName("total")[0].value =  total.toFixed(0)+ " ريال " ;





    }
    </script>



    @foreach ($servicebrands as $servicebrand )
    <div class="form-check form-check-inline">
        <label class="form-check-label">
         <input type="checkbox" class="form-check-input" name="servicebrand[]" value="{{$servicebrand->id}}"  onclick="totalIt()" >
         {{$servicebrand->name}}
        </label>
    </div>
    @endforeach

</div>


    <div class="form-group">
    <label for="name">هزینه کل</label>
    <input type="text" class="form-control"  autocomplete="off"
    placeholder=" هزینه کل "  readonly="readonly" type="text" name="total" value="0 ریال " disabled  >
    </div>




<div>

  <hr>


  @include('admin.layouts.table.multiupload', [ $label='آپلود فابل' , ])

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


                              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js') }}"></script>
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

