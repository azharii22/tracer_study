@extends('admin.layout.main')

@section('content')

<div class="col-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Buat Halaman Tentang</h4>
        <form class="forms-sample"  action="{{ route('post-tentang') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Judul</label>
            <input type="text" class="form-control" name="judul" id="exampleInputName1" placeholder="Judul">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Isi</label>
            <textarea class="form-control" name="isi" id="exampleTextarea1" rows="10" placeholder="Isi"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@stop
