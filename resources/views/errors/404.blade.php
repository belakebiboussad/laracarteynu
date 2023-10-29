{{--@extends('errors::layout')--}}
{{--@section('message', '404 😭')--}}
{{--@section('title', __('Page Not Found'))--}}
{{--@section('image')--}}
{{--    <div style="background-image: url('/images/404-bg.jpg');" class="absolute pin bg-no-repeat md:bg-left lg:bg-center">--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@section('message','disolé')--}}

<h2>{{ $exception->getMessage() }}</h2>