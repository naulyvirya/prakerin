@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Provinsi
                    </div>
                    <div class="card-body">
                        <form action="{{route('provinsi.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <label for="">Kode Provinsi</label>
                                <input type="text" name="kode_provinsi" class="form-control" required>
                                @if ($errors->has('kode_provinsi'))
                                    <span class="text-danger"> {{ $errors->first('kode_provinsi') }} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Nama Provinsi</label>
                                <input type="text" name="nama_provinsi" class="form-control" required>
                                @if ($errors->has('nama_provinsi'))
                                    <span class="text-danger"> {{ $errors->first('nama_provinsi') }} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('provinsi.index') }} " class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection