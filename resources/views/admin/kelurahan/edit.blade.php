@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Edit Data Kelurahan
                    </div>
                    <div class="card-body">
                        <form action="{{route('kelurahan.update', $kelurahan->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <label for="">Pilih Kecamatan</label>
                                <select name="id_kecamatan" class="form-control">
                                    @foreach($kecamatan as $data)
                                        <option value="{{$data->id}}" {{$data->id == $kelurahan->id_kecamatan ? 'selected' : ''}}>
                                            {{$data->nama_kecamatan}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kelurahan</label>
                                <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" required>
                                @if ($errors->has('nama_kelurahan'))
                                    <span class="text-danger"> {{ $errors->first('nama_kelurahan') }} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('kelurahan.index') }} " class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection