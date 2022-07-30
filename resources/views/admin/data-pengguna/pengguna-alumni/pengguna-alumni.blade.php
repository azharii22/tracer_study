@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12">
                  <h5 class="text-center">Tabel Data Pengguna Alumni</h5><br>
                <div class="card">
                  <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                      <thead>
                        <tr>
                          <th class="ml-5">No</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Nama Perusahaan</th>
                          <th>Alamat</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($penggunaAlumni as $data)
                         <tr>
                          <td>{{++$i}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->jabatan}}</td>
                          <td>{{$data->perusahaan}}</td>
                          <td>{{$data->alamat}}</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="#" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                Detail
                                <i class="typcn typcn-info-large-outline"></i>
                              </a>
                              <a href="data-pengguna-alumni/delete{{ $data->id }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus data {{$data->nama}}?')"> Delete<i class="typcn typcn-delete-outline btn-icon-append"></i></a>
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
