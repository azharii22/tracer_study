@extends('admin.layout.main')

@section('content')

@include('sweetalert::alert')

<div class="main-panel">
  <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
                <h5 class="text-center">Tabel Berita</h5>
                <a href="{{route('generate-cluster')}}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
                  <i class="fas fa-plus mr-2"></i> Generate Clustering
                </a>
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">No</th>
                        <th>Nama</th>
                        <th>Cluster</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($cluster as $data )
                       <tr>
                        <td>{{++$i}}</td>
                        <td>{{$data->alumni->nama}}</td>
                        <td>{{$data->cluster}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@stop
