@extends('admin.layout.main')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
                <h5 class="text-center">Tabel Berita</h5>
            <a href="{{ route('buat-berita') }}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
                  <i class="fas fa-plus mr-2"></i> Tambah Berita
                    </a>
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">No</th>
                        <th>Judul Berita</th>
                        <th>Gambar Berita</th>
                        <th>Isi Berita</th>
                        <th>Penulis</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($berita as $data)
                       <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{!! Str::limit( strip_tags( $data->judul_berita ), 20 ) !!}</td>
                        <td><img src="{{ url('img/berita/'.$data->gambar_berita) }}" width="150px" alt=""></td>
                        <td>{!! Str::limit( strip_tags( $data->isi_berita ), 20 ) !!}</td>
                        <td>{{ auth()->user()->name }}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/berita/edit/{{ $data->id }}" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>
                            </a>
                            <a href="/berita/delete{{ $data->id }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus {{ $data->judul_berita }} ?')"> Delete<i class="typcn typcn-delete-outline btn-icon-append"></i></a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@stop
