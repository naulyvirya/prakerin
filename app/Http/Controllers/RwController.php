<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Desa;
use Illuminate\Http\Request;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rw = Rw::with('desa')->get();
        return view('admin.rw.index', compact('rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa = Desa::all();
        return view('admin.rw.create', compact('desa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rw = new Rw();
        $rw->id_desa = $request->id_desa;
        $rw->nama_rw = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')
            ->with(['success'=>'Data Berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('admin.rw.show', compact('rw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa = Desa::all();
        $rw = Rw::findOrFail($id);
        return view('admin.rw.edit', compact('rw', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rw = Rw::findOrFail($id);
        $rw->id_desa = $request->id_desa;
        $rw->nama_rw = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')
            ->with(['info'=>'Data Berhasil di Edit!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')
            ->with(['error'=>'Data Berhasil di Hapus!']);
    }
}
