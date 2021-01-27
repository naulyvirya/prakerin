@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Data Kasus
                    </div>
                    <div class="card-body">
                        <form action="{{route('kasus.update', $kasus->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Pilih RW</label>
                                <select name="id_rw" class="form-control">
                                    @foreach($rw as $data)
                                        <option value="{{$data->id}}" {{$data->id == $kasus->id_rw ? 'selected' : ''}}>
                                            {{$data->nama_rw}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Positif</label>
                                <input type="number" name="positif" value="{{$kasus->positif}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Meninggal</label>
                                <input type="number" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Sembuh</label>
                                <input type="number" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('kasus.index') }} " class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection