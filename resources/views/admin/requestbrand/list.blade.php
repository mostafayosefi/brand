
@if($type=='subcat')
@if($lists)


@foreach ( $lists as $key => $admin )
@if($admin->show=='1')


        <span type="button"  class="badge badge-info-muted"  data-toggle="modal" data-target="#tabaghat{{$admin->id}}" ><i data-feather="alert-circle"></i>
            {{$admin->subcategorybrand->name}}    </span>





           <div class="modal fade bd-example-modal-lg" id="tabaghat{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                 <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">  اطلاعات طبقات</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">


            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">




                            <div class="form-group row"  id="view_mysubcategorybrand_help" >
                                <div class="col-md-12">

                                    <div class="alert alert-primary" role="alert">
                                        <h5>{{$admin->subcategorybrand->name}} </h5>
                                        @php echo $admin->subcategorybrand->text; @endphp
                                    </div>
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


@endif
@endforeach


@endif
@endif



@if($type=='file')
@if($lists)

<table class="table table-bordered">
    <thead>
        <tr>
            <th> ردیف </th>
            <th> مشاهده فایل</th>
        </tr>
    </thead>
    <tbody>

@foreach ( $lists as $key => $admin )

 <tr>
    <td>{{ $key + 1 }}</td>

    <td>
        <a href="{{asset($admin->name)}}" target="_blank" >
        <span   class="btn btn-primary">مشاهده فایل</span>
       </a>
       </td>

 </tr>
@endforeach

</tbody>
</table>

@endif
@endif




