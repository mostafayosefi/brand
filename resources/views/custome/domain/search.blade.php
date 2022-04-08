  @component('custome.layouts.content', [
      'title' => 'ثبت دامنه جدید',
      'tabTitle' => 'ثبت دامنه جدید',
      'breadcrumb' => [['title' => 'لیست دامنه های من ', 'url' => route('user.contact.index')], ['title' => 'ثبت دامنه جدید',
      'class' => 'active']],
      ])

@include('index.layouts.elementor.txtdese', [ 'id' => '7' ])


<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">ثبت دامنه جدید</h6>

                <form class="forms-sample" method="POST"  action="{{route('user.domain.check.post')}}" style="direction: ltr;"
                enctype="multipart/form-data" onsubmit="return Validate(this);">
                @csrf


                @include('admin.layouts.errors')

                    <div class="form-group row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <label  class="{{ $errors->has('domain') ? 'red' : '' }}"  >   نام دامنه </label>
                            <input id="domain" class="form-control" name="searchdomain" type="text"  value="{{old('domain')}}"   required="required"  style="height: 50px;">

                            <div class="card-footer">
                                <button type="submit"  class="btn btn-primary btn-lg">جستجوی دامنه</button>
                           </div>

                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>







                </form>





                @if($result)



						<div class="example">
							<div class="alert alert-fill-success" role="alert">دامنه {{session()->get('domain')}} موجود می باشد!
							</div>

                        </div>






                    @include('custome.layouts.table_listdomain', [  'checkdomains' => $resultdomain   ])


<hr>
                    <h6 class="card-title">دامنه های مشابه</h6>



                    @include('custome.layouts.table_listdomain', [  'checkdomains' => $checkdomains   ])



                @endif





            </div>
        </div>
    </div>
</div>





      @slot('script')
      @endslot
  @endcomponent
