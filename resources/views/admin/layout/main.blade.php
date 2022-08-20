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
    <!-- base:js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('admin')}}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('admin')}}/vendors/chart.js/Chart.min.js"></script>
    @yield('chart')
    {{-- <script>
        var SalesChartDCanvas = $("#sales-chart-d").get(0).getContext("2d");
    //   let tahun = '{{$th}}';
    //   console.log(tahun);
      var SalesChartD = new Chart(SalesChartDCanvas, {
        type: 'bar',
        data: {
          labels: tahun,
          datasets: [{
              label: 'TI',
              data: [52, 40, 33, 45, 22, 50],
              backgroundColor: '#a43cda'
            },
            {
              label: 'RPL',
              data: [22, 45, 23, 50, 15, 40],
              backgroundColor: '#f39915'
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0
            }
          },
          scales: {
            yAxes: [{
              display: true,
              gridLines: {
                display: false,
                drawBorder: false
              },
              ticks: {
                display: true,
                min: 0,
                max: 60,
                stepSize: 10,
                fontSize: 10,
                fontColor: "#001737",
              }
            }],
            xAxes: [{
              stacked: false,
              ticks: {
                beginAtZero: true,
                fontColor: "#001737",
                fontSize: 10
              },
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
                display: false
              },
              barPercentage: .3
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        },
      });
    </script> --}}
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
</body>

  </html>
