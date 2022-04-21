  @component('admin.layouts.content', [
      'title' => 'ثبت پلان شرکت',
      'tabTitle' => 'ثبت پلان شرکت',
      'breadcrumb' => [['title' => 'لیست پلانهای شرکت     ', 'url' => route('admin.company.plan.index')], ['title' => 'ثبت پلان شرکت',
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
                                  <h4> ثبت پلان شرکت </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="search-form" method="POST" action="{{ route('admin.company.plan.store') }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="name">نام پلان شرکت</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام پلان شرکت" name="name" value="{{ old('name') }}">
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

@include('admin.layouts.table.java_price')

                                        <div class="form-group">
                                            <label for="price">هزینه پلان شرکت (به ریال)</label>
                                            <input type="text" class="form-control" id="price" autocomplete="off"
                                                placeholder="هزینه پلان شرکت" name="price"  onkeyup="separateNum(this.value,this);"    value="{{ old('price') }}">
                                        </div>



                                        <hr>
                                        <div class="form-group" >
                                        <label for="exampleInputUsername1"> آپلود عکس </label>
                                        <input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
                                        </div>



                                          <div class="card-footer">
                                              <a href="{{ route('admin.company.plan.index') }}" class="btn btn-danger">بازگشت</a>
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
