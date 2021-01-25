@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Data Kecamatan
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="">Kota</label>
                                <input type="text" name="id_kota" value="{{$kecamatan->kota->nama_kota}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama kecamatan</label>
                                <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <a href=" {{ route('kecamatan.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection