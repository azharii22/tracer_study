@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Identitas Perusahaan</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
            <tr>
                <th>Nama</th>
                <td>{{$penggunaAlumni->nama}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$penggunaAlumni->email}}</td>
            </tr>
            <tr>
                <th>Perusahaan</th>
                <td>{{$penggunaAlumni->perusahaan}}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{$penggunaAlumni->jabatan}}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{$penggunaAlumni->alamat}}</td>
            </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Identitas Mahasiswa</h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
            <tr>
                <th>NIM</th>
                <td>{{$penggunaAlumni->nim}}</td>
            </tr>
            <tr>
                <th>Nama Mahasiswa</th>
                <td>{{$penggunaAlumni->nama_mhs}}</td>
            </tr>
            <tr>
                <th>Tahun Lulus</th>
                <td>{{$penggunaAlumni->th_lulus}}</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td>{{$penggunaAlumni->prodi}}</td>
            </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Jawaban Kuisioner Pengguna Alumni</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($penggunaAlumni->jawaban as $data )
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$data->kuisionerPenggunaAlumni->pertanyaan}}</td>
                    <td>{{$data->jawaban}}</td>
                </tr>
                @endforeach
                <tr>
                    <th>Saran</th>
                    <td>{{$penggunaAlumni->saran}}</td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@stop

{{-- @foreach ($penggunaAlumni as $penggunaAlumni )
                         <tr>
                          <td>{{++$i}}</td>
                          <td>{{$penggunaAlumni->penggunaAlumni->nama}}</td>
                          <td>{{$penggunaAlumni->penggunaAlumni->perusahaan}}</td>
                          <td>{{$penggunaAlumni->id_pertanyaan}}</td>
                          <td>{{$penggunaAlumni->jawaban}}</td> --}}
