@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section("content")
<div class="content">
    <div class="grid grid-cols-12 gap-12">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-12">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            SELAMAT DATANG : {{ auth()->user()->name }}
                        </h2>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->
            </div>
        </div>
    </div>
</div>
@endsection