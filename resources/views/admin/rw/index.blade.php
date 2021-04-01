@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    @include('flash-message')
                <div class="card-header">
                    <b>Data Rw</b> 
                    <a href="{{route('rw.create')}}" class=" btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                            <tr>
                                <th>No</th>
                                <th>RW</th>
                                <th>Desa</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($rw as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_rw}}</td>
                                <td>{{$data->desa->nama_desa}}</td>
                                <td>
                                    <form action="{{route('rw.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="far fa-edit btn btn-warning" href=" {{ route('rw.edit', $data->id) }} "></a>
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
