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
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('html')}}/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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