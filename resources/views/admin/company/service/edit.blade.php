@component('admin.layouts.content', [
    'title' => 'ویرایش خدمات شرکت',
    'tabTitle' => 'ویرایش خدمات شرکت',
    'breadcrumb' => [['title' => 'لیست خدمات شرکت    ', 'url' => route('admin.company.service.index')], ['title' => 'ویرایش خدمات شرکت',
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
                                  <h4>  دسته خدمات شرکت     </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.company.service.update', $company_service) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">



                                        <div class="form-group">
                                            <label for="name">نام خدمات شرکت</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام خدمات شرکت" name="name" value="{{$company_service->name}}">
                                        </div>

                                        @include('admin.layouts.table.java_price')

                                        <div class="form-group">
                                            <label for="price">هزینه خدمات شرکت (به ریال)</label>
                                            <input type="text" class="form-control" id="price" autocomplete="off"
                                                placeholder="هزینه خدمات شرکت" name="price" value="{{$company_service->price}}"
                                                onkeyup="separateNum(this.value,this);"  >
                                        </div>




                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.company.service.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ویرایش</button>
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
