@extends('admin.layout.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Metode Pembelajaran</h4>
                  <form class="forms-sample"  action="{{ route('update-pembelajaran-alumni', $pembelajaran->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Metode</label>
                      <input type="text" class="form-control" name="pertanyaan" id="exampleInputName1" value="{{ $pembelajaran->pertanyaan }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tidak Sama Sekali</label>
                      <input type="text" class="form-control" name="tidak_sama_sekali" id="exampleInputName1" value="{{ $pembelajaran->tidak_sama_sekali }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Kurang</label>
                      <input type="text" class="form-control" name="kurang" id="exampleInputName1" value="{{ $pembelajaran->kurang }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Cukup</label>
                      <input type="text" class="form-control" name="cukup" id="exampleInputName1" value="{{ $pembelajaran->cukup }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Baik</label>
                      <input type="text" class="form-control" name="besar" id="exampleInputName1" value="{{ $pembelajaran->besar }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Sangat Baik</label>
                      <input type="text" class="form-control" name="sangat_besar" id="exampleInputName1" value="{{ $pembelajaran->sangat_besar }}">
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
