@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Show Data RW
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="">Desa</label>
                                <input type="text" name="id_desa" value="{{$rw->desa->nama_desa}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">RW</label>
                                <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <a href=" {{ route('rw.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection