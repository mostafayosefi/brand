
@if($type=='subcat')
@if($lists)

<table class="table table-bordered">
    <thead>
        <tr>
            <th> ردیف </th>
            <th> نام طبقه </th>
            <th>   خدمات </th>
        </tr>
    </thead>
    <tbody>

@foreach ( $lists as $key => $admin )
@if($admin->show=='1')

 <tr>
    <td>{{ $key + 1 }}</td>
    <td>{{$admin->subcategorybrand->name}} </td>
     <td>
        <div class="alert alert-primary" role="alert">
            @php echo $admin->subcategorybrand->text; @endphp
        </div>
         </td>
 </tr>
@endif
@endforeach

</tbody>
</table>

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




