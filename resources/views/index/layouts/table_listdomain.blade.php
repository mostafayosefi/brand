
            <table class="table table-bordered "   >
                <thead>
                    <tr>
                        <th>  ردیف </th>
                        <th>  نام دامنه </th>
                        <th>  هزینه دامنه </th>
                        <th>  خرید دامنه </th>
                    </tr>
                </thead>
                <tbody>



                    @foreach ( $checkdomains as  $key => $admin)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <span class="elementor-icon-list-item" >
                                <span class="elementor-icon-list-icon"  style="color: #1be42f">
                    <i aria-hidden="true" class="fas fa-check"></i>						</span>
                            <span class="elementor-icon-list-text"> {{$admin->domain}}</span>

                        </span></td>

<td>

    <span class="elementor-icon-list-item" >
        <span class="elementor-icon-list-icon"  >
<i aria-hidden="true" class="fa fa-credit-card"></i>						</span>
    <span class="elementor-icon-list-text"> {{number_format($admin->riyal)}} ریال</span>

</span>




</td>


<td>

    <div class="elementor-widget-container">
        <div class="elementor-button-wrapper">
            <a href="{{route('user.domain.buy.post' , $admin->id)}}" onclick="event.preventDefault();
                document.getElementById('buy-form{{$admin->id}}').submit();"  class="spanstatus spanstatus_warning">
                <span
                {{-- class="elementor-button-content-wrapper" --}}
                class="search-domain btn btn-primary px-5"
                {{-- role="button" style="background-color: #dd0824" --}}
                class="spanstatus spanstatus_success">
                    <span class="elementor-button-text" >خرید</span>
                </span>

            </a>
        </div>


        <form id="buy-form{{$admin->id}}" action="{{ route('user.domain.buy.post'  , $admin->id) }}" method="POST"
            class="d-none">
        @csrf
        <input type="hidden" name="domain" value="{{$admin->domain}}" />
        <input type="hidden" name="price" value="{{$admin->riyal}}" />
    </form>

    </div>
</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
