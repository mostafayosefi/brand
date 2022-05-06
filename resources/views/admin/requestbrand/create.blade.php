  @component('admin.layouts.content', [
      'title' => 'ثبت سفارش برند',
      'tabTitle' => 'ثبت سفارش برند',
      'breadcrumb' => [['title' => 'لیست برندهای من  ', 'url' => route('admin.requestbrand.index')], ['title' => 'ثبت سفارش برند',
      'class' => 'active']],
      ])


@slot('style')


@endslot


      <div class="row">

          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">



                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> ثبت سفارش برند </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')

                              @include('admin.requestbrand.table_create', [ 'route' => route('admin.requestbrand.store')  ,
                               'users' => $users  ,   'arou' => 'admin'])



                          </div>
                      </div>
                  </div>




              </div>
          </div>
      </div>












  @endcomponent
