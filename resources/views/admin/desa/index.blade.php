@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                    @include('flash-message')
                <div class="card-header">
                    <b>Data Desa</b> 
                    <a href="{{route('desa.create')}}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($desa as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_desa}}</td>
                                <td>{{$data->kecamatan->nama_kecamatan}}</td>
                                <td>
                                    <form action="{{route('desa.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="far fa-eye btn btn-info" href=" {{ route('desa.show', $data->id) }} "></a>
                                        <a class="far fa-edit btn btn-warning" href=" {{ route('desa.edit', $data->id) }} "></a>
                                        <button type="submit" class="far fa-trash-alt btn btn-danger" onclick="return confirm('Anda Yakin Ingin Hapus?')"></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
