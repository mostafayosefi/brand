@extends('index.master')
@section('content')
        <!-- begin::page-header -->
            @include('index.layouts.breadcrumb',['breadcrumb'=>$breadcrumb,'title'=>$title])
        <!-- end::page-header -->

        <!-- begin::view errors -->
        <!-- end::view errors -->
        {{ $slot }}
@endsection

@section('style')
    {{ $style ?? '' }}
@endsection

@section('script')
    {{ $script ?? '' }}
@endsection
