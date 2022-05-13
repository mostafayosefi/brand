  @component('admin.layouts.content',
      [
          'title' => 'مشاهده درخواستهای ثبت شرکت',
          'tabTitle' => ' مشاهده درخواستهای ثبت شرکت',
          'breadcrumb' => [['title' => 'لیست سفارش های درخواست ثبت شرکت ', 'url' => route('admin.company.request.index')], ['title' => 'مشاهده درخواستهای ثبت شرکت ', 'class' => 'active']],
      ])


      <div class="row">




          @if ($company_request == null)
              @include('admin.errors.404')
          @elseif($company_request != null)
              <div class="col-12 col-xl-12 stretch-card">


                  <div class="card">
                      <div class="card-body">
                          <div class="card-header card-header-border-bottom">
                              <h4>مشاهده درخواستهای ثبت شرکت </h4>
                          </div>
                          <br>
                          @include('admin.company.request.multiseteps', [
                              'order' => $company_request,
                          ])


                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link @if (empty(Session::get('err'))) active @endif " id="icon-home-tab"
                                      data-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home"
                                      aria-selected=" true "> <i data-feather="edit-2"></i>
                                      اطلاعات ثبت شده </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link  @if (Session::get('err') == '1') active @endif " id="icon-secret-tab"
                                      data-toggle="tab" href="#icon-secret" role="tab" aria-controls="icon-secret"
                                      aria-selected="false"> <i data-feather="server"></i>
                                      اطلاعات رجیستر شرکت</a>
                              </li>

                              <li class="nav-item">
                                  <a class="nav-link  @if (Session::get('err') == '2') active @endif " id="icon-upload-tab"
                                      data-toggle="tab" href="#icon-upload" role="tab" aria-controls="icon-upload"
                                      aria-selected="false"> <i data-feather="upload"></i>
                                      مدارک شرکت</a>
                              </li>

                              <li class="nav-item">
                                  <a class="nav-link  " id="icon-timeline-tab" data-toggle="tab" href="#icon-timeline"
                                      role="tab" aria-controls="icon-home" aria-selected=" true "> <i
                                          data-feather="list"></i>
                                      تایم لاین </a>
                              </li>

                          </ul>


                          <div class="tab-content" id="myTabContent2">

                              <div class="tab-pane pt-3 fade   @if (empty(Session::get('err'))) show active @endif  "
                                  id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">

                                  <div class="row">
                                      <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12  ">

                                          @include(
                                              'admin.company.request.table_show',
                                              ['aroue' => 'admin', $users]
                                          )

                                      </div>
                                  </div>
                              </div>

                              <div class="tab-pane pt-3 fade  @if (Session::get('err') == '1') show active @endif "
                                  id="icon-secret" role="tabpanel" aria-labelledby="icon-secret-tab">

                                  <div class="row">
                                      <div class="col-xl-12">
                                          @include(
                                              'admin.company.request.recerve.show',
                                              ['aroue' => 'admin', $company_request]
                                          )
                                      </div>
                                  </div>
                              </div>

                              <div class="tab-pane pt-3 fade  @if (Session::get('err') == '2') show active @endif   "
                                  id="icon-upload" role="tabpanel" aria-labelledby="icon-upload-tab">

                                  <div class="row">
                                      <div class="col-xl-12">

                                          @include(
                                              'admin.company.request.recerve.listupload',
                                              ['aroue' => 'admin', $company_request]
                                          )
                                      </div>
                                  </div>
                              </div>

                              <div class="tab-pane pt-3 fade  " id="icon-timeline" role="tabpanel"
                                  aria-labelledby="icon-timeline-tab">
                                  <div class="row">
                                      <div class="col-xl-12">

                                          @if ($company_request->discriptionorders)
                                              @include('admin.order.timeline', [
                                                  'discriptionorders' => $company_request->discriptionorders,
                                                  'myoperator' => 'company_request',
                                              ])
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
          <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
          </script>
          <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

          <script>
              $(document).ready(function() {
                  var date_input = $('input[id="date"]'); //our date input has the name "date"
                  var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                  date_input.datepicker({
                      format: 'yyyy/mm/dd',
                      container: container,
                      todayHighlight: true,
                      autoclose: true,
                  })
              })
          </script>
      @endslot

  @endcomponent
