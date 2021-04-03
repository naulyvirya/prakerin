<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('message') }}
                    </div>
                @elseif(session('message1'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('message1') }}
                    </div>
                @endif
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">
                                            <center>Lokasi</center>
                                        </th>
                                        <th scope="col">
                                            <center>RW</center>
                                        </th>
                                        <th scope="col">
                                            <center>Positif</center>
                                        </th>
                                        <th scope="col">
                                            <center>Meninggal</center>
                                        </th>
                                        <th scope="col">
                                            <center>Sembuh</center>
                                        </th>
                                        <th scope="col">
                                            <center>Tanggal</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp ?>
                                    @foreach ($kasus as $data)

                                        <tr>
                                            <th scope="row">
                                                <center>{{ $no++ }}</center>
                                            </th>
                                            <td>
                                                <center>Kelurahan : {{ $data->rw->kelurahan->nama_kelurahan }}<br>
                                                    Kecamatan :
                                                    {{ $data->rw->kelurahan->kecamatan->nama_kecamatan }}<br>
                                                    Kota : {{ $data->rw->kelurahan->kecamatan->kota->nama_kota }}<br>
                                                    Provinsi :
                                                    {{ $data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi }}
                                                </center>
                                            </td>
                                            <td>
                                                <center>{{ $data->rw->nama_rw }}</center>
                                            </td>
                                            <td>
                                                <center>{{ $data->positif }}</center>
                                            </td>
                                            <td>
                                                <center>{{ $data->meninggal }}</center>
                                            </td>
                                            <td>
                                                <center>{{ $data->sembuh }}</center>
                                            </td>
                                            <td>
                                                <center>{{ $data->tanggal }}</center>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </table>
                    </div>
                
            </div>
        </div>
    </div>
    </div>
    </div>
</body>