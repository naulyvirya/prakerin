@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Show Data Kasus
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="">RW</label>
                                <input type="text" name="id_rw" class="form-control" value="{{$kasus->rw->nama_rw}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Positif</label>
                                <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Meninggal</label>
                                <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Sembuh</label>
                                <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="text" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" readonly>
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