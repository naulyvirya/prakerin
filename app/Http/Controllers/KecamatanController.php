<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = Kecamatan::with('kota')->get();
        return view('admin.kecamatan.index', compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();
        return view('admin.kecamatan.create', compact('kota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kecamatan' => 'required|unique:kecamatans'
        ]);

        $kecamatan = new Kecamatan();
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')
            ->with(['success'=>'Data Berhasil di Input!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $kecamatan = Kecamatan::findOrFail($id);
        return view('admin.kecamatan.show', compact('kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::findOrFail($id);
        return view('admin.kecamatan.edit', compact('kecamatan', 'kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kecamatan' => 'required'
        ]);

        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')
            ->with(['info'=>'Data Berhasil di Edit!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect()->route('kecamatan.index')
            ->with(['error'=>'Data Berhasil di Hapus!']);
    }
}
