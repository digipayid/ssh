@extends('layouts.main')

@section('title')
    Buat Pengajuan
@endsection

@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Buat Pengajuan
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-12 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Basic Table -->
            <!-- BEGIN: Bordered Table -->
            <div class="intro-y box mt-5">
                <div>
                    <form action="/dashboard/pengajuan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="intro-y col-span-12 lg:col-span-6">
                                <!-- BEGIN: Form Input -->

                                <input type="hidden" name="users_id" value="{{ auth()->user()->id }}">

                                <div class="intro-y box p-5">
                                    <div class="mt-3">
                                        <label for="judul" class="form-label">Nama Barang</label>
                                        <input id="judul" name="judul" type="text" class="form-control w-full"
                                            placeholder="Ex Pengajuan barang untuk kebutuhan mengajar">
                                    </div>
                                    <div class="mt-3">
                                        <select class="form-select mt-2 sm:mr-2" name="tahun" aria-label="Default select example">
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select> 
                                    </div>
                                    <button type="submit" class="btn btn-primary w-24 mt-3">Tambah</button>
                                </div>

                                <!-- END: Form Input -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Bordered Table -->
        </div>
    </div>
@endsection

@push('script')

@endpush