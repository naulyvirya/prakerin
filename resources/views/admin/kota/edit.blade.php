@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data kota
                    </div>
                    <div class="card-body">
                        <form action="{{route('kota.update', $kota->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <label for="">Pilih Provinsi</label>
                                <select name="id_provinsi" class="form-control">
                                    @foreach($provinsi as $data)
                                        <option value="{{$data->id}}" {{$data->id == $kota->id_provinsi ? 'selected' : ''}}>
                                            {{$data->nama_provinsi}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama kota</label>
                                <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" required>
                                @if ($errors->has('nama_kota'))
                                    <span class="text-danger"> {{ $errors->first('nama_kota') }} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('kota.index') }} " class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection