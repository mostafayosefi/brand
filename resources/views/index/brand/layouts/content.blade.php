@extends('index.brand.master')
@section('content')
@include('index.brand.layouts.breadcrumb',['breadcrumb'=>$breadcrumb,'title'=>$title])

        {{ $slot }}
@endsection

@section('style')
    {{ $style ?? '' }}
@endsection

@section('script')
    {{ $script ?? '' }}
@endsection
