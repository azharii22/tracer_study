@extends('admin.layout.main')

@section('content')

@include('sweetalert::alert')

<div class="main-panel">
    <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12">
                  <h5 class="text-center">Tabel Data Alumni</h5>
                    <a href="{{ route ('tambah-alumni') }}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
                    <i class="fas fa-plus mr-2"></i> Tambah Data Alumni
                    </a>
                <div class="card">
                  <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                      <thead>
                        <tr>
                          <th class="ml-5">No</th>
                          <th>Nama</th>
                          <th>NIM</th>
                          <th>Program Studi</th>
                          <th>Tahun Lulus</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($alumni as $data )
                         <tr>
                          <td>{{++$i}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->nim}}</td>
                          <td>{{$data->prodi}}</td>
                          <td>{{$data->th_lulus}}</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="#" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                Edit
                                <i class="typcn typcn-edit btn-icon-append"></i>
                              </a>
                              <a href="#" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus ?')"> Delete<i class="typcn typcn-delete-outline btn-icon-append"></i></a>
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
