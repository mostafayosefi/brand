  @component('admin.layouts.content', [
      'title' => 'ثبت نوع شرکت',
      'tabTitle' => 'ثبت نوع شرکت',
      'breadcrumb' => [['title' => 'لیست انواع شرکت     ', 'url' => route('admin.company.type.index')], ['title' => 'ثبت نوع شرکت',
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
                                  <h4> ثبت نوع شرکت </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="search-form" method="POST" action="{{ route('admin.company.type.store') }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="name">نام نوع شرکت</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام نوع شرکت" name="name" value="{{ old('name') }}">
                                        </div>


                                        <div class="form-group">
                                            <label for="text"> خلاصه توضیحات</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="خلاصه توضیحات" name="short" rows="6"
                                                 >{{ old('short') }}</textarea>
                                        </div>



                                        <div class="form-group">
                                            <label for="text"> توضیحات</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                  name="text"  id="tinymceExample" rows="8"
                                                 >{{ old('text') }}</textarea>
                                        </div>





                                          <div class="card-footer">
                                              <a href="{{ route('admin.company.type.index') }}" class="btn btn-danger">بازگشت</a>
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
       <script src="{{ asset('template/assets/vendors/select2/select2.min.js') }}"></script>
       <script src="{{ asset('template/assets/js/select2.js') }}"></script>



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



      @endslot
  @endcomponent
