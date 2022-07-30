@extends('admin.layout.main')

@section('content')

@include('sweetalert::alert')

<div class="main-panel">
    <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12">
                  <h5 class="text-center">Tabel Jawaban Kuisioner Pengguna Alumni</h5><br>
                <div class="card">
                  <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                      <thead>
                        <tr>
                          <th class="ml-5">No</th>
                          <th>Nama</th>
                          <th>Nama Perusahaan</th>

                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($penggunaAlumni as $data )
                         <tr>
                          <td>{{++$i}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->perusahaan}}</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="/detail-jawaban-pengguna-alumni/{{$data->id}}" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                Detail
                                <i class="typcn typcn-info-large-outline"></i>
                              </a>
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
