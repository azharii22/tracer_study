@extends('admin.layout.main')

@section('content')

@include('sweetalert::alert')

<div class="main-panel">
    <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12">
                  <h5 class="text-center">Tabel Jawaban Kuisioner Alumni</h5><br>
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
                              <a href="/admin/detail-jawaban-alumni/{{$data->id}}" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
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
        </div>
    </div>
@stop
