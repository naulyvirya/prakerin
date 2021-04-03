@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    @include('flash-message')
                <div class="card-header">
                    <h5><b>Data Provinsi</b></h5> 
                    <!-- <a href="{{route('provinsi.create')}}" class="btn btn-primary float-right">Tambah</a> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">                            <tr>
                                <th>No</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($provinsi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_provinsi}}</td>
                                <td>
                                    <form action="{{route('provinsi.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="far fa-edit btn btn-warning" href=" {{ route('provinsi.edit', $data->id) }} "></a>
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
