@extends('admin.layout.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Buat Berita Baru</h4>
                  <form class="forms-sample"  action="{{ route('post_berita') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Judul Berita</label>
                      <input type="text" class="form-control" name="judul_berita" id="exampleInputName1" placeholder="Judul Berita">
                    </div>
                    <div class="form-group">
                      <label>Upload Gambar</label>
                      <!-- <input type="file" name="gambar_berita" class="file-upload-default"> -->
                      <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload" name="gambar_berita" placeholder="Upload Image">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="editor">Isi Berita</label>
                      <textarea id="editor" class="form-control" name="isi_berita" rows="30" cols="10"></textarea>
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
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@stop