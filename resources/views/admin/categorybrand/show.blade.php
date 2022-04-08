@component('admin.layouts.content', [
    'title' => $categorybrand->name,
    'tabTitle' => $categorybrand->name,
    'breadcrumb' => [
        ['title' => 'لیست دسته بندی برند    ', 'url' => route('admin.categorybrand.index')],
        ['title' => $categorybrand->name , 'url' => route('admin.categorybrand.show' , $categorybrand->id )],
         ['title' => 'مشاهده زیرگروه'.$categorybrand->name,
    'class' => 'active']],
    ])

@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot



      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-1 grid-margin stretch-card">
                  </div>


                  <div class="col-md-10 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>    ثبت زیرگروه {{$categorybrand->name}}     </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.categorybrand.sub.store', $categorybrand) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


                                        <input type="hidden"  name="categorybrand_id" value="{{$categorybrand->id}}"   />

                                        <div class="form-group">
                                            <label for="name">نام زیرگروه {{$categorybrand->name}}</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام زیرگروه {{$categorybrand->name}}" name="name" value="{{old('name')}}">
                                        </div>



                                        <div class="form-group">
                                            <label for="text"> توضیحات</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="توضیحات" name="text"  id="tinymceExample" rows="8"
                                                 >{{old('text')}}</textarea>
                                        </div>




                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.categorybrand.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ویرایش</button>
                                          </div>


                                      </div>


                                  </div>

                              </form>



                          </div>
                      </div>
                  </div>



                  <div class="col-md-1 grid-margin stretch-card">
                  </div>





              </div>
          </div>
      </div>










<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست زیرگروه {{$categorybrand->name}}       </h6>
          <div class="table-responsive">

@if($categorybrand->subcategorybrands)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th> نام دسته بندی</th>
                  <th>تاریخ ایجاد</th>
                  <th>ویرایش</th>
                  <th>وضعیت</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($categorybrand->subcategorybrands as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{ date_frmat($admin->created_at) }}</td>
                  <td>


<a href="{{ route('admin.categorybrand.sub.edit', $admin) }}">
<span class="btn btn-primary" >  <i data-feather="edit"></i></span>
</a>


</td>

<td>

    @include('admin.layouts.table.statusacount', [$admin ,'route' =>
    route('admin.categorybrand.sub.status', $admin->id ) , 'myname' => ' دسته '.$admin->name.' ' ])
</td>

<td>

@php $admin['title'] = $admin->name;  @endphp
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.categorybrand.sub.destroy', $admin) , 'myname' => $admin->name ])

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

    <script src="{{ asset('template/assets/vendors/core/core.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/tinymce-rtl/tinymce.min.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/simplemde/simplemde.min.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/ace-builds/src-min/ace.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/ace-builds/src-min/theme-chaos.js') }}"></script>

      <script src="{{ asset('template/assets/vendors/feather-icons/feather.min.js') }}"></script>
      <script src="{{ asset('template/assets/js/template.js') }}"></script>
      <script src="{{ asset('template/assets/js/tinymce.js') }}"></script>
      <script src="{{ asset('template/assets/js/tinymce.js') }}"></script>
      <script src="{{ asset('template/assets/js/ace.js') }}"></script>


      <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
      <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
      @endslot


  @endcomponent
