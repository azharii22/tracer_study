<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('template-login')}}/images/polindra.png" type="image" sizes="16x16">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('template-login')}}/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
                  @if (session('error'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Username atau Password tidak terdaftar</strong> {{ session('error') }}.

                  </div>
                @endif
		      	<h3 class="text-center mb-4">Login</h3>
						<form action="{{ route('post-login-alumni') }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="nim" placeholder="NIM" autofocus required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

  <script src="{{asset('template-login')}}/js/jquery.min.js"></script>
  <script src="{{asset('template-login')}}/js/popper.js"></script>
  <script src="{{asset('template-login')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('template-login')}}/js/main.js"></script>

	</body>
</html>

