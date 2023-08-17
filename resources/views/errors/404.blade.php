@extends('index')
@section('content')
{{--    <style>--}}
{{--        body{--}}
{{--            background-color: whitesmoke;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <a href="{{route('home')}}" class="btn btn-warning btn-lg" style="position: absolute;margin-left: 49.2%;margin-top: 19%">Home</a>--}}
{{--    <div class="container w-75">--}}
{{--    <img src="{{asset('404.png')}}" width="80%" style="margin-left: 10%">--}}
{{--</div>--}}


<style>
    body {
        background-color: #f8f9fa;
    }
    .error-title {
        font-size: 9rem;
        color: #dc3545;
        position: absolute;
    }
    .error-message {
        font-size: 1.5rem;
        margin-bottom: 20px;
        color: #6c757d;
        padding-top: 18%;
    }
</style>

<div class="container" style="width: 100%;background-image: url('{{asset('404.png')}}');height: 48vh;margin-top: 10%">
    <h1 class="error-title">404</h1>
    <p class="error-message">Oops! Page not found.</p>
    <a href="{{route('home')}}" class="btn btn-primary btn-lg">Home</a>
</div>
@endsection
