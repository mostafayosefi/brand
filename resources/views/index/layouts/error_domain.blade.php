


       @if (session()->get('error')=='1')

       <div id="" class="table_wrap highlight " data-rt-animate="animate" data-rt-animation-type="fadeInDown">
        <ul>
        <li class="caption">
        <div class="title"  style="color: #ff0000">متاسفانه دامنه {{session()->get('domain')}} قبلا به ثبت رسیده و نمی توانید آنرا به ثبت برسانید
        <small style="color: #23dcdc">  &nbsp;</small>
        </div>
        </li>
        <li class="caption">
        <div class="title"  style="color: #ff0000">  &nbsp;
        <small style="color: #23dcdc">  &nbsp;</small>
        </div>
        </li>
        </ul>
       </div>

        @endif
