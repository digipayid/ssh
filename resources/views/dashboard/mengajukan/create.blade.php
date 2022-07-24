@extends('layouts.main')

@section('title')
Mengajukan Barang
@endsection

@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Mengajukan Barang
    </h2>
</div>
<div class="grid grid-cols-12 gap-12 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        </h2>
        @if (session()->has('success'))
        <div class="alert alert-success text-white show mb-2" role="alert">{{ session('success') }}</div>
        @endif
        <!-- BEGIN: Basic Table -->
        <!-- BEGIN: Bordered Table -->
        <div class="intro-y box mt-5">
            <div>
                <form action="/dashboard/mengajukan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="intro-y col-span-12 lg:col-span-6">
                            <!-- BEGIN: Form Input -->

                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="pengajuan_id" value="{{ $pengajuan->id }}">

                            <div class="intro-y box p-5">
                                <div class="mt-3">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input id="nama_barang" name="nama_barang" type="text" class="form-control w-full"
                                        placeholder="Nama Barang" required>
                                </div>
                                <div class="mt-3">
                                    <label for="spesifikasi" class="form-label">Spesifikasi</label>
                                    <textarea id="spesifikasi" name="spesifikasi" type="text"
                                        class="form-control w-full" placeholder="Spsifikasi" required></textarea>
                                </div>

                                <div class="mt-3">
                                    <label for="satuan" class="form-label">Satuan</label>
                                    <input id="satuan" name="satuan" type="text" class="form-control w-full"
                                        placeholder="Satuan" required>
                                </div>

                            </div>
                            <!-- END: Form Input -->
                        </div>
                        <div class="intro-y col-span-12 lg:col-span-6">
                            <!-- BEGIN: Form Input -->
                            <div class="intro-y box p-5">
                                <div class="mt-3">
                                    <label for="harga_toko1" class="form-label">Harga Toko 1</label>
                                    <input id="harga_toko1" name="harga_toko1" type="text" class="form-control w-50"
                                        placeholder="ex 2000000" required>
                                </div>

                                <div class="mt-3">
                                    <label for="harga_toko2" class="form-label">Harga Toko 2</label>
                                    <input id="harga_toko2" name="harga_toko2" type="text" class="form-control w-50"
                                        placeholder="ex 2000000" required>
                                </div>
                                <div class="mt-3">
                                    <label for="harga_toko3" class="form-label">Harga Toko 3</label>
                                    <input id="harga_toko3" name="harga_toko3" type="text" class="form-control w-50"
                                        placeholder="ex 2000000" required>
                                </div>

                                <div class="mt-3">
                                    <label for="gambar_survey" class="form-label">Hasil Survey</label>
                                    <input id="gambar_survey" name="gambar_survey" type="file"
                                        class="form-control w-50 @error('gambar_survey') border-danger @enderror"
                                        placeholder="ex 2000000">
                                    @error('gambar_survey')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary w-48 mt-3">Tambah Barang</button>
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
