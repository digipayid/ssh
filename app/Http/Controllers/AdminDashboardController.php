<?php

namespace App\Http\Controllers;

use App\Models\DetailPengajuan;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::count();
        $totalBarang = DetailPengajuan::count();
        $totalPengajuan = Pengajuan::count();

        return view('dashboard.admin.index', [
            'pengajuans' => Pengajuan::all(),
            'user' => $user,
            'totalBarang' => $totalBarang,
            'totalPengajuan' => $totalPengajuan
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuans = Pengajuan::find($id);

        return view('dashboard.admin.show',[
            'judul' => $pengajuans->judul,
            'tahun' => $pengajuans->tahun,
            'pengajuans' => $pengajuans->detailPengajuan,
            'keterangan' => $pengajuans->keterangan,
            'status' => $pengajuans->status,
            'pengajuan' => $pengajuans->id
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajuan $pengajuan)
    {

        return view('dashboard.admin.show', [
            'pengajuan' => $pengajuan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Pengajuan $pengajuan)
    {
        $validatedData = $request->validate([
            'user_id',
            'judul',
            'tahun',
            'keterangan' => 'required',
            'status' => 'required'
        ]);

        Pengajuan::where('id', $id)->update($validatedData);
        return redirect('/dashboard/admin')->with('success', 'Pengajuan berhasil dibuat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
