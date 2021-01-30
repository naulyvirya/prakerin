@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <p>Edit Data Kasus</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kasus.update', $kasus->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                @livewire('livewire', ['selectedRw' => $kasus->id_rw, 'selectedDesa' => $kasus->rw->id_desa,
                                                'selectedKecamatan' => $kasus->rw->desa->id_kecamatan,
                                                'selectedKota' => $kasus->rw->desa->kecamatan->id_kota,
                                                'selectedProvinsi' => $kasus->rw->desa->kecamatan->kota->id_provinsi])
                            </div>
                            <div class="col">
                                <div class="form-group">                                        
                                    <label for="">Reaktif</label>
                                    <input type="text" name="reaktif" value="{{$kasus->reaktif}}" class="form-control" required>
                                </div> 
                                <div class="form-group">
                                    <label for="">Positif</label>
                                    <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Sembuh</label>
                                    <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Meninggal</label>
                                    <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href=" {{ route('kasus.index') }} " class="btn btn-danger">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection