@extends('admin.layout.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pertanyaan Baru - Kuisioner Alumni</h4>
                  <form class="forms-sample"  action="{{ route('post-kuisioner-alumni') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="form-group">
                      <label for="exampleInputName1">Jawaban E</label>
                      <input type="text" class="form-control" name="jawaban_e" id="exampleInputName1" placeholder="Jawaban E">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Jawaban F</label>
                        <input type="text" class="form-control" name="jawaban_f" id="exampleInputName1" placeholder="Jawaban F">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Jawaban G</label>
                        <input type="text" class="form-control" name="jawaban_g" id="exampleInputName1" placeholder="Jawaban G">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Jawaban H</label>
                        <input type="text" class="form-control" name="jawaban_h" id="exampleInputName1" placeholder="Jawaban H">
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
