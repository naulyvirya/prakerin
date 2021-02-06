<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert([
            ['id' => 11,'kode_provinsi' => 11,'nama_provinsi' => 'ACEH'],
            ['id' => 12,'kode_provinsi' => 12,'nama_provinsi' => 'SUMATERA UTARA'],
            ['id' => 13,'kode_provinsi' => 13,'nama_provinsi' => 'SUMATERA BARAT'],
            ['id' => 14,'kode_provinsi' => 14,'nama_provinsi' => 'RIAU'],
            ['id' => 15,'kode_provinsi' => 15,'nama_provinsi' => 'JAMBI'],
            ['id' => 16,'kode_provinsi' => 16,'nama_provinsi' => 'SUMATERA SELATAN'],
            ['id' => 17,'kode_provinsi' => 17,'nama_provinsi' => 'BENGKULU'],
            ['id' => 18,'kode_provinsi' => 18,'nama_provinsi' => 'LAMPUNG'],
            ['id' => 19,'kode_provinsi' => 19,'nama_provinsi' => 'KEPULAUAN BANGKA BELITUNG'],
            ['id' => 21,'kode_provinsi' => 21,'nama_provinsi' => 'KEPULAUAN RIAU'],
            ['id' => 31,'kode_provinsi' => 31,'nama_provinsi' => 'DKI JAKARTA'],
            ['id' => 32,'kode_provinsi' => 32,'nama_provinsi' => 'JAWA BARAT'],
            ['id' => 33,'kode_provinsi' => 33,'nama_provinsi' => 'JAWA TENGAH'],
            ['id' => 34,'kode_provinsi' => 34,'nama_provinsi' => 'DI YOGYAKARTA'],
            ['id' => 35,'kode_provinsi' => 35,'nama_provinsi' => 'JAWA TIMUR'],
            ['id' => 36,'kode_provinsi' => 36,'nama_provinsi' => 'BANTEN'],
            ['id' => 51,'kode_provinsi' => 51,'nama_provinsi' => 'BALI'],
            ['id' => 52,'kode_provinsi' => 52,'nama_provinsi' => 'NUSA TENGGARA BARAT'],
            ['id' => 53,'kode_provinsi' => 53,'nama_provinsi' => 'NUSA TENGGARA TIMUR'],
            ['id' => 61,'kode_provinsi' => 61,'nama_provinsi' => 'KALIMANTAN BARAT'],
            ['id' => 62,'kode_provinsi' => 62,'nama_provinsi' => 'KALIMANTAN TENGAH'],
            ['id' => 63,'kode_provinsi' => 63,'nama_provinsi' => 'KALIMANTAN SELATAN'],
            ['id' => 64,'kode_provinsi' => 64,'nama_provinsi' => 'KALIMANTAN TIMUR'],
            ['id' => 65,'kode_provinsi' => 65,'nama_provinsi' => 'KALIMANTAN UTARA'],
            ['id' => 71,'kode_provinsi' => 71,'nama_provinsi' => 'SULAWESI UTARA'],
            ['id' => 72,'kode_provinsi' => 72,'nama_provinsi' => 'SULAWESI TENGAH'],
            ['id' => 73,'kode_provinsi' => 73,'nama_provinsi' => 'SULAWESI SELATAN'],
            ['id' => 74,'kode_provinsi' => 74,'nama_provinsi' => 'SULAWESI TENGGARA'],
            ['id' => 75,'kode_provinsi' => 75,'nama_provinsi' => 'GORONTALO'],
            ['id' => 76,'kode_provinsi' => 76,'nama_provinsi' => 'SULAWESI BARAT'],
            ['id' => 81,'kode_provinsi' => 81,'nama_provinsi' => 'MALUKU'],
            ['id' => 82,'kode_provinsi' => 82,'nama_provinsi' => 'MALUKU UTARA'],
            ['id' => 91,'kode_provinsi' => 91,'nama_provinsi' => 'PAPUA BARAT'],
            ['id' => 94,'kode_provinsi' => 94,'nama_provinsi' => 'PAPUA']

        ]);
    }
}