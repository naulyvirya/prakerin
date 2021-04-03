<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelurahan;
use App\Models\Kasus;

class Rw extends Model
{
    public function Kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan','id_kelurahan');
    }

    public function Kasus(){
        return $this->hasMany('App\Models\Kasus','id_rw');
    }
}
