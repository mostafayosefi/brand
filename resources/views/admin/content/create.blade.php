  @component('admin.layouts.content', [
      'title' => 'ایجاد محتوا وب سرویس',
      'tabTitle' => 'ایجاد محتوا وب سرویس',
      'breadcrumb' => [['title' => 'لیست محتوا وب سرویس ', 'url' => route('admin.content.webservice.index')], ['title' => 'ایجاد محتوا وب سرویس',
      'class' => 'active']],
      ])



@slot('style')
 <link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">
   @endslot

      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">



                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> ایجاد محتوا وب سرویس </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.content.webservice.store') }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


  @include('admin.layouts.table.selectbox', [ 'allforeachs' => $categoryapis ,  'input_name' => 'name'  ,  'name_select' => 'دسته بندی وب سرویس' ,  'value' => '' , 'required'=>'required'  , 'index_id'=>'categoryapi_id' ])


  <div class="form-group">
    <label for="title">نام وب سرویس</label>
    <input type="text" class="form-control" id="title" autocomplete="off"
        placeholder=" نام وب سرویس   " name="title" value="{{ old('title') }}">
</div>

<div class="form-group">
    <label for="url">Url</label>
    <input type="text" class="form-control" id="url" autocomplete="off"
        placeholder=" Url   " name="url" value="{{ old('url') }}">
</div>



{{--                                         <div class="form-group">
                                            <label for="link">نمونه کد</label>
                                            <input type="text" class="form-control" id="link" autocomplete="off"
                                                placeholder=" نمونه کد  " name="link" value="{{ old('link') }}">
                                        </div>
 --}}

                                        <div class="form-group">
                                            <label for="text"> نمونه کد</label>
                                            <textarea class="form-control"   autocomplete="off"
                                                placeholder="نمونه کد" name="link" rows="8" id=""
                                                dir="ltr"     >{{ old('link') }}</textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="text"> متن</label>
                                            <textarea class="form-control"   autocomplete="off"
                                                placeholder="متن" name="text" rows="8" id="tinymceExample"
                                                 >{{ old('text') }}</textarea>
                                        </div>






                                          <div class="card-footer">
                                              <a href="{{ route('admin.content.webservice.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ثبت</button>
                                          </div>


                                      </div>


                                  </div>

                              </form>



                          </div>
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



 
       <script src="{{ asset('template/assets/vendors/select2/select2.min.js') }}"></script>
       <script src="{{ asset('template/assets/js/select2.js') }}"></script>
      @endslot
  @endcomponent
