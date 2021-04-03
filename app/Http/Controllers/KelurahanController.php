<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahan = Kelurahan::with('kecamatan')->get();
        return view('admin.kelurahan.index', compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.kelurahan.create', compact('kecamatan'));
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
            'nama_kelurahan' => 'required|unique:kelurahans'
        ]);

        $kelurahan = new Kelurahan();
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')
            ->with(['success'=>'Data Berhasil di Input!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $kelurahan = Kelurahan::findOrFail($id);
        return view('admin.kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::findOrFail($id);
        return view('admin.kelurahan.edit', compact('kelurahan', 'kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelurahan' => 'required'
        ]);

        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')
            ->with(['info'=>'Data Berhasil di Edit!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->delete();
        return redirect()->route('kelurahan.index')
            ->with(['error'=>'Data Berhasil di Hapus!']);
    }
}
