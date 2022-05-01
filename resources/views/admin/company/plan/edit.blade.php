@component('admin.layouts.content', [
    'title' => 'ویرایش پلان شرکت',
    'tabTitle' => 'ویرایش پلان شرکت',
    'breadcrumb' => [['title' => 'لیست پلانهای شرکت    ', 'url' => route('admin.company.plan.index')], ['title' => 'ویرایش پلان شرکت',
    'class' => 'active']],
    ])


      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">



                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>  ویرایش پلان شرکت    </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.company.plan.update', $company_plan) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">



                                        <div class="form-group">
                                            <label for="name">نام پلان شرکت</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام پلان شرکت" name="name" value="{{$company_plan->name}}">
                                        </div>



                                        <div class="form-group">
                                            <label for="text"> خلاصه توضیحات</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="خلاصه توضیحات" name="short" rows="6"
                                                 >{{$company_plan->short}}</textarea>
                                        </div>



                                        <div class="form-group">
                                            <label for="text"> توضیحات</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                  name="text"  id="tinymceExample" rows="8"
                                                 >{{$company_plan->text}}</textarea>
                                        </div>


@include('admin.layouts.table.add_input_array', [   'name_select' => 'امکانات' ,
'required'=>'required'  , 'index_id'=>'feild_name[]' ])


@include('admin.layouts.table.java_price')


                                        <div class="form-group">
                                            <label for="price">هزینه پلان شرکت (به ریال)</label>
                                            <input type="text" class="form-control" id="price" autocomplete="off" onkeyup="separateNum(this.value,this);"
                                                placeholder="هزینه پلان شرکت" name="price" value="{{$company_plan->price}}">
                                        </div>

                                        @include('admin.layouts.table.avatarnul', [  'avatarimage' => $company_plan->image , 'class'=>'profile-pic' , 'style' => 'height: 200px;width: 200px;'  ])


                                        <hr>
                                        <div class="form-group" >
                                        <label for="exampleInputUsername1"> آپلود عکس </label>
                                        <input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
                                        </div>



                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.company.plan.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ویرایش</button>
                                          </div>


                                      </div>


                                  </div>

                              </form>



                              @if($company_plan->company_properties)
                              <hr>


                              <table id="dataTableExample" class="table">
                                  <thead>
                                    <tr>
                                      <td> نام امکانات</td>
                                      <td>حذف</td>
                                  </tr>
                              </thead>
                              <tbody>

                                  @foreach($company_plan->company_properties as $admin)
                                  <tr>
                                      <td>{{$admin->name}}</td>
                                      <td>
                                          @php $admin['title'] = $admin->name;  @endphp
                                          @include('admin.layouts.table.modal', [$admin ,'route' => route('admin.company.plan.destroy.property', $admin) , 'myname' => $admin->name ])
                                          </td>
                                  </tr>
                                  @endforeach

                              </tbody>

                              </table>

                              <hr>
                              @endif




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
