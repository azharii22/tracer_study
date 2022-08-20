@extends('admin.layout.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Status</h4>
                  <form class="forms-sample"  action="{{route('update-status', $status->id)}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Status Sebelumnya</label>
                        <input type="text" class="form-control" name="status" id="exampleInputName1" value="{{ $status->status }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Status Baru</label>
                        <select name="status" class="form-control">
                        <option selected> Pilih Status </option>
                        <option value="Bekerja">Bekerja</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Melanjutkan Studi">Melanjutkan Studi</option>
                        <option value="Menganggur">Menganggur</option>
                        </select>
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
