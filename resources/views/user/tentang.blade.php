@extends('user.layout.main')

@section('content')

   <!-- portfolio -->
   <div class="portfolio">
    <div class="container">
       <div class="row">
          <div class="col-md-12 ">
             <div class="titlepage">
                <h2>Tentang Tracer Study</h2>
                @foreach ($tentang as $data)
                <br><span>{{$data->judul}}</span>
                <p style="text-align: justify">{{$data->isi}}</p>
                @endforeach
             </div>
          </div>
       </div>
    </div>
    <div id="myCarousel" class="carousel slide portfolio_Carousel " data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
       </ol>
 </div>
 <!-- end portfolio section -->

@stop
