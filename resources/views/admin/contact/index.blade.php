@component('admin.layouts.content',[
    'title'=>'مشاهده اکانت های کاربران',
    'tabTitle'=>'مشاهده اکانت های کاربران ',
    'breadcrumb'=>[
            ['title'=>'مشاهده اکانت های کاربران','class' => 'active']
    ]])



@slot('style')
<link data-minify="1" rel='stylesheet'   href="{{ asset('telnum_files/mystyle.css') }}"  type='text/css' media='all' />
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot






<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست اکانت های کاربران</h6>
          <div class="table-responsive">

            @include('admin.layouts.table.list_contact', [$contacts   ])

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
