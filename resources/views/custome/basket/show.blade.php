  @component('custome.layouts.content', [
    'title'=>'مشاهده سفارش خرید دامنه',
    'tabTitle'=>'مشاهده سفارش خرید دامنه',
      'breadcrumb' => [['title' => 'لیست سفارش خرید دامنه   ', 'url' => route('user.domain.basket.index')], ['title' => 'مشاهده سفارش خرید دامنه  ',
      'class' => 'active']],
      ])


      <div class="row">



@if($order == Null)
@include('admin.errors.404')
@elseif($order != Null)

          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-header card-header-border-bottom">
                                  <h4>مشاهده سفارش </h4>
                              </div>
<br>


@include('custome.order.table_show', [ 'route' => route('user.domain.basket.store', $order) ,   $order  , $contacts
, 'tablee' => 'basket', 'aroue' => 'user'])
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
