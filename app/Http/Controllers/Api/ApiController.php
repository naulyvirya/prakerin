<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use DB;
class ApiController extends Controller
{
    public function provinsi()
    {
        $provinsi = DB::table('provinsis')
                    ->select('provinsis.nama_provinsi', 'provinsis.kode_provinsi', 
                    DB::raw('SUM(kasuses.positif) as Positif'), 
                    DB::raw('SUM(kasuses.sembuh) as Sembuh'), 
                    DB::raw('SUM(kasuses.meninggal) as Meninggal'))
                        ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                        ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                        ->join('desas', 'kecamatans.id', '=', 'desas.id_kecamatan')
                        ->join('rws', 'desas.id', '=', 'rws.id_desa')
                        ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw') 
                        ->groupBy('provinsis.id')
                        ->get();
                    return response()->json($provinsi, 200);
    }

    public $data = [];

    public function show($id)
    {
        $positif = DB::table('kasuses')
                    ->select('kasuses.positif')
                    ->sum('kasuses.positif');
        $sembuh = DB::table('kasuses')
                    ->select('kasuses.sembuh')
                    ->sum('kasuses.sembuh');
        $meninggal = DB::table('kasuses')
                    ->select('kasuses.meninggal')
                    ->sum('kasuses.meninggal');
    }
}
