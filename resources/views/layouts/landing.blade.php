<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }} - The Ultimate Laravel Missing Backend</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="Laravel Plus is the missing Laravel backend that provides a prepared structure to work with, saving you time and effort in developing web applications or websites with Laravel. With pre-built components and modules, LaravelPlus makes it easy to customize and integrate functionality into your project, making it the ultimate Laravel backend framework.">
    <meta name="keywords"
          content="LaravelPlus,Laravel Plus,Laravel, Administration, framework,Laravel Admin, Laravel components, web application development">
    <meta property="og:title" content="LaravelPlus - The Ultimate Laravel Backend Framework">
    <meta property="og:description"
          content="Laravel Plus is the missing Laravel backend that provides a prepared structure to work with, saving you time and effort in developing web applications or websites with Laravel.">
    <meta property="og:image" content="https://example.com/images/laravelplus-logo.png">
    <meta property="og:url" content="https://laravelplus.com/">
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-dark" id="app">
<div class="page page-center">
    <div class="container">
{{--        @yield('content')--}}
    </div>
</div>
@include('cookie-consent::index')
</body>
</html>
