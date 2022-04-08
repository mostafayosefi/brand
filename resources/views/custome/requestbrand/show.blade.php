  @component('admin.layouts.content', [
      'title' => 'مشاهده سفارش برند',
      'tabTitle' => ' مشاهده سفارش برند',
      'breadcrumb' => [['title' => 'لیست سفارش های برند ', 'url' => route('user.requestbrand.index')], ['title' => 'مشاهده سفارش برند  ',
      'class' => 'active']],
      ])


      <div class="row">



@if($requestbrand == Null)
@include('admin.errors.404')
@elseif($requestbrand != Null)


          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>مشاهده سفارش برند </h4>
                              </div>
<br>
@include('admin.requestbrand.multiseteps', ['order' => $requestbrand  ])


@include('admin.requestbrand.table_show', [  'route' => route('user.requestbrand.payment', $requestbrand)  , 'aroue' => 'user'  ,   $users  ])

                          </div>
                      </div>
                  </div>



                  <div class="col-md-12 grid-margin stretch-card">



                  </div>



              </div>
          </div>

          @endif


      </div>













      @slot('script')
      @endslot
  @endcomponent
