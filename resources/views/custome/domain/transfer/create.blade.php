  @component('custome.layouts.content', [
      'title' => 'انتقال دامنه',
      'tabTitle' => 'انتقال دامنه',
      'breadcrumb' => [['title' => 'لیست درخواستهای انتقال دامنه     ', 'url' => route('user.domain.transfer.index')], ['title' => 'انتقال دامنه ',
      'class' => 'active']],
      ])

@include('index.layouts.elementor.txtdese', [ 'id' => '9' ])


<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">انتقال دامنه</h6>

                <form class="forms-sample" method="POST"  action="{{route('user.domain.transfer.store')}}" style="direction: ltr;"
                enctype="multipart/form-data" onsubmit="return Validate(this);">
                @csrf


                @include('admin.layouts.errors')

                    <div class="form-group row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <label  class="{{ $errors->has('domain') ? 'red' : '' }}"  >    دامنه </label>
                            <input id="domain" class="form-control" name="searchdomain" type="text"  value="{{old('domain')}}"   required="required"  style="height: 50px;">

                            <div class="card-footer">
                                <button type="submit"  class="btn btn-primary btn-lg">بررسی انتقال دامنه  </button>
                           </div>

                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>







                </form>


 




            </div>
        </div>
    </div>
</div>





      @slot('script')
      @endslot
  @endcomponent
