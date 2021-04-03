<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;
use App\Models\Kelurahan;

class Kecamatan extends Model
{
    public function Kota(){
        return $this->belongsTo('App\Models\Kota','id_kota');
    }

    public function Kelurahan(){
        return $this->hasMany('App\Models\Kelurahan','id_kecamatan');
    }
}
