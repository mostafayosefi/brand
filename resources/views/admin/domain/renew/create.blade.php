  @component('admin.layouts.content', [
    'title'=>'  تمدید دامنه',
      'tabTitle' => '  تمدید دامنه ',
      'breadcrumb' => [['title' => '  تمدید دامنه  ', 'url' => route('user.ssl.index')], ['title' => ' تمدید دامنه',
      'class' => 'active']],
      ])

@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">


@endslot

<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">


            <div class="col-md-3 grid-margin stretch-card">
            </div>


            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="card-header card-header-border-bottom">
                            <h4>    تمدید دامنه </h4>
                        </div>

                        <br>


                        @include('admin.layouts.errors')


                        <form class="forms-sample" method="POST" action="{{ route('user.domain.renew.store') }}"
                            enctype="multipart/form-data" onsubmit="return Validate(this);">
                            @csrf
                            <div class="row">

                                <div class="col-sm-12">

                                    @include('admin.layouts.table.selectbox', [ 'allforeachs' => $domains ,  'input_name' => 'domain'  ,  'name_select' => 'دامنه' ,  'value' => '' , 'required'=>'required'  , 'index_id'=>'domain_id' ])






                                    <div class="card-footer">
                                         <button type="submit" class="btn btn-primary float-right">  انتخاب دامنه و مرحله بعدی  </button>
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
