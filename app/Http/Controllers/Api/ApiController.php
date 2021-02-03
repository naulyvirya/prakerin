<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
class ApiController extends Controller
{
    public function provinsi(Request $request)
    {
        $provinsi = Provinsi::get();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil',
            'data' => [
                'provinsi' => $provinsi,
                'hari_ini' => [
                    'positif' => $kasus->positif,
                    'sembuh' => $sembuh,
                    'meninggal' => $meninggal
                ],
            ],
        ], 200);
    }
}
