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

  <!-- <nav class="navbar navbar-expand-md navbar-light  bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" >Tracking Covid</a>
        <ul class="topnav-right">
            <a href=""></a>
        </ul>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Admin</a>

                    @endauth
                </div>
            @endif
    </div>
  </nav> -->

  <nav class="navbar navbar-expand-md navbar-light bg-grey shadow-sm">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto navbar-brand">
            <li class="nav-item active">
                <a class="nav-link" href="#">Tracking Covid</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
        </ul>
            
        <a class="nav-link" href="#">Hotline</a>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Admin</a>

                    @endauth
                </div>
            @endif
            <a class="nav-link" href="#">Contact</a>
    </div>
</nav>

  <!-- Header -->
  <div class="container-fluid">
      <div class="jumbotron">
            <div class="container">
                <h1 class="display-4 text-center">KAWAL CORONA</h1>
                <p class="lead m-0 text-center">Coronavirus Global & Indonesia Live Data</p>
                <br>
            </div>
            <div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card bg-danger img-card box-primary-shadow">
						<div class="card-body">
							<div class="d-flex">
								<div class="text-white">
				    				<p class="text-white mb-0">TOTAL POSITIF</p>
                                    <p class="text-white mb-0">-</p>
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
						<div class="card bg-success img-card box-secondary-shadow">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white">
									<p class="text-white mb-0">TOTAL SEMBUH</p>
                                    <p class="text-white mb-0">-</p>
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
						<div class="card bg-dark img-card box-success-shadow">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white">
									<p class="text-white mb-0">TOTAL MENINGGAL</p>
                                    <p class="text-white mb-0">-</p>
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
						<div class="card bg-info img-card box-success-shadow">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white">
									<p class="text-white mb-0">INDONESIA</p>
                                    <p class="text-white mb-0">- Positif, - Sembuh, - Meninggal</p>
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
            <div class="row row-cards">
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
                                            <td>{{$data->positif}}</td>
                                            <td>{{$data->sembuh}}</td>
                                            <td>{{$data->meninggal}}</td>
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
                                    @php $no=1;
                                    @endphp
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
  </div>

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
