@component('admin.layouts.content',[
    'title'=>'مشاهده دسته بندی برند',
    'tabTitle'=>' مشاهده دسته بندی برند   ',
    'breadcrumb'=>[
            ['title'=>'مشاهده دسته بندی برند','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot







<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست دسته بندی برند      </h6>
          <div class="table-responsive">

@if($categorybrands)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th> نام دسته بندی</th>
                  <th>تاریخ ایجاد</th>
                  <th>ویرایش</th>
                  <th>مشاهده زیرگروه</th>
                  <th>وضعیت</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($categorybrands as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{ date_frmat($admin->created_at) }}</td>

<td><a href="{{ route('admin.categorybrand.edit', $admin) }}">
<span class="" >  <i data-feather="edit"></i></span> </a></td>

<td><a href="{{ route('admin.categorybrand.show', $admin) }}">
<span class="" >  <i data-feather="eye"></i></span> </a></td>


<td>

    @include('admin.layouts.table.statusacount', [$admin ,'route' =>
    route('admin.categorybrand.status', $admin->id ) , 'myname' => ' دسته برند '.$admin->name.' ' ])
</td>

<td>

@php $admin['title'] = $admin->name;  @endphp
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.categorybrand.destroy', $admin) , 'myname' => $admin->name ])

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
