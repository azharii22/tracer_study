@extends('admin.layout.main')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class = "row">

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                      <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Alumni</p>
                        <h1 class="mb-0">{{$totalAlumni}}</h1>
                      </div>
                      <i class="typcn typcn-mortar-board icon-xl text-secondary"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                      <div>
                        <p class="mb-2 text-md-center text-lg-left">Partisipan Alumni</p>
                        <h1 class="mb-0">{{$partisipanAlumni}}</h1>
                      </div>
                      <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                      <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Pengguna Alumni</p>
                        <h1 class="mb-0">{{$partisipanPA}}</h1>
                      </div>
                      <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                    </div>
                  </div>
                </div>
              </div>

        </div> <br>
          <div class="row">
            <div class="col-md-6 col-xl-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body border-bottom">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Status Alumni</h6>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="chart-status-alumni" class="mt-1"></canvas>
                </div>
            </div>
          </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body border-bottom">
                  <div class="d-flex justify-content-between align-items-center flex-wrap" >
                    <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Jumlah Alumni</h6>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="chart-jumlah-alumni" height="320"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
        <!-- content-wrapper ends -->
@endsection
@section('chart')
<script>
      // Chart Jumlah Alumni
      var ctx = document.getElementById('chart-jumlah-alumni').getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["2022"],
          datasets: [{
              label: <?php echo json_encode($prodiTI); ?>,
              data: <?php echo json_encode($dataTI); ?>,
              backgroundColor: '#a43cda'
            },
            {
              label: <?php echo json_encode($prodiRPL); ?>,
              data: <?php echo json_encode($dataRPL); ?>,
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
                max: 100,
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
</script>
<script>
    // Chart Status Alumni
      var ctx2 = document.getElementById('chart-status-alumni').getContext('2d');
      const myChart2 = new Chart(ctx2, {
        type: 'pie',
        data: {
          datasets: [{
            data: <?php echo json_encode($dataPie); ?>,
            backgroundColor: ['#f39915', '#21bf06', '#a43cda', '#6fa8dc'],
            borderColor: [],
          }],

          // These labels appear in the legend and in the tooltips when hovering different arcs
          labels: [
            'Bekerja',
            'Wirausaha',
            'Melanjutkan Studi',
            'Belum Memungkinkan Bekerja'
          ]
        }

      });
    // sales-chart-c end
</script>
@endsection
