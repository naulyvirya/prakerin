@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Data RW
                    </div>
                    <div class="card-body">
                        <form action="{{route('rw.update', $rw->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <label for="">Pilih Desa</label>
                                <select name="id_desa" class="form-control">
                                    @foreach($desa as $data)
                                        <option value="{{$data->id}}" {{$data->id == $rw->id_desa ? 'selected' : ''}}>
                                            {{$data->nama_desa}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">RW</label>
                                <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" required>
                                @if ($errors->has('nama_rw'))
                                    <span class="text-danger"> {{ $errors->first('nama_rw') }} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('rw.index') }} " class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection