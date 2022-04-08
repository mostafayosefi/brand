@component('admin.layouts.content',[
    'title'=>'مشاهده پسوند دامنه ',
    'tabTitle'=>'مشاهده پسوند دامنه  ',
    'breadcrumb'=>[
            ['title'=>'مشاهده پسوند دامنه','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot




 



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست پسوند دامنه ها </h6>
          <div class="table-responsive">

@if($contentdomains)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>پسوند دامنه</th>
                  <th>  هزینه دامنه</th>
                  <th>آیکن</th>
                  <th>وضعیت</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($contentdomains as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>

<a href="{{ route('admin.content.domain.edit', $admin) }}">
{{$admin->name}} </a></td>

<td>{{$admin->price}} دلار</td>

                    <td>   @include('admin.layouts.table.avatarnul', [  'avatarimage' => $admin->image , 'class'=>'profile-pic' , 'style' => 'height: 60px;width: 60px;'  ])
                    </td>


<td>

    @include('admin.layouts.table.statusacount', [$admin ,'route' =>
    route('admin.content.domain.status', $admin->id ) , 'myname' => ' پسوند دامنه '.$admin->name.' ' ])
</td>


<td>

@php $admin['title'] = $admin->name;  @endphp
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.content.domain.destroy', $admin) , 'myname' => $admin->name ])




</td>

                </tr>
@endforeach



              </tbody>
            </table>

@endif

          </div>
        </div>
      </div>
    </div>
  </div>







    @slot('script')
    <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
    @endslot
@endcomponent
