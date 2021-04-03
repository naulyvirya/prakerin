@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><b>DATA PENYEBARAN CORONAVIRUS BERSKALA LOKAL</b></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card-body bg-danger">
                        <img src="{{asset('assets/assetfrontend/assets/img/sad.png')}}" style="display: block; margin: auto;" 
                        width="50" height="50" alt="Positif"><br>
                            <p class="text-white">TOTAL POSITIF</p>
                            <h2 class="text-white number-font">{{ $positif }}</h2>
                            <p class="text-white">Orang</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-body bg-success">
                        <i><img src="{{asset('assets/assetfrontend/assets/img/happy.png')}}" style="display: block; margin: auto;"
                        width="50" height="50" alt="Positif"></i><br>
                            <p class="text-white">TOTAL SEMBUH</p>
                            <h2 class="text-white number-font">{{ $sembuh }}</h2>
                            <p class="text-white">Orang</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-body bg-secondary">
                        <i><img src="{{asset('assets/assetfrontend/assets/img/cry.png')}}"  style="display: block; margin: auto;"
                        width="50" height="50" alt="Positif"></i><br>
                            <p class="text-white">TOTAL MENINGGAL</p>
                            <h2 class="text-white number-font">{{ $meninggal }}</h2>
                            <p class="text-white">Orang</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col text-center">
                    <h6>
                       <p>UPDATE TERAKHIR : {{ $tanggal }}</p> 
                    </h6>
                </div>
            </div>
            <div class="row row-cards">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                DATA CORONAVIRUS BERSKALA GLOBAL
                            </h3>
                        </div>
                        <div class="card-body">
                        <div style="height:600px; overflow:auto; margin:15px;">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                            <tr>
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Negara</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no = 1;    
                                    @endphp
                                    @foreach($global as $data)
                                        <tr>
                                            <td> <?php echo $no++ ?></td>
                                            <td> 
                                                <?php echo $data['attributes']['Country_Region'] ?>
                                            </td>
                                            <td> 
                                                <?php 
                                                echo number_format($data['attributes']['Confirmed']) 
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                echo number_format($data['attributes']['Recovered'])
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                echo number_format($data['attributes']['Deaths'])
                                                ?>
                                            </td>
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
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
