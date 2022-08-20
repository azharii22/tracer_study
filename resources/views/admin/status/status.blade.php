@extends('admin.layout.main')

@section('content')

@include('sweetalert::alert')

<div class="main-panel">
  <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
                <h5 class="text-center">Tabel Status</h5>
                <a href="{{route('buat-status')}}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
                  <i class="fas fa-plus mr-2"></i> Tambah Status
                </a>
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">No</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($status as $data)
                       <tr>
                        <td>{{ ++$i }}.</td>
                        <td>{{$data->status}}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/admin/edit/status/{{$data->id}}" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>
                            </a>
                            <a href="/admin/status/delete/{{$data->id}}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus status {{$data->status}}?')"> Delete<i class="typcn typcn-delete-outline btn-icon-append"></i></a>
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
