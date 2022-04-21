@component('admin.layouts.content', [
    'title' => 'ویرایش نوع شرکت',
    'tabTitle' => 'ویرایش نوع شرکت',
    'breadcrumb' => [['title' => 'لیست انواع شرکت    ', 'url' => route('admin.company.type.index')], ['title' => 'ویرایش نوع شرکت',
    'class' => 'active']],
    ])


      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">



                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>  ویرایش نوع شرکت    </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.company.type.update', $company_type) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">



                                        <div class="form-group">
                                            <label for="name">نام نوع شرکت</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام نوع شرکت" name="name" value="{{$company_type->name}}">
                                        </div>



                                        <div class="form-group">
                                            <label for="text"> خلاصه توضیحات</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="خلاصه توضیحات" name="short" rows="6"
                                                 >{{$company_type->short}}</textarea>
                                        </div>



                                        <div class="form-group">
                                            <label for="text"> توضیحات</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                  name="text"  id="tinymceExample" rows="8"
                                                 >{{$company_type->text}}</textarea>
                                        </div>
 

                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.company.type.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ویرایش</button>
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

      @endslot
  @endcomponent
