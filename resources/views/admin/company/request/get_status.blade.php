
@if($admin->status=='register')
<span class="badge badge-warning"><i data-feather="alert-circle"></i> &nbsp; منتظربراورد قیمت </span>
@elseif($admin->status=='waiting')
<span class="badge badge-warning"><i data-feather="credit-card"></i> &nbsp; منتظر پرداخت </span>
@elseif($admin->status=='waitpay')
<span class="badge badge-primary"><i data-feather="credit-card"></i> &nbsp; منتظر تایید پرداخت </span>
@elseif($admin->status=='active')
<span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp; پرداخت شده </span>
@elseif ($admin->status=='inactive')
<span class="badge badge-danger"><i data-feather="x-circle"></i> &nbsp; لغوشده </span>
@elseif($admin->status=='recerve')
<span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp; ثبت نهایی شرکت انجام شد </span>
@else
<span class="badge badge-primary"> در دست بررسی</span>
@endif
