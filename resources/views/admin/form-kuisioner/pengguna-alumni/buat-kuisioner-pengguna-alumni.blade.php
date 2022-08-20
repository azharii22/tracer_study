@extends('admin.layout.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pertanyaan Baru - Kuisioner Pengguna Alumni</h4>
                  <form class="forms-sample"  action="{{ route('post-kuisioner-pengguna-alumni') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Pertanyaan</label>
                      <input type="text" class="form-control" name="pertanyaan" id="exampleInputName1" placeholder="Pertanyaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban A</label>
                      <input type="text" class="form-control" name="jawaban_a" id="exampleInputName1" placeholder="Jawaban A">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban B</label>
                      <input type="text" class="form-control" name="jawaban_b" id="exampleInputName1" placeholder="Jawaban B">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban C</label>
                      <input type="text" class="form-control" name="jawaban_c" id="exampleInputName1" placeholder="Jawaban C">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban D</label>
                      <input type="text" class="form-control" name="jawaban_d" id="exampleInputName1" placeholder="Jawaban D">
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
