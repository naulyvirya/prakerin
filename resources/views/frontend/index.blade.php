<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kawal Corona</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('assets/assetfrontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{asset('assets/assetfrontend/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/assetfrontend/assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <!-- Custom CSS -->
  <link href="{{asset('assets/assetfrontend/assets/css/stylish-portfolio.min.css')}}" rel="stylesheet">

</head>

<body>
<!-- Header -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-sm">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><h4>Covid</h4></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <!-- {{ url('frontend/hotline') }} -->
            <li class="nav-item active">
                <a class="nav-link js-scroll-trigger" href="#dataindo">Data Kasus</a>
            </li>
            
        </ul>  
    </nav>
  <!-- End Header -->
  <!-- Content -->
  <br>
    <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">KAWAL CORONA</h1>
      <h3 class="mb-5">
        <em>Coronavirus Global & Local Live Data</em>
      </h3>
    </header>
    <section class="content-section bg-white" id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="d-flex">
                        <div class="col-lg-10 mx-auto">
                            <h2 class="text-left">Apa itu Virus Corona??</h2><br>
                            <p style="text-align:justify;" class="lead mb-3">
                                Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. 
                                Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, 
                                infeksi paru-paru yang berat, hingga kematian.
                            </p>
                            <p style="text-align:justify;" class="lead mb-3">
                                Kasus pertama penyakit ini terjadi di kota Wuhan, Cina, pada akhir Desember 2019. Setelah itu, 
                                COVID-19 menular antarmanusia dengan sangat cepat dan menyebar ke puluhan negara, 
                                termasuk Indonesia, hanya dalam beberapa bulan.

                                Penyebarannya yang cepat membuat beberapa negara menerapkan kebijakan untuk 
                                memberlakukan lockdown untuk mencegah penyebaran virus Corona. 
                                Di Indonesia, pemerintah menerapkan kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini.
                            </p>
                        </div>
                        <div class="ml-auto">
                        <br><br><br>
                        <br><br><br>
                            <img src="{{asset('assets/assetfrontend/assets/img/corona6.png')}}" alt="Coronavirus" 
                            width="250" height="250">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <div class="container-fluid">
            <h2 class="card-title text-center">
                Data Penyebaran Covid-19 di Indonesia
            </h2>
            <div class="row">
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="card-body bg-danger">
                    <img src="{{asset('assets/assetfrontend/assets/img/sad.png')}}" style="display: block; margin: auto;" 
                    width="50" height="50" alt="Positif"><br>
                        <p class="text-white">TOTAL POSITIF</p>
                        <h2 class="text-white number-font">{{ $positif }}</h2>
                        <p class="text-white">Orang</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-body bg-success">
                    <i><img src="{{asset('assets/assetfrontend/assets/img/happy.png')}}" style="display: block; margin: auto;"
                     width="50" height="50" alt="Positif"></i><br>
                        <p class="text-white">TOTAL SEMBUH</p>
                    <h2 class="text-white mb-0 number-font">{{ $sembuh }}</h2>
                    <p class="text-white">Orang</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-body bg-secondary">
                    <i><img src="{{asset('assets/assetfrontend/assets/img/cry.png')}}"  style="display: block; margin: auto;"
                    width="50" height="50" alt="Positif"></i><br>
                        <p class="text-white">TOTAL MENINGGAL</p>
                    <h2 class="text-white mb-0 number-font">{{ $meninggal }}</h2>
                    <p class="text-white">Orang</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-body bg-secondary">
                    <i><img src="{{asset('assets/assetfrontend/assets/img/indo.png')}}" style="display: block; margin: auto;"
                    width="50" height="50" alt="Positif"></i><br>
                        <p class="text-white">INDONESIA</p>
                        <h5 class="text-white">
                            {{number_format($positif)}}
                            &nbsp; POSITIF, &nbsp;
                            {{number_format($sembuh)}}
                            &nbsp; SEMBUH, &nbsp;
                            {{number_format($meninggal)}}
                            &nbsp; MENINGGAL
                        </h5>       
                    </div>
                </div> -->
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card bg-danger img-card box-primary-shadow" style="margin-top:20px">
						<div class="card-body">
							<div class="d-flex">
								<div class="text-white">
				    				<p class="text-white mb-0">TOTAL POSITIF</p>
                                    <p class="mb-0 number-font">{{ $positif }}</p>
						    		<p class="text-white mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto">
                                    <img src="{{asset('assets/assetfrontend/assets/img/sad.png')}}" alt="Positif" 
                                    width="50" height="50">
                                </div>
							</div>
                        </div>
					</div>
				</div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card bg-success img-card box-secondary-shadow" style="margin-top:20px">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white">
									<p class="text-white mb-0">TOTAL SEMBUH</p>
                                    <p class="text-white mb-0">{{ $sembuh }}</p>
									<p class="text-white mb-0">ORANG</p>
								</div>
                                <div class="ml-auto">
                                    <img src="{{asset('assets/assetfrontend/assets/img/happy.png')}}" alt="Positif" 
                                    width="50" height="50">
                                </div>
                            </div>
                        </div>
					</div>
				</div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card bg-dark img-card box-success-shadow" style="margin-top:20px">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white">
									<p class="text-white mb-0">TOTAL MENINGGAL</p>
                                    <p class="text-white mb-0">{{ $meninggal }}</p>
									<p class="text-white mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto">
                                    <img src="{{asset('assets/assetfrontend/assets/img/cry.png')}}" alt="Positif" 
                                    width="50" height="50">
                                </div>
                            </div>
                        </div>
					</div>
				</div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card bg-primary img-card box-success-shadow" style="margin-top:20px">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white">
									<p class="text-white mb-0">INDONESIA</p>
                                    <p class="text-white mb-0">
                                    {{number_format($positif)}}
                                        &nbsp; POSITIF, &nbsp;
                                    {{number_format($sembuh)}}
                                        &nbsp;SEMBUH, &nbsp;
                                    {{number_format($meninggal)}}
                                        &nbsp;MENINGGAL
                                    </p>
									<p class="text-white mb-0">ORANG</p>
                                </div>
                                
                                <div class="ml-auto">
                                    <img src="{{asset('assets/assetfrontend/assets/img/indo.png')}}" alt="Positif" 
                                    width="50" height="50">
                                </div>
                            </div>
                        </div>
					</div>
				</div> 
            </div>
            <br><br>
            <div class="row row-cards" id="dataindo">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Data Coronavirus di Indonesia Berdasarkan Provinsi
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Provinsi</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no=1;
                                    @endphp
                                    @foreach($provinsi as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->nama_provinsi}}</td>
                                            <td>{{number_format($data->positif)}}</td>
                                            <td>{{number_format($data->sembuh)}}</td>
                                            <td>{{number_format($data->meninggal)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row row-cards">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Data Coronavirus Global
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
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
  <!-- End Content -->

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p class="text-muted small mb-0">Copyright &copy; Kawal Corona 2020</p>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('assets/assetfrontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/assetfrontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('assets/assetfrontend/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('assets/assetfrontend/assets/js/stylish-portfolio.min.js')}}"></script>

</body>

</html>
