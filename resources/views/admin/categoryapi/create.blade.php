  @component('admin.layouts.content', [
      'title' => 'ایجاد دسته بندی وب سرویس',
      'tabTitle' => 'ایجاد دسته بندی وب سرویس',
      'breadcrumb' => [['title' => 'لیست دسته بندی وب سرویس ', 'url' => route('admin.content.categoryapi.index')], ['title' => 'ایجاد دسته بندی وب سرویس',
      'class' => 'active']],
      ])


@slot('style')
 <link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">
   @endslot

      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-3 grid-margin stretch-card">
                  </div>


                  <div class="col-md-6 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> ایجاد دسته بندی وب سرویس </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="search-form" method="POST" action="{{ route('admin.content.categoryapi.store') }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


  @include('admin.layouts.table.selectbox', [ 'allforeachs' => $documents ,  'input_name' => 'documentname'  ,  'name_select' => 'نام داکیومنت' ,  'value' => '' , 'required'=>'required'  , 'index_id'=>'document_id' ])


                                        <div class="form-group">
                                            <label for="name">نام دسته بندی</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder=" نام دسته بندی  " name="name" value="{{ old('name') }}">
                                        </div>



                                        <div class="form-group">
                                            <label for="url">نام لینک</label>
                                            <input type="text" class="form-control" id="url" autocomplete="off"
                                                placeholder=" نام لینک   " name="url" value="{{ old('url') }}">
                                        </div>






                                          <div class="card-footer">
                                              <a href="{{ route('admin.content.categoryapi.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ثبت</button>
                                          </div>


                                      </div>


                                  </div>

                              </form>



                          </div>
                      </div>
                  </div>



                  <div class="col-md-3 grid-margin stretch-card">
                  </div>



              </div>
          </div>
      </div>













      @slot('script')
       <script src="{{ asset('template/assets/vendors/select2/select2.min.js') }}"></script>
       <script src="{{ asset('template/assets/js/select2.js') }}"></script>
      @endslot
  @endcomponent
