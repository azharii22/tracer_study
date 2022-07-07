@extends('user.layout.main')

@section('content')
<!-- about section -->
<div class="card">
  <div class="card-body">
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($berita as $data)
  <div class="col">
    <div class="card h-100">
    <img src="{{ url('img/berita/'.$data->gambar_berita) }}" width="250px" alt="">
      <div class="card-body">
        <h5 class="card-title">{{$data->judul_berita}}</h5>
        <td>{!! Str::limit( strip_tags( $data->isi_berita ), 20 ) !!}</td>
      </div>
      <div class="card-footer">
        <small class="text">Terakhir Update 2 menit yang lalu</small>
        <a href="{{ route('baca-berita',$data->slug) }}" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
@endforeach
</div>
</div>
</div>
<!-- about section -->

@stop