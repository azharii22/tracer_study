@extends('user.layout.main')

@section('content')
{{-- <div class="portfolio">
<div class="container">
<div class="row">
    <div class="col-md-12 col-xl-12 grid-margin stretch-card">
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
    <div class="col-md-12 col-xl-12 grid-margin stretch-card">
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
</div> --}}
<!-- banner -->
<section class="banner_main" style="background-image: url('{{asset('html')}}/images/ts1.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-lg-7">
         </div>
      </div>
   </div>
</section>
<!-- end banner -->
<!-- portfolio -->
<div class="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <div class="titlepage">
               <h2><strong class="blue">TRACER STUDY</strong><br> POLITEKNIK NEGERI INDRAMAYU </h2>
               <br><br><span>Mengenal Tracer Study</span>
               <p style="text-align: justify">Tracer Study merupakan salah satu metode yang digunakan oleh beberapa perguruan tinggi,
                  khususnya di Indonesia untuk memperoleh umpan balik dari alumni.
                  Umpan balik yang diperoleh dari alumni ini dibutuhkan oleh perguruan tinggi dalam usahanya
                  untuk perbaikan serta pengembangan kualitas dan sistem pendidikan. Tak hanya itu, umpan balik
                  inipun dapat bermanfaat untuk memetakan dunia usaha dan industri agar jeda diantara kompetensi
                  yang diperoleh alumni saat kuliah dengan tuntutan dunia kerja dapat diperkecil.</p>
               <br><br><span>Tujuan Tracer Study</span>
               <p style="text-align: justify">Tracer Study bertujuan untuk mengetahui hasil pendidikan dalam bentuk transisi dari dunia pendidikan tinggi
                  ke dunia usaha dan industri, keluaran pendidikan berupa penilaian diri terhadap penguasaan dan pemerolehan kompetensi,
                  proses pendidikan berupa evaluasi proses pembelajaran dan kontribusi pendidikan tinggi terhadap pemerolehan kompetensi
                  serta input pendidikan berupa penggalian lebih lanjut terhadap informasi lulusan.</p>
               <br><br><span>Manfaat Tracer Study</span>
               <p style="text-align: justify">Manfaat Tracer Study tidak terbatas pada perguruan tinggi saja, tetapi lebih jauh lagi dapat memberikan informasi
                  penting mengenai hubungan antara dunia pendidikan tinggi dengan dunia usaha dan industri. Tracer Study dapat menyajikan
                  informasi mendalam dan rinci mengenai kecocokan kerja baik horisontal (antar berbagai bidang ilmu) maupun vertikal
                  (antar berbagai level/strata pendidikan). Dengan demikian, Tracer Study dapat ikut membantu mengatasi permasalahan
                  kesenjangan kesempatan kerja dan upaya perbaikannya. Bagi perguruan tinggi, informasi mengenai kompetensi yang relevan
                  bagi dunia usaha dan industri dapat membantu upaya perbaikan kurikulum dan sistem pembelajaran. Di sisi lain, dunia usaha
                  dan industri dapat melihat ke dalam perguruan tinggi melalui Tracer Study, dan dengan demikian dapat menyiapkan diri dengan
                  menyediakan pelatihan-pelatihan yang lebih relevan bagi sarjana pencari kerja baru.</p>
            </div>
         </div>
      </div>
   </div>
</div>
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
