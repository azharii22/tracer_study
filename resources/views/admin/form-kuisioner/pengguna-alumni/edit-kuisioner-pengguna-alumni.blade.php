@extends('admin.layout.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Pertanyaan Kuisioner Pengguna Alumni</h4>
                  <form class="forms-sample"  action="{{ route('update-kuisioner-pengguna-alumni', $kuisionerPenggunaAlumni->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Pertanyaan</label>
                      <input type="text" class="form-control" name="pertanyaan" id="exampleInputName1" value="{{$kuisionerPenggunaAlumni->pertanyaan}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban A</label>
                      <input type="text" class="form-control" name="jawaban_a" id="exampleInputName1" value="{{$kuisionerPenggunaAlumni->jawaban_a}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban B</label>
                      <input type="text" class="form-control" name="jawaban_b" id="exampleInputName1" value="{{$kuisionerPenggunaAlumni->jawaban_b}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban C</label>
                      <input type="text" class="form-control" name="jawaban_c" id="exampleInputName1" value="{{$kuisionerPenggunaAlumni->jawaban_c}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban D</label>
                      <input type="text" class="form-control" name="jawaban_d" id="exampleInputName1" value="{{$kuisionerPenggunaAlumni->jawaban_d}}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@stop
