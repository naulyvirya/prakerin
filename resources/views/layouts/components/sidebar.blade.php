<div class="sidebar" data-color="dark">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          COV
        </a>
        <a href="#" class="simple-text logo-normal">
          Kawal Korona
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="{{ url('/home') }}">
              <i style="color : black" class="now-ui-icons design_app"></i>
              <p style="color : black">Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/provinsi') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Provinsi</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/kota') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Kota</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/kecamatan') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Kecamatan</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/kelurahan') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Kelurahan</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/rw') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Rw</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/kasus') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Kasus</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>