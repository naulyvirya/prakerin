@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>Data Kota</b> 
                    <a href="{{route('kota.create')}}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode Kota</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($kota as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kode_kota}}</td>
                                <td>{{$data->nama_kota}}</td>
                                <td>{{$data->provinsi->nama_provinsi}}</td>
                                <td>
                                    <form action="{{route('kota.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="btn btn-info" href=" {{ route('kota.show', $data->id) }} ">Show</a>
                                        <a class="btn btn-warning" href=" {{ route('kota.edit', $data->id) }} ">Edit</a>
                                        <button type="submit" class="btn btn-danger" >Delete</button>
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
