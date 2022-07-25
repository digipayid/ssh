@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('asset/images/logo.svg') }}">
                <span class="text-white text-lg ml-3"> Sistem Pengusulan SSH Kabupaten Aceh Tengah </span>
            </a>
            <div class="my-auto">
                <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                    src="{{ asset('asset/images/illustration.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    <br>
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"></div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
                class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                @if (session()->has('success'))
                    <div class="alert alert-success text-white show mb-2" role="alert">{{ session('success') }}</div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger text-white show mb-2" role="alert">{{ session('loginError') }}</div>
                @endif

                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign In
                </h2>
                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center"></div>
                <form action="/login" method="post">
                    @csrf
                    <div class="intro-x mt-8">
                        <input type="email" name="email"
                            class="intro-x login__input form-control py-3 px-4 block @error('email') border-danger @enderror"
                            placeholder="Email" autofocus required value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror

                        <input type="password" name="password"
                            class="intro-x login__input form-control py-3 px-4 block mt-4 @error('password') border-danger @enderror"
                            placeholder="Password" required>
                        @error('password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button type="submit"
                            class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Masuk</button>
                        <a href="/register"
                            class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- END: Login Form -->
    </div>
@endsection
