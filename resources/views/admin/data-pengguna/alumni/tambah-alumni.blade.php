@extends('admin.layout.main')

@section('content')

<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Alumni</h4>
        <form method="POST" action="{{ route('post-tambah-alumni') }}">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control form-control-lg" name="nama" placeholder="Nama" aria-label="Username">
          </div>
        <div class="form-group">
          <label>NIM</label>
          <input type="number" class="form-control form-control-lg" name="nim" placeholder="NIM" aria-label="Username" maxlength="7">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Username">
        </div>
        <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Password" aria-label="Username">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@stop
