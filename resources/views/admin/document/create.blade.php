  @component('admin.layouts.content', [
      'title' => 'ایجاد داکیومنت جدید',
      'tabTitle' => 'ایجاد داکیومنت جدید',
      'breadcrumb' => [['title' => 'لیست سوالات متداول', 'url' => route('admin.content.document.index')], ['title' => 'ایجاد داکیومنت جدید',
      'class' => 'active']],
      ])


      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-3 grid-margin stretch-card">
                  </div>


                  <div class="col-md-6 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> ایجاد داکیومنت جدید </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.content.document.store') }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


                                          <div class="form-group">
                                              <label for="documentname">نام داکیومنت</label>
                                              <input type="text" class="form-control" id="documentname" autocomplete="off"
                                                  placeholder=" نام داکیومنت  " name="documentname" value="{{ old('documentname') }}">
                                          </div>




                                          <div class="card-footer">
                                              <a href="{{ route('admin.content.document.index') }}" class="btn btn-danger">بازگشت</a>
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
      @endslot
  @endcomponent
