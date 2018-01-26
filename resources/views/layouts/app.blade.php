<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acoki</title>
    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-4.0.0/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css">
</head>
<body>
<div class="color-part">
    <div class="container">
        <div class="content">
            @include('partials.menu')
            @include('partials.jobs_form')
        </div>
    </div>
</div>
@yield('content')
@include('partials.footer')
@if(!Auth::check())
    @include('partials.login_form')
@else
    @include('partials.sign_job_form', ['method' => 'post', 'route' => route('store')])
@endif
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('bootstrap-4.0.0/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/nicescroll.min.js')}}"></script>
@stack('js')
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>