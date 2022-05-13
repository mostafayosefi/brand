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


    <div class="card">
        <div class="card-body">
            <div class="card-header card-header-border-bottom">
                <h4>مشاهده درخواستهای ثبت شرکت </h4>
                              </div>
<br>
@include('admin.company.request.multiseteps', ['order' => $company_request  ])


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link @if (empty(Session::get('err'))) active @endif "
                        id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab"
                        aria-controls="icon-home" aria-selected=" true "> <i
                            data-feather="edit-2"></i>
                        اطلاعات ثبت شده </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @if (Session::get('err') == '1') active @endif "
                        id="icon-secret-tab" data-toggle="tab" href="#icon-secret"
                        role="tab" aria-controls="icon-secret" aria-selected="false"> <i
                            data-feather="server"></i>
                        اطلاعات رجیستر شرکت</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  @if (Session::get('err') == '2') active @endif "
                        id="icon-upload-tab" data-toggle="tab" href="#icon-upload"
                        role="tab" aria-controls="icon-upload" aria-selected="false"> <i
                            data-feather="upload"></i>
                        مدارک شرکت</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  " id="icon-timeline-tab" data-toggle="tab"
                        href="#icon-timeline" role="tab" aria-controls="icon-home"
                        aria-selected=" true "> <i data-feather="list"></i>
                        تایم لاین </a>
                </li>

            </ul>


            <div class="tab-content" id="myTabContent2">

                <div class="tab-pane pt-3 fade   @if (empty(Session::get('err'))) show active @endif  "
                    id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">

                    <div class="row">
                        <div class="col-xl-12">
                            @include('admin.company.request.table_show', [  'route' => route('user.company.request.payment', $company_request)  , 'aroue' => 'user'  ,   $users  ])
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-3 fade  @if (Session::get('err') == '1') show active @endif "
                    id="icon-secret" role="tabpanel" aria-labelledby="icon-secret-tab">

                    <div class="row">
                        <div class="col-xl-12">
                            @include( 'admin.company.request.recerve.show',  ['aroue' => 'user', $company_request] )
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-3 fade  @if (Session::get('err') == '2') show active @endif   "
                    id="icon-upload" role="tabpanel" aria-labelledby="icon-upload-tab">

                    <div class="row">
                        <div class="col-xl-12">

                            @include( 'admin.company.request.recerve.listupload', ['aroue' => 'user',$company_request] )
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-3 fade  " id="icon-timeline" role="tabpanel"
                    aria-labelledby="icon-timeline-tab">
                    <div class="row">
                        <div class="col-xl-12">

                            @if ($company_request->discriptionorders)
                                @include( 'admin.order.timeline', [ 'discriptionorders' => $company_request->discriptionorders,
                                        'myoperator' => 'company_request', ] )
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endif
</div>














      @slot('script')
      @endslot
  @endcomponent
