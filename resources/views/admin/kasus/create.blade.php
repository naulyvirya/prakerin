@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kasus
                    </div>
                    <div class="card-body">
                        <form action="{{route('kasus.store')}}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col">
                                    @livewire('livewire')
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <label for="">Positif</label>
                                        <input type="number" name="positif" min="1" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sembuh</label>
                                        <input type="number" name="sembuh" min="1" max="positif" class="form-control" required>
                                        @if ($errors->has('sembuh'))
                                            <span class="text-danger"> {{ $errors->first('sembuh') }} </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Meninggal</label>
                                        <input type="number" name="meninggal" min="1" max="positif" class="form-control" required>
                                        @if ($errors->has('meninggal'))
                                            <span class="text-danger"> {{ $errors->first('meninggal') }} </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" required>
                                    </div>
                                </div>
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