  @component('admin.layouts.content', [
      'title' => 'مدیریت تغییر نیم سرور ',
      'tabTitle' => 'مدیریت تغییر نیم سرور',
      'breadcrumb' => [['title' => 'مدیریت تغییر نیم سرور', 'url' => route('admin.nameserver.index')], ['title' => 'مشاهده سفارش تغییر نیم سرور   ',
      'class' => 'active']],
      ])


      <div class="row">



@if($nameserver == Null)
@include('admin.errors.404')
@elseif($nameserver != Null)


          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                <div class="col-md-2 grid-margin stretch-card">
                </div>


                <div class="col-md-8 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>تغییر نیم سرور     </h4>
                              </div>
<br>

@include('custome.nameserver.table_show', [ 'route' => route('admin.nameserver.update', $nameserver)
,  'nameserver' => $nameserver    , 'tablee' => 'nameserver' , 'aroue' => 'admin'])


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
