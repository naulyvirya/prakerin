<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use Carbon\Carbon;
use DB;
class ApiController extends Controller
{
    public function provinsi()
    {
        $allDay = DB::table('provinsis')
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

        $today = DB::table('provinsis')
                    ->select('provinsis.nama_provinsi', 'provinsis.kode_provinsi', 
                    DB::raw('SUM(kasuses.positif) as Positif'), 
                    DB::raw('SUM(kasuses.sembuh) as Sembuh'), 
                    DB::raw('SUM(kasuses.meninggal) as Meninggal'))
                        ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                        ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                        ->join('desas', 'kecamatans.id', '=', 'desas.id_kecamatan')
                        ->join('rws', 'desas.id', '=', 'rws.id_desa')
                        ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw') 
                        ->whereDate('kasuses.tanggal', Carbon::today()) 
                        ->groupBy('provinsis.id')
                        ->get();

            $positif = DB::table('rws')->select('kasuses.positif', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.meninggal');
            
        $data = [
                'success' => true,
                'Data' => [
                    ['Hari ini' => $today,
                    'Semua' => $allDay],
                ],
                'Total' => [
                    'Positif' => $positif,
                    'Sembuh' => $sembuh,
                    'Meninggal' => $meninggal
                ],
        ];    
        return response()->json($data, 200);        
    }


    public function showProvinsi($id)
    {   
        $show = DB::table('provinsis')
        ->select('provinsis.nama_provinsi', 'provinsis.kode_provinsi', 
        DB::raw('SUM(kasuses.positif) as positif'), 
        DB::raw('SUM(kasuses.sembuh) as sembuh'), 
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
            ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
            ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
            ->join('desas', 'kecamatans.id', '=', 'desas.id_kecamatan')
            ->join('rws', 'desas.id', '=', 'rws.id_desa')
            ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
            ->where('provinsis.id', $id)
            ->groupBy('provinsis.id')
            ->get();
            if ($show) {
                return response()->json([
                    'success' => true,
                    'data'    => $show
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Tidak Ditemukan!',
                ], 404);
            }
    }

    public function indonesia()
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

        $indonesia = [
            'success' => true,
            'data' => [
                'name' => 'Indonesia',
                'positif' => $positif,
                'sembuh' => $sembuh,
                'meninggal' => $meninggal
            ],
            'message' => 'Berhasil',
        ];
        return response()->json($indonesia, 200);
    }

    public function positif()
    {
        $positif = DB::table('rws')->select('kasuses.positif', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.positif');
        $indonesia = [
            'success' => true,
            'data' => [
                    'name' => 'Jumlah Positif',
                    'value' => $positif
                ],
                    'message' => 'Berhasil',
            ];
            return response()->json($indonesia, 200);            
    }

    public function sembuh()
    {
        $sembuh = DB::table('rws')->select('kasuses.sembuh', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.sembuh');
        $indonesia = [
            'success' => true,
            'data' => [
                    'name' => 'Jumlah Sembuh',
                    'value' => $sembuh
                ],
                    'message' => 'Berhasil',
            ];
            return response()->json($indonesia, 200);            
    }

    public function meninggal()
    {
        $meninggal = DB::table('rws')->select('kasuses.meninggal', 'kasuses.sembuh', 'kasuses.meninggal')
                    ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                    ->sum('kasuses.meninggal');
        $indonesia = [
            'success' => true,
            'data' => [
                    'name' => 'Jumlah Meninggal',
                    'value' => $meninggal
                ],
                    'message' => 'Berhasil',
            ];
            return response()->json($indonesia, 200);            
    }
}
