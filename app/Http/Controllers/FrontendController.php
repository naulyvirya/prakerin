<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Kasus;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Kota;
use App\Models\Rw;
use App\Models\Provinsi;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $positif = DB::table('rws')->select('kasuses.positif', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.positif');
        $sembuh = DB::table('rws')->select('kasuses.sembuh', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')->select('kasuses.meninggal', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.meninggal');
        $data = Kasus::all();
        $provinsi = DB::table('provinsis')
                    ->select('provinsis.nama_provinsi', 
                    DB::raw('SUM(kasuses.positif) as positif'), 
                    DB::raw('SUM(kasuses.sembuh) as sembuh'), 
                    DB::raw('SUM(kasuses.meninggal) as meninggal'))
                        ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                        ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                        ->join('desas', 'kecamatans.id', '=', 'desas.id_kecamatan')
                        ->join('rws', 'desas.id', '=', 'rws.id_desa')
                        ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                        ->groupBy('provinsis.id')
                        ->get();
        $dataglobal = file_get_contents("https://api.kawalcorona.com/");
        $global = json_decode($dataglobal, true);
        return view('frontend.index', compact('provinsi', 'data', 'positif', 'sembuh', 'meninggal', 'global'));
    }
}
