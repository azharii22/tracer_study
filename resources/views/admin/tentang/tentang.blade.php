@extends('admin.layout.main')

@section('content')

@include('sweetalert::alert')

<div class="col-10 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          <a href="{{route('buat-tentang')}}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
              <i class="fas fa-plus mr-2"></i> Tambah
          </a>
        <h3 class="text-center">Halaman Tentang</h3><br>
        @foreach ($tentang as $data)
        <form class="forms-sample">
          <div class="form-group">
          <h5>{{$data->judul}}</h5>
          </div>
          <div class="form-group">
            <p style="text-align: justify">{{$data->isi}}</p>
            <p style="text-align: right">
            <a href="/admin/tentang/edit/{{$data->id}}" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                Edit
                <i class="typcn typcn-edit btn-icon-append"></i>
              </a>
              <a href="/hapus/konten{{$data->id}}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus {{$data->judul}} ?')"> Hapus <i class="typcn typcn-delete-outline btn-icon-append"></i></a>
            </p>
        </div>
        @endforeach
        </form>
      </div>
    </div>
  </div>

@stop
