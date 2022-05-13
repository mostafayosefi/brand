

@if($discriptionorders)

<div class="col-md-12">
<div class="card">
<div class="card-body">
<h6 class="card-title">تایم لاین</h6>
<div id="content">
  <ul class="timeline">
    @foreach ($discriptionorders as $discriptionorder )
    @if($discriptionorder->operator==$myoperator)

    <li class="event" data-date=" @if ($discriptionorder->by=='admin') پشتیبانی @else {{$discriptionorder->user->name}}   @endif"  >
        @if ($discriptionorder->flag=='active')
        <span class="badge badge-success"><h5> فعال شد</h5></span>
        @endif
        @if ($discriptionorder->flag=='reactive')
        <span class="badge badge-success"><h5> سفارش مجددا تایید شد</h5></span>
        @endif
        @if ($discriptionorder->flag=='inactive')
        <span class="badge badge-danger"><h5> غیرفعال شد</h5></span>
        @endif
        @if ($discriptionorder->flag=='register')
        <span class="badge badge-primary"><h5> سفارش براورد هزینه شد  </h5></span>
        @endif
        @if ($discriptionorder->flag=='waiting')
        <span class="badge badge-primary"><h5> سفارش فعال شد  </h5></span>
        @endif
        @if ($discriptionorder->flag=='offline')
        <span class="badge badge-primary"><h5> پرداخت آفلاین</h5></span>
        @endif
        @if ($discriptionorder->flag=='online')
        <span class="badge badge-primary"><h5> پرداخت آنلاین</h5></span>
        @endif
        @if ($discriptionorder->flag=='depo')
        <span class="badge badge-primary"><h5> پرداخت از شارژ حساب</h5></span>
        @endif
        @if ($discriptionorder->flag=='waitpay')
        <span class="badge badge-success"><h5> پرداخت تایید شد</h5></span>
        @endif

        @if ($discriptionorder->active=='0')
        <span class="badge">انجام نشد</span>
        @endif
      <p>{{$discriptionorder->text}}</p>
      <span class="badge">{{ date_frmat($discriptionorder->created_at) }}</span>
    </li>
    @endif
    @endforeach
  </ul>
</div>
</div>
</div>
</div>

@endif
