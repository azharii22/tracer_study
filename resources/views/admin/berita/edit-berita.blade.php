@extends('admin.layout.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Buat Berita Baru</h4>
                  <form class="forms-sample"  action="{{ route('update-berita',$berita->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Judul Berita</label>
                      <input type="text" class="form-control" name="judul_berita" id="exampleInputName1" value="{{ $berita->judul_berita }}">
                    </div>
                    <div class="form-group">
                      <label>Upload Gambar</label>
                      <!-- <input type="file" name="gambar_berita" class="file-upload-default"> -->
                      <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload" name="gambar_berita" >

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Isi Berita</label>
                      <textarea class="form-control" name="isi_berita" id="exampleTextarea1" rows="4"> {{ $berita->isi_berita }}</textarea>
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
