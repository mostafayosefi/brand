


@foreach ($documents as $document)
    {{$document->documentname}}
@php
@endphp
@foreach ($document->categoryapis as $categoryapi)
@foreach ($categoryapi->textwebservices as $textwebservice)


    <a href="{{ route('index.document.index', $textwebservice->url) }}">
        <li class="elementor-icon-list-item"  >
            <span class="elementor-icon-list-icon">

            </span>
                @if ($myurl == $textwebservice->url)
                <span class="elementor-icon-list-text" style="color: green">▪️
                <i aria-hidden="true" class="fas fa-check"></i>
                {{ $categoryapi->name }}
                </span>
                @else
                <span class="elementor-icon-list-text"  >
                <i aria-hidden="true" class="fa fa-server"></i>
                {{ $categoryapi->name }}
                </span>
                @endif
        </li>
    </a>



    @endforeach
    @endforeach
    <li style="padding-top: 1px;">&nbsp;</li>

    @endforeach


    @foreach ($categoryapis as $categori)

    @endforeach


{{-- @if ($myurl != 'all')
    @if ($categoryapis)
        @foreach ($categoryapis as $categori)
            <a href="{{ env('APP_URL') }}/webservice/{{ $cat }}/{{ $categori->title }}">
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fa fa-server"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ $categori->url }}
                    </span>
                </li>
            </a>
        @endforeach
    @endif
@endif --}}
