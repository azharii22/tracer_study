@extends('user.layout.main')

@section('content')
<!-- about section -->
<div class="card">
  <div class="card-body">
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($berita as $data)
  <div class="col">
    <div class="card h-100">
    <div class="text-center">
    <img src="{{ url('img/berita/'.$data->gambar_berita) }}" width="50%" class="rounded" alt="">
    </div>
      <div class="card-body">
        <h2 class="card-title">{{$data->judul_berita}}</h2>
        <td>{!! Str::limit( strip_tags( $data->isi_berita ), 20 ) !!}</td>
      </div>
      <div class="card-footer">
        <h5 class="text">Ditulis oleh {{ $data->user->name }} {{ $data->created_at->diffForHumans() }}</h5>
            <div class="text-right">
            <a href="{{ route('baca-berita',$data->slug) }}" class="btn btn-primary">Selengkapnya</a>
            </div>
      </div>
    </div>
  </div>
@endforeach
</div>
</div>
</div>
<!-- about section -->

@stop
