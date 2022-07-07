@extends('admin.layout.main')

@section('content')

<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Alumni</h4>
        <div class="form-group">
          <label>NIM</label>
          <input type="text" class="form-control form-control-lg" placeholder="NIM" aria-label="Username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" class="form-control" placeholder="Password" aria-label="Username">
        </div>
        <div class="form-group">
          <label>Small input</label>
          <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </div>
    </div>
  </div>

@stop
