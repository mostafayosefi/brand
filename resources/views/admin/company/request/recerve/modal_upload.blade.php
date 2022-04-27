
<button type="button" class="btn btn-success  "  data-toggle="modal" data-target="#upload" ><i data-feather="upload"></i>
  آپلود مدارک شرکت  </button>


<div class="modal fade bd-example-modal-lg" id="upload" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">  آپلود مدارک شرکت </h5>
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

                             <div class="col-md-12">



  @include('admin.company.request.recerve.multiupload', [ $label='آپلود مدارک شرکت' , ])
<br>
<hr>

<button type="submit" class="btn btn-primary btn-block">  آپلود مدارک <i data-feather="check-square"></i></button>
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


