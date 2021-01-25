<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;

class Provinsi extends Model
{
    public function Kota(){
        return $this->hasMany('App\Models\Kota','id_provinsi');
    }
}
