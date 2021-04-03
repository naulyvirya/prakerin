<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;
use DB;

class KelurahanSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->table = 'kelurahans';
        $this->filename = base_path().'/database/seeders/csvs/kelurahan.csv';   
    }

    public function run()
    {
        DB::disableQueryLog();

        parent::run();
    }
}