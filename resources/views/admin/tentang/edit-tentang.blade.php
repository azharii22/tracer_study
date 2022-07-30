@extends('admin.layout.main')

@section('content')

<div class="col-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Konten Tentang</h4>
        <form class="forms-sample"  action="{{ route('update-tentang', $tentang->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Judul</label>
            <input type="text" class="form-control" name="judul" id="exampleInputName1" value="{{ $tentang->judul }}">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Isi</label>
            <textarea class="form-control" name="isi" id="exampleTextarea1" rows="10"> {{ $tentang->isi }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@stop
