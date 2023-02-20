<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}" ></script>
-->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
-->
</head>
<div class="pull-right auto-width-right">
	<ul class="top-details menu-beta l-inline">
	@if(Auth::check())
		<li><a href="#">Chào bạn {{Auth::user()->name}}</a></li>
		<li><a href="{{route('postlogout')}}">Đăng xuất</a></li>
	@else
		<li><a href="#">Đăng kí</a></li>
		<li><a href="{{route('login')}}">Đăng nhập</a></li>
	@endif
	</ul>
</div>