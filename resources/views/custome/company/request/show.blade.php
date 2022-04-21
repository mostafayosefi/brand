  @component('custome.layouts.content', [
      'title' => 'مشاهده درخواستهای ثبت شرکت',
      'tabTitle' => ' مشاهده درخواستهای ثبت شرکت',
      'breadcrumb' => [['title' => 'لیست درخواستهای ثبت شرکت ', 'url' => route('user.company.request.index')], ['title' => 'مشاهده درخواستهای ثبت شرکت  ',
      'class' => 'active']],
      ])


      <div class="row">



@if($company_request == Null)
@include('admin.errors.404')
@elseif($company_request != Null)


          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>مشاهده درخواستهای ثبت شرکت </h4>
                              </div>
<br>
@include('admin.company.request.multiseteps', ['order' => $company_request  ])


@include('admin.company.request.table_show', [  'route' => route('user.company.request.payment', $company_request)  , 'aroue' => 'user'  ,   $users  ])

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
