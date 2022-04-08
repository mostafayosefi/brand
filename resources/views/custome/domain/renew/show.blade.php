  @component('custome.layouts.content', [
      'title' => 'مدیریت تمدید دامنه',
      'tabTitle' => 'مدیریت تمدید دامنه',
      'breadcrumb' => [['title' => 'مدیریت تمدید دامنه', 'url' => route('user.domain.renew.index')], ['title' => 'مشاهده سفارش تمدید دامنه  ',
      'class' => 'active']],
      ])


      <div class="row">



@if($renew == Null)
@include('admin.errors.404')
@elseif($renew != Null)

          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                <div class="col-md-2 grid-margin stretch-card">
                </div>


                <div class="col-md-8 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>تمدید دامنه   </h4>
                              </div>
<br>

@include('custome.domain.renew.table_show', [ 'route' => route('user.domain.renew.update', $renew)
,  'renew' => $renew    , 'tablee' => 'renew' , 'aroue' => 'user'])


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
