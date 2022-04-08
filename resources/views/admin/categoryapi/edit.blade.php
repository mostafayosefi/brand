  @component('admin.layouts.content', [
      'title' => 'ویرایش دسته بندی وب سرویس',
      'tabTitle' => ' ویرایش دسته بندی وب سرویس',
      'breadcrumb' => [['title' => 'لیست دسته بندی وب سرویس ', 'url' => route('admin.content.categoryapi.index')], ['title' => 'ویرایش دسته بندی وب سرویس  ',
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
                                  <h4>ویرایش دسته بندی وب سرویس </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.content.categoryapi.update', $categoryapi) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">



                                        @include('admin.layouts.table.selectbox', [ 'allforeachs' => $documents ,  'input_name' => 'documentname'  ,  'name_select' => 'نام داکیومنت' ,  'value' =>  $categoryapi->document_id , 'required'=>'required'  , 'index_id'=>'document_id' ])


                                        <div class="form-group">
                                            <label for="name">نام دسته بندی وب سرویس</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder=" نام دسته بندی وب سرویس  " name="name" value="{{$categoryapi->name}}">
                                        </div>


                                        <div class="form-group">
                                            <label for="url">نام لینک</label>
                                            <input type="text" class="form-control" id="url" autocomplete="off"
                                                placeholder=" نام لینک  " name="url" value="{{$categoryapi->url}}">
                                        </div>



                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.content.categoryapi.index') }}" class="btn btn-danger">بازگشت</a>
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
