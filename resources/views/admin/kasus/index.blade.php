@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
            @include('flash-message')
                    <div class="card-header py-3">
                    <h10 class="m-0 font-weight-bold text-primary">
                        Data kasus
                        <a href=" {{route('kasus.create')}} " class="btn btn-primary" style="float: right;">Tambah Data</a>
                    </h10>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                      <th scope="col">No</th>
                                            <th >Lokasi</th>
                                            <th >RW</th>
                                            <th >Reaktif</th>
                                            <th >Positif</th>
                                            <th >Sembuh</th>
                                            <th >Meninggal</th>
                                            <th >Tanggal</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no=1;
                                    @endphp
                                    @foreach($kasus as $data)

                                        <tr>
                                            <th scope="row">{{$no++}}</th>
                                            <td>Desa : {{$data->rw->desa->nama_desa}}<br>
                                            Kecamatan : {{$data->rw->desa->kecamatan->nama_kecamatan}}<br>
                                            Kota : {{$data->rw->desa->kecamatan->kota->nama_kota}}<br>
                                            Provinsi : {{$data->rw->desa->kecamatan->kota->provinsi->nama_provinsi}}</td>
                                            <td>{{$data->rw->nama_rw}}</td>
                                            <td>{{$data->reaktif}}</td>
                                            <td>{{$data->positif}}</td>
                                            <td>{{$data->sembuh}}</td>
                                            <td>{{$data->meninggal}}</td>
                                            <td>{{$data->tanggal}}</td>
                                            <td>
                                            <form action="{{route('kasus.destroy',$data->id)}}"  method="POST">
                                            @csrf
                                            @method('DELETE')
                                              <a href="{{route('kasus.show',$data->id)}}" class="far fa-eye btn btn-info btn-sm"></a>
                                    <a href="{{route('kasus.edit',$data->id)}}" class="far fa-edit btn btn-warning btn-sm"></a>
                                    <button type="submit"  class="far fa-trash-alt btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')">
                                            </form
                                        </tr>
                                    @endforeach
                            </tbody>  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection