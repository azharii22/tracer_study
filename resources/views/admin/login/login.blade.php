<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Tracer Study</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{asset('admin')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="icon" href="{{asset('admin')}}/images/logo-polindra.png" type="image" sizes="16x16">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Username atau Password tidak terdaftar</strong> {{ session('error') }}.
                </div>
              @endif
              <div class="brand-logo">
                <img src="{{asset('admin')}}/images/logo-polindra.png" alt="logo" width="100">
              </div>
              {{-- <h4>Hello! let's get started</h4> --}}
              <h6 class="text-center">Admin Tracer Study</h6>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
              @csrf
                <div class="form-group">
                  <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>
                </div>
                {{-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div> --}}
                {{-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="typcn typcn-social-facebook mr-2"></i>Connect using facebook
                  </button>
                </div> --}}
                {{-- <div class="text-center mt-4 font-weight-light">
                  Belum punya akun admin? <a href="{{route('register')}}" class="text-primary">Daftar</a>
                </div> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('admin')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('admin')}}/js/off-canvas.js"></script>
  <script src="{{asset('admin')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('admin')}}/js/template.js"></script>
  <script src="{{asset('admin')}}/js/settings.js"></script>
  <script src="{{asset('admin')}}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
