@extends('admin.layout.main')

@section('content')

@include('sweetalert::alert')

<div class="main-panel">
  <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
            <h5 class="text-center">Tabel Metode Pembelajaran</h5>
            <a href="{{route('buat-pembelajaran-alumni')}}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
                  <i class="fas fa-plus mr-2"></i> Tambah Metode
                    </a>
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">No</th>
                        <th>Metode</th>
                        <th>Sangat Baik</th>
                        <th>Baik</th>
                        <th>Cukup</th>
                        <th>Kurang</th>
                        <th>Tidak Sama Sekali</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($pembelajaran as $data )
                       <tr>
                        <td>{{++$i}}</td>
                        <td>{!! Str::limit( strip_tags( $data->pertanyaan ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->sangat_besar ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->besar ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->cukup ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->kurang ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->tidak_sama_sekali ), 20 ) !!}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/admin/pembelajaran-alumni/edit/{{$data->id}}" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>
                            </a>
                            <a href="/admin/pembelajaran-alumni/delete/{{$data->id}}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus pertanyaan nomor {{$i}} ?')"> Delete<i class="typcn typcn-delete-outline btn-icon-append"></i></a>
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
