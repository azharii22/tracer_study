<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Tracer Study Polindra</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{asset('html')}}/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="{{asset('html')}}/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('html')}}/css/responsive.css">
   <link rel="stylesheet" href="{{asset('html')}}/css/owl.carousel.min.css">
   <!-- fevicon -->
   <link rel="icon" href="{{asset('html')}}/images/fevicon.png" type="image/gif" />
   <link rel="icon" href="{{asset('html')}}/images/logo-polindra.png" type="image" sizes="16x16">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('html')}}/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body>
   <div class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="{{asset('html')}}/images/loading.gif" alt="#" /></div>
   </div>
   </div>
   <!-- end loader -->

@include('user.layout.header')

@show
@yield('content')

@yield('chart')
@include('user.layout.footer')

<!-- Javascript files-->
   <script src="{{asset('html')}}/js/jquery.min.js"></script>
   <script src="{{asset('html')}}/js/popper.min.js"></script>
   <script src="{{asset('html')}}/js/bootstrap.bundle.min.js"></script>
   <script src="{{asset('html')}}/js/jquery-3.0.0.min.js"></script>
   <script src="{{asset('html')}}/js/owl.carousel.min.js"></script>
   <!-- sidebar -->
   <script src="{{asset('html')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="{{asset('html')}}/js/custom.js"></script>

</body>
</html>
