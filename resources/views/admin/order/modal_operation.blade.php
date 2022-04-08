
@if($operat=='accept')
<button type="button" class="btn btn-success  "  data-toggle="modal" data-target="#accept" ><i data-feather="check-square"></i>
 تایید سفارش  </button>
@endif

@if($operat=='cancel')
<button type="button" class="btn btn-danger  "  data-toggle="modal" data-target="#cancel" ><i data-feather="alert-circle"></i>
 لغو سفارش  </button>
@endif


@if($operat=='accept')
<div class="modal fade bd-example-modal-lg" id="accept" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel"> تایید سفارش  </h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">


    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" method="POST" action="{{$route}}" >
                    @csrf
                    @method('PUT')
 

                        <div class="form-group row">
                            <div class="col-md-2">
                              </div>

                             <div class="col-md-8">
<label>توضیحات تایید سفارش</label>
<textarea name="text" class="form-control" rows="8"  required="required" >سفارش شما با موفقیت تایید شد</textarea>
<button type="submit" class="btn btn-primary btn-block">تایید سفارش <i data-feather="check-square"></i></button>
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

@endif


@if($operat=='cancel')
<div class="modal fade bd-example-modal-lg" id="cancel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel"> لغو سفارش  </h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">


    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" method="POST" action="{{$route}}" >
                    @csrf
                    @method('PUT')
                        <div class="form-group row">
                            <div class="col-md-2">
                              </div>


                            <div class="col-md-8">
<label>توضیحات لغو سفارش</label>
<textarea name="text" class="form-control" rows="8"  required="required" >سفارش شما لغو شد</textarea>
<button type="submit" class="btn btn-danger btn-block"> لغو سفارش <i data-feather="alert-circle"></i></button>
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

@endif
