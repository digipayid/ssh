@extends('layouts.main')

@section('title')
    Detail Pengajuan
@endsection

@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Detail Pengajuan
        </h2>

    </div>
    <div class="grid grid-cols-12 gap-12 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            @if (session()->has('success'))
                <div class="alert alert-success text-white show mb-2" role="alert">{{ session('success') }}</div>
            @endif
            <!-- BEGIN: Basic Table -->
            <!-- BEGIN: Bordered Table -->
            <div class="intro-y box mt-5">
                <div class="p-5" id="bordered-table">
                    <div class="preview">
                        <div class="mb-3">
                            <h2 class="mb-3 text-sm font-medium mr-auto">{{ $judul }}</h2>
                            <h2 class="mb-3 text-sm font-medium mr-auto">Tahun Pengusulan : {{ $tahun }}</h2>
                            <form action="/dashboard/admin/{{ $pengajuan }}" method="post">
                                @method('put')
                                @csrf
                                <div class="mt-3">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <textarea id="keterangan" name="keterangan" type="text" class="form-control w-50"
                                        placeholder="Ex Silahkan lengkapi data barang pengajuan" required>{{ $keterangan }}</textarea>
                                </div>
                                <div class="mt-3">
                                    <select class="form-select mt-2 mb-3 w-48" name="status"
                                        aria-label="Default select example">
                                        <option value="Diterima"> Diterima </option>
                                        <option value="Ditolak"> Ditolak </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-48 mt-3"> Update </button>
                            </form>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="table table-bordered" id="table1">
                                <thead>
                                    <tr>
                                        {{-- <th class="whitespace-nowrap">No</th> --}}
                                        <th class="whitespace-nowrap">Nama Barang</th>
                                        <th class="whitespace-nowrap">Spesifikasi</th>
                                        <th class="whitespace-nowrap">Satuan</th>
                                        <th class="whitespace-nowrap">Harga Toko 1</th>
                                        <th class="whitespace-nowrap">Harga Toko 2</th>
                                        <th class="whitespace-nowrap">Harga Toko 3</th>
                                        <th class="whitespace-nowrap w-48">Hasil Survey Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengajuans as $pengajuan)
                                        <tr>
                                            <td class="nama_barang">{{ $pengajuan->nama_barang }}</td>
                                            <td class="spesifikasi">{{ $pengajuan->spesifikasi }}</td>
                                            <td class="satuan">{{ $pengajuan->satuan }}</td>
                                            <td class="harga_toko1">{{ $pengajuan->harga_toko1 }}</td>
                                            <td class="harga_toko2">{{ $pengajuan->harga_toko2 }}</td>
                                            <td class="harga_toko3">{{ $pengajuan->harga_toko3 }}</td>
                                            <td class="gambar_survey">
                                                <a href="{{ asset('storage/' . $pengajuan->gambar_survey) }}"
                                                    class="btn btn-rounded-primary w-50 mr-1 mb-2">Lihat / Download</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Bordered Table -->
        </div>
    </div>
@endsection

@push('script')
@endpush
