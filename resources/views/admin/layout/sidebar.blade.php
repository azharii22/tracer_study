      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('berita_admin') }}">
              <i class="typcn typcn-news menu-icon"></i>
              <span class="menu-title">Berita</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('/admin/tentang')}}">
              <i class="typcn typcn-globe-outline menu-icon"></i>
              <span class="menu-title">Tentang</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Form Kuisioner</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin-kuisioner-alumni') }}">Alumni</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin-kuisioner-pengguna-alumni') }}">Pengguna Alumni</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-messages menu-icon"></i>
              <span class="menu-title">Jawaban Kuisioner</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('jawaban-alumni') }}">Alumni</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('jawaban-pengguna-alumni') }}">Pengguna Alumni</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">Data Pengguna</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href={{ url('/data-alumni')}}> Alumni </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin-data-pengguna-alumni') }}"> Pengguna Alumni </a></li>
              </ul>
            </div>
          </li>

        </ul>
      </nav>
      <!-- partial -->
