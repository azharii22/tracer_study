<!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="header_to d_none">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-7 ">
                     <ul class="social_icon1">
                        <li> F0llow Us
                        </li>
                        <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_bo">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-sm-7">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="{{('/') }}"> Beranda </a>
                              </li>
                              <ul>
                                 <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kuisioner</a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('kuisioner-alumni') }}">kuisioner Alumni</a>
                                    <a class="dropdown-item" href="{{ route('kuisioner-pengguna-alumni') }}">Kuisioner Pengguna Alumni</a>
                                 </div>
                                 </li>
                              </ul>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('berita_user') }}">Berita</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#"> contact us </a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <!-- Example single danger button -->
                  <div style="text-align: right" class="col-md-3 col-sm-5 d_none">
                  <ul class="sign">
                  @if (Auth::guard('alumnis')->check())
                  <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::guard('alumnis')->user()->nama}}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/profil/edit/{{Auth::guard('alumnis')->user()->id}}">Profil</a>
                    <a class="dropdown-item" href="{{ route('logout-alumni') }}" method="post">Logout</a>
                    </div>
                </div>
                @endif
            </ul>
            </div>
            </div>
        </div>
    </div>
</div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
