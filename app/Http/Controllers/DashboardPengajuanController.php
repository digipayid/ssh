<?php

namespace App\Http\Controllers;

use App\Models\DetailPengajuan;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class DashboardPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengajuan.index', [
            'pengajuans' => Pengajuan::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengajuan.create');
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
            'judul' => 'required|max:255',
            'tahun' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Pengajuan::create($validatedData);
        return redirect('/dashboard/pengajuan')->with('success', 'Pengajuan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuan $pengajuan)
    {
        return view('dashboard.pengajuan.show', [
            'judul' => $pengajuan->judul,
            'tahun' => $pengajuan->tahun,
            'pengajuans' => $pengajuan->detailPengajuan
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
    public function destroy(Pengajuan $pengajuan)
    {
    //    
    }
}
