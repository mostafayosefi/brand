
@if($operat=='accept')
<button type="button" class="btn btn-success  "  data-toggle="modal" data-target="#accept" ><i data-feather="check-square"></i>
     {{$nameoper}} </button>
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
  <h5 class="modal-title" id="exampleModalLabel">{{$nameoper}} </h5>
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





   <script>
    function separateNum(value, input) {
     /* seprate number input 3 number */
     var nStr = value + '';
     nStr = nStr.replace(/\,/g, "");
     x = nStr.split('.');
     x1 = x[0];
     x2 = x.length > 1 ? '.' + x[1] : '';
     var rgx = /(\d+)(\d{3})/;
     while (rgx.test(x1)) {
         x1 = x1.replace(rgx, '$1' + ',' + '$2');
     }
     if (input !== undefined) {

         input.value = x1 + x2;
     } else {
         return x1 + x2;
     }
 }
</script>



<input type="hidden" name="name" value="{{$order->name}}" />
<input type="hidden" name="price" value="{{$order->price}}" />

                                <div class="form-group">
                                    <label for="price"> هزینه سفارش به ریال    </label>
  <input type="text" class="form-control" id="price" autocomplete="off"   onkeyup="separateNum(this.value,this);"     maxlength="10"
               @if($order->status!='register') disabled="" @endif                          placeholder=" هزینه سفارش به ریال      " name="price" value="{{ old('price' , $order->price) }}">
                                </div>




                                <div class="form-group">
<label>توضیحات تایید سفارش</label>
<textarea name="text" class="form-control" rows="8"  required="required" > {{status_req($order->status,'text')}}</textarea>
                                </div>

<button type="submit" class="btn btn-primary btn-block"> {{$nameoper}} <i data-feather="check-square"></i></button>
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
                                <input type="hidden" name="name" value="{{$order->name}}" />
                                <input type="hidden" name="price" value="{{$order->price}}" />


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
