  @component('custome.layouts.content', [
      'title' => 'ثبت درخواست شرکت',
      'tabTitle' => 'ثبت درخواست شرکت',
      'breadcrumb' => [['title' => 'لیست درخواستهای شرکت کاربران ', 'url' => route('user.company.request.index')], ['title' => 'ثبت درخواست شرکت',
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
                                  <h4> ثبت درخواست شرکت </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')

                              @include('admin.company.request.table_create', [ 'route' => route('user.company.request.store')  ,
                               'users' => $users  ,   'arou' => 'user'])



                          </div>
                      </div>
                  </div>




              </div>
          </div>
      </div>












  @endcomponent
