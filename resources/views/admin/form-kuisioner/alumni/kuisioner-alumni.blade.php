@extends('admin.layout.main')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
            <h5 class="text-center">Tabel Form Kuisioner Alumni</h5>
            <a href="{{ route ('buat-kuisioner-alumni')}}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
                  <i class="fas fa-plus mr-2"></i> Tambah Pertanyaan
                    </a>
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">No</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban A</th>
                        <th>Jawaban B</th>
                        <th>Jawaban C</th>
                        <th>Jawaban D</th>
                        <th>Jawaban E</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($kuisionerAlumni as $data )
                       <tr>
                        <td>{{++$i}}</td>
                        <td>{!! Str::limit( strip_tags( $data->pertanyaan ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->jawaban_a ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->jawaban_b ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->jawaban_c ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->jawaban_d ), 20 ) !!}</td>
                        <td>{!! Str::limit( strip_tags( $data->jawaban_e ), 20 ) !!}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/kuisioner-alumni/edit/{{ $data->id }}" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>
                            </a>
                            <a href="/kuisioner-alumni/delete{{ $data->id }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus pertanyaan nomor {{$i}} ?')"> Delete<i class="typcn typcn-delete-outline btn-icon-append"></i></a>
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
