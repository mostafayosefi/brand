
@if($show_bread=='active')
    <section class="blogHeader">
        <div class="blogHeader-image">
            <img src="{{asset('sabt_files/blog-header.jpg')}}" alt="ثبت شرکت میزان">
        </div>

        <div class="blogInfo">
                    <ul class="blogInfo-map">

@if(isset($breadcrumb) && is_array($breadcrumb))
@foreach($breadcrumb as $key=>$value)
    @if ($value['title'])
        <li class="breadcrumb-item {{ $value['class'] ?? '' }}">
            @if(isset($value['class']) && $value['class'] == 'active')
                <span>{{ $value['title'] }}</span>
            @else
                <a href="{{ $value['url'] ?? '#' }}">  {{ $value['title'] }} </a> <i class="far fa-chevron-left"></i>
            @endif
        </li>
    @endif
@endforeach
@endif
                    </ul>
            <a href=""><h1 class="blogInfo-title">{{$tabTitle}}</h1></a>
            <div class="blogInfo-box">
                <span class="blogInfo-time"><i class="fas fa-clock"></i>{{ date_frmat(time_fake(now(),28)) }}</span>
             </div>
        </div>

    </section>
@endif




