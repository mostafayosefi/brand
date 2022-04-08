  @component('admin.layouts.content', [
      'title' => 'ویرایش پسوند دامنه',
      'tabTitle' => ' ویرایش پسوند دامنه',
      'breadcrumb' => [['title' => 'لیست پسوند دامنه', 'url' => route('admin.faq.index')], ['title' => 'ویرایش پسوند دامنه  ',
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
                                  <h4>ویرایش پسوند دامنه </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.content.domain.update', $contentdomain) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


                                          <div class="form-group">
                                              <label for="name">نام پسوند</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"  dir="ltr"
                                                  placeholder=" نام پسوند  " name="name" value="{{$contentdomain->name}}">
                                          </div>

                                          <div class="form-group">
                                            <label for="link">پسوند</label>
                                            <input type="text" class="form-control" id="link" autocomplete="off"
                                                placeholder=" برای مثال com  " name="link" value="{{$contentdomain->link}}">
                                        </div>

                                          <div class="form-group">
                                            <label for="price">قیمت دامنه به دلار</label>
                                            <input type="text" class="form-control" id="price" autocomplete="off"
                                                placeholder=" برای مثال 0.99  " name="price" value="{{$contentdomain->price}}">
                                        </div>


                                          <div class="form-group">
                                              <label for="text"> توضیحات</label>
                                              <textarea class="form-control" id="text" autocomplete="off"
                                                  placeholder="توضیحات" name="text" rows="8"
                                                   >{{$contentdomain->text}}</textarea>
                                          </div>


   @include('admin.layouts.table.avatarnul', [  'avatarimage' => $contentdomain->image , 'class'=>'profile-pic' , 'style' => 'height: 200px;width: 200px;'  ])


   <hr>
   <div class="form-group" >
   <label for="exampleInputUsername1"> آپلود عکس </label>
   <input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
   </div>

                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.content.domain.index') }}" class="btn btn-danger">بازگشت</a>
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
