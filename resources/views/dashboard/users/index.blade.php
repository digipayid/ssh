@extends('layouts.main')

@section('title')
    Daftar User
@endsection

@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">
        Daftar User
    </h2>
    @if (session()->has('success'))
        <div class="alert alert-success text-white show mb-2" role="alert">{{ session('success') }}</div>
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">

        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="text-center whitespace-nowrap w-10">No</th>
                        <th class="text-center whitespace-nowrap">Nama</th>
                        <th class="text-center whitespace-nowrap">Instansi</th>
                        <th class="text-center whitespace-nowrap">No Telepon</th>
                        <th class="text-center whitespace-nowrap">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="intro-x">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->instansi }}</td>
                            <td class="text-center">{{ $user->no_tlp }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
