@component('admin.layouts.content', [
    'title' => 'ویرایش خدمات برند',
    'tabTitle' => 'ویرایش خدمات برند',
    'breadcrumb' => [['title' => 'لیست خدمات برند    ', 'url' => route('admin.servicebrand.index')], ['title' => 'ویرایش خدمات برند',
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
                                  <h4>  دسته خدمات برند     </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.servicebrand.update', $servicebrand) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">



                                        <div class="form-group">
                                            <label for="name">نام خدمات برند</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام خدمات برند" name="name" value="{{$servicebrand->name}}">
                                        </div>

                                        @include('admin.layouts.table.java_price')

                                        <div class="form-group">
                                            <label for="price">هزینه خدمات برند (به ریال)</label>
                                            <input type="text" class="form-control" id="price" autocomplete="off"
                                                placeholder="هزینه خدمات برند" name="price" value="{{$servicebrand->price}}"
                                                onkeyup="separateNum(this.value,this);"  >
                                        </div>




                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.servicebrand.index') }}" class="btn btn-danger">بازگشت</a>
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
