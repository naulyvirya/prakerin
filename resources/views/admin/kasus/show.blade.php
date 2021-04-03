@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kasus
                    </div>
                    <div class="card-body">
                        <div class="form-group row ">
                            <div class="col-md-6">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" name="nama_provinsi" class="form-control" value="{{$kasus->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}" readonly>
                            </div>
                        </div> 
                            <div class="form-group row ">
                                <div class="col-md-6">
                                    <label for="kota">Kota</label>
                                    <input type="text" name="nama_kota" class="form-control" value="{{$kasus->rw->kelurahan->kecamatan->kota->nama_kota}}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="positif">Jumlah Positif</label>
                                    <input type="text" class="form-control" name="positif" value="{{$kasus->positif}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-6">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" name="nama_kota" class="form-control" value="{{$kasus->rw->kelurahan->kecamatan->nama_kecamatan}}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="sembuh">Jumlah Sembuh</label>
                                    <input type="text" class="form-control" name="sembuh" value="{{$kasus->sembuh}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-6">
                                    <label for="kelurahan" >Kelurahan</label>
                                    <input type="text" name="nama_kota" class="form-control" value="{{$kasus->rw->kelurahan->nama_kelurahan}}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="meninggal">Jumlah Meninggal</label>
                                    <input type="text" class="form-control" name="meninggal" value="{{$kasus->meninggal}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-6">
                                    <label for="rw" >RW</label>
                                    <input type="text" class="form-control" name="rw" value="{{$kasus->rw->nama_rw}}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal" >tanggal</label>
                                    <input type="text" class="form-control" name="tanggal" value="{{$kasus->tanggal}}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href=" {{ route('kasus.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection