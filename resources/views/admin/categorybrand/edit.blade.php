@component('admin.layouts.content', [
    'title' => 'ویرایش '.$categorybrand->name,
    'tabTitle' => 'ویرایش '.$categorybrand->name,
    'breadcrumb' => [
        ['title' => 'لیست دسته بندی برند    ', 'url' => route('admin.categorybrand.index')],
        ['title' =>  'ویرایش '.$categorybrand->name,
    'class' => 'active']],
    ])



      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-1 grid-margin stretch-card">
                  </div>


                  <div class="col-md-10 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>   ویرایش {{$categorybrand->name}}     </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.categorybrand.update', $categorybrand) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">



                                        <div class="form-group">
                                            <label for="name">نام دسته بندی برند</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام دسته بندی برند" name="name" value="{{$categorybrand->name}}">
                                        </div>



                                        <div class="form-group">
                                            <label for="text"> توضیحات</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="توضیحات" name="text"  id="tinymceExample" rows="8"
                                                 >{{$categorybrand->text}}</textarea>
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
