  @component('custome.layouts.content', [
    'title'=>' ثبت درخواست گواهیSsl ',
      'tabTitle' => '  ثبت درخواست گواهیSsl ',
      'breadcrumb' => [['title' => 'مشاهده گواهی Ssl', 'url' => route('user.ssl.index')], ['title' => ' ثبت درخواست گواهیSsl ',
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
                            <h4>  ثبت درخواست گواهیSsl </h4>
                        </div>

                        <br>


                        @include('admin.layouts.errors')


                        <form class="forms-sample" method="POST" action="{{ route('user.finical.wallet.store') }}"
                            enctype="multipart/form-data" onsubmit="return Validate(this);">
                            @csrf
                            <div class="row">

                                <div class="col-sm-12">


                                    <div class="form-group">
                                        <label for="price"> هزینه شارژ به ریال</label>
                                        <input type="text" class="form-control" id="price" autocomplete="off"
                                            placeholder=" سوال  " name="price" value="{{ old('price') }}">
                                    </div>



                                    <div class="card-footer">
                                        <a href="{{ route('user.wallet.index') }}" class="btn btn-danger">بازگشت</a>
                                        <button type="submit" class="btn btn-primary float-right">ثبت و پرداخت</button>
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
