  @component('custome.layouts.content', [
      'title' => 'مدیریت انتقال دامنه',
      'tabTitle' => 'مدیریت انتقال دامنه',
      'breadcrumb' => [['title' => 'مدیریت انتقال دامنه', 'url' => route('user.domain.transfer.index')], ['title' => 'مشاهده سفارش انتقال دامنه  ',
      'class' => 'active']],
      ])


      <div class="row">



@if($transfer == Null)
@include('admin.errors.404')
@elseif($transfer != Null)


          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                <div class="col-md-2 grid-margin stretch-card">
                </div>


                <div class="col-md-8 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>انتقال دامنه   </h4>
                              </div>
<br>

@include('custome.domain.transfer.table_show', [ 'route' => route('user.domain.transfer.update', $transfer)
,  'transfer' => $transfer    , 'tablee' => 'transfer' , 'aroue' => 'user'])


                          </div>
                      </div>
                  </div>



                  <div class="col-md-2 grid-margin stretch-card">
                </div>



              </div>
          </div>

@endif

      </div>













      @slot('script')
      @endslot
  @endcomponent
