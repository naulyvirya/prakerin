@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Data Desa
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <input type="text" name="id_kecamatan" value="{{$desa->kecamatan->nama_kecamatan}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Desa</label>
                                <input type="text" name="nama_desa" value="{{$desa->nama_desa}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <a href=" {{ route('desa.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection