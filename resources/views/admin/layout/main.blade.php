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
  <link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
</head>
<body>
@include('admin.layout.header')

@include('admin.layout.sidebar')

@show
@yield('content')
</div>
@include('admin.layout.footer')
</body>

  <!-- base:js -->
  <script src="{{asset('admin')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('admin')}}/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin')}}/js/off-canvas.js"></script>
  <script src="{{asset('admin')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('admin')}}/js/template.js"></script>
  <script src="{{asset('admin')}}/js/settings.js"></script>
  <script src="{{asset('admin')}}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin')}}/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  </html>
