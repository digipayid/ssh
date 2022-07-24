<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('asset/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="Digipay">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        @include('layouts.dashboard.mobile')
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        @include('layouts.dashboard.navbar')
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
        @include('layouts.dashboard.sidebar')
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- END: Content -->
            </div>
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('asset/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
