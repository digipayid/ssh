@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">
        Daftar Pengajuan
    </h2>
    @if (session()->has('success'))
        <div class="alert alert-success text-white show mb-2" role="alert">{{ session('success') }}</div>
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="/dashboard/pengajuan/create" class="btn btn-primary shadow-md mr-2">Buat Pengajuan</a>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="text-center whitespace-nowrap w-10">No</th>
                        <th class="text-center whitespace-nowrap">Judul</th>
                        <th class="text-center whitespace-nowrap">Keterangan</th>
                        <th class="text-center whitespace-nowrap">Status</th>
                        <th class="text-center whitespace-nowrap w-50">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengajuans as $pengajuan)
                        <tr class="intro-x">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="">{{ $pengajuan->judul }}</td>
                            <td class="text-center">{{ $pengajuan->keterangan }}</td>
                            <td class="table-report__action w-40">
                                @if ($pengajuan->status == 'Diterima')
                                    <div class="flex items-center text-success"> {{ $pengajuan->status }} </div>
                                @else
                                    <div class="flex items-center text-danger"> {{ $pengajuan->status }} </div>
                                @endif
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3 text-warning"
                                        href="/dashboard/mengajukan/{{ $pengajuan->id }}"> <i data-lucide="check-square"
                                            class="w-4 h-4 mr-1"></i> Ajukan Barang </a>
                                    <a class="flex items-center mr-3 text-primary"
                                        href="/dashboard/pengajuan/{{ $pengajuan->id }}"> <i data-lucide="check-square"
                                            class="w-4 h-4 mr-1"></i> Detail </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
