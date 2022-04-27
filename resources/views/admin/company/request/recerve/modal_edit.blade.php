
<button type="button" class="btn btn-primary  "  data-toggle="modal" data-target="#active" ><i data-feather="edit-3"></i>
    ویرایش اطلاعات شرکت  </button>


<div class="modal fade bd-example-modal-lg" id="active" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel"> ویرایش اطلاعت شرکت </h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">


    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">

 <form class="forms-sample" method="POST" action="{{$route}}"
  enctype="multipart/form-data" onsubmit="return Validate(this);">
 @csrf


                        <div class="form-group row">
                            <div class="col-md-2">
                              </div>

                             <div class="col-md-8">


   <div class="form-group">
       <label for="number"> شماره Number   </label>
       <input type="text" class="form-control" id="number" autocomplete="off"
       placeholder=" شماره Number      " name="number" value="{{$order->number}}" required>
  </div>


   <div class="form-group">
       <label for="authcode"> کدانتقال    </label>
       <input type="text" class="form-control" id="authcode" autocomplete="off"
       placeholder=" کدانتقال" name="authcode" value="{{$order->authcode}}" required>
  </div>





<div class="form-group ">
    <label for="date">   تاریخ اکسپایر  </label>
      <input class="form-control" id="date" name="dateconfermation" placeholder="تاریخ اکسپایر"
      type="text"  value="{{$order->dateconfermation}}"   required />
   </div>




<div class="form-group">
<label>آدرس office ثبت شده</label>
<textarea name="office" class="form-control" rows="8"  required="required" >{{$order->office}}</textarea>
</div>


<button type="submit" class="btn btn-primary btn-block">  ویرایش اطلاعت شرکت <i data-feather="check-square"></i></button>
                             </div>


                            <div class="col-md-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن صفحه</button>

</div>
</div>
</div>
</div>


