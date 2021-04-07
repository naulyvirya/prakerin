<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasus = Kasus::with('rw.kelurahan.kecamatan.kota.provinsi')->get();
        return view('admin.kasus.index', compact('kasus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('admin.kasus.create', compact('rw'));
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
            'id_rw' => 'required',
            'positif' => ['required', 'numeric', 'min:0'],
            'sembuh' => ['required','numeric','min:0','max:'.$request->positif],
            'meninggal' => ['required','numeric','min:0','max:'.$request->positif]
        ]);

        $kasus = new Kasus();
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->meninggal = $request->meninggal;
        $kasus->sembuh = $request->sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')
            ->with(['success'=>'Data Berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('admin.kasus.show', compact('kasus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::all();
        $kasus = Kasus::findOrFail($id);
        return view('admin.kasus.edit', compact('kasus', 'rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'id_rw' => 'required',
        'positif' => 'required|min:1',
        'sembuh' => ['required','numeric','min:0','max:'.$request->positif],
        'meninggal' => ['required','numeric','min:0','max:'.$request->positif]

    ]);
        $kasus = Kasus::findOrFail($id);
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->meninggal = $request->meninggal;
        $kasus->sembuh = $request->sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')
            ->with(['info'=>'Data Berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->delete();
        return redirect()->route('kasus.index')
            ->with(['error'=>'Data Berhasil di Hapus!']);
    }
}
