
<span type="button"  class="badge badge-info-muted"  data-toggle="modal" data-target="#upload" ><i data-feather="alert-circle"></i>
 راهنمای سریع    </span>





<div class="modal fade bd-example-modal-lg" id="upload" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">  راهنما</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">


    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">

                                <div class="form-group row" >

                                    <div class="col-md-12">
                                        <label for="categorybrand">   زیرگروه دسته بندی برند     </label>
                                        <select name="help_sup"
                                        placeholder=""   aria-required="true"    style="font-size: 18px;"
                                        onchange="fetch_myselect_5(this.value);"    id="view_mycategorybrand_help"     >

                                        <option value="">لطفا  زیرگروه دسته برند را انتخاب نمایید  </option>



                                        @foreach ($subcategorybrands as $subcategorybrand  )
                                        @if($subcategorybrand->categorybrand_id=='3')
                                        <option value="{{$subcategorybrand->id}}"
                                             {{(old('subcategorybrand_id')  == $subcategorybrand->id ? 'selected' : '')}}   >{{$subcategorybrand->name}}</option>
                                       @endif
                                       @endforeach


                                    </select>
                                    </div>

                                    </div>


                        <div class="form-group row"  id="view_mysubcategorybrand_help" >
                                        <div class="col-md-12">

                                        </div>

                            </div>




 <br>
<hr>

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


