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
                            Dashboard
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="credit-card" class="report-box__icon text-pending"></i> 
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $totalPengajuan }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Pengajuan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="monitor" class="report-box__icon text-warning"></i> 
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $totalBarang }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Barang Pengajuan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-success"></i> 
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $user }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Weekly Top Products
                        </h2>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">Nama</th>
                                    <th class="text-center whitespace-nowrap">Instansi</th>
                                    <th class="whitespace-nowrap">Judul Pengajuan</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengajuans as $pengajuan)
                                <tr class="intro-x">
                                    <td>{{ $pengajuan->user->name }}</td>
                                    <td>{{ $pengajuan->user->instansi }}</td>
                                    <td>{{ $pengajuan->judul }}</td>
                                    <td class="table-report__action w-40">
                                        @if($pengajuan->status == 'Diterima')
                                        <div class="flex items-center text-success"> {{ $pengajuan->status }} </div>
                                        @else
                                        <div class="flex items-center text-danger"> {{ $pengajuan->status }} </div>
                                        @endif
                                    </td>
                                    <td class="table-report__action">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3 text-primary"
                                                href="/dashboard/admin/{{ $pengajuan->id }}"> <i data-lucide="check-square"
                                                    class="w-4 h-4 mr-1"></i> Detail </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
    </div>
</div>
@endsection