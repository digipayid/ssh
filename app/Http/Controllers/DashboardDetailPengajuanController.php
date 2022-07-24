<?php

namespace App\Http\Controllers;

use App\Models\DetailPengajuan;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class DashboardDetailPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'pengajuan_id' => 'required',
            'nama_barang' => 'required',
            'spesifikasi' => 'required',
            'satuan' => 'required',
            'harga_toko1' => 'required',
            'harga_toko2' => 'required',
            'harga_toko3' => 'required',
            'gambar_survey' => 'required|mimes:jpg,png,pdf,xlx,xlsx,csv|max:2048'
        ]);

        if($request->file('gambar_survey')){
            $validatedData['gambar_survey'] = $request->file('gambar_survey')->store('images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $detailPengajuan = DetailPengajuan::create($validatedData);
        $detailPengajuan->save();
        return redirect()->back()->with('success', 'Pengajuan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuan = Pengajuan::find($id);

        return view('dashboard.mengajukan.create',[
            'pengajuan' => $pengajuan
            ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DetailPengajuan::destroy($id);
        return redirect()->back()->with('success', 'Barang pengajuan berhasil dihapus');
    }
}
