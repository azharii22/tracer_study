@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Identitas Mahasiswa</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <td>{{$alumni->nama}}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{$alumni->nim}}</td>
            </tr>
            <tr>
                <th>Tahun Lulus</th>
                <td>{{$alumni->th_lulus}}</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>{{$alumni->prodi}}</td>
            </tr>
            <tr>
                <th>Nomor Telepon/HP</th>
                <td>{{$alumni->no_hp}}</td>
            </tr>
            <tr>
                <th>Alamat Email</th>
                <td>{{$alumni->email}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{$alumni->status->status}}</td>
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
        <h4 class="card-title">Penilaian Kompetensi / Metode Pembelajaran</h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
            <tr>
                <td>1 = Tidak Sama Sekali</td>
            </tr>
            <tr>
                <td>2 = Kurang</td>
            </tr>
            <tr>
                <td>3 = Cukup</td>
            </tr>
            <tr>
                <td>4 = Baik</td>
            </tr>
            <tr>
                <td>5 = Sangat Baik</td>
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
                <h4 class="card-title">Jawaban Kuisioner Alumni</h4>
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Kuisioner</th>
                        <th>Jawaban</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($jawaban as $data )
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->kuisionerAlumni->pertanyaan}}</td>
                            <td>{{$data->jawaban}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kompetensi</th>
                        <th>Jawaban</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($evaluasiAlumni as $data )
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->evaluasiAlumni->pertanyaan}}</td>
                            <td>{{$data->jawaban}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Metode Pembelajaran</th>
                            <th>Jawaban</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($pembelajaran as $data )
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->pembelajaran->pertanyaan}}</td>
                                <td>{{$data->jawaban}}</td>
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
</div>
@stop

{{-- @foreach ($penggunaAlumni as $penggunaAlumni )
                         <tr>
                          <td>{{++$i}}</td>
                          <td>{{$penggunaAlumni->penggunaAlumni->nama}}</td>
                          <td>{{$penggunaAlumni->penggunaAlumni->perusahaan}}</td>
                          <td>{{$penggunaAlumni->id_pertanyaan}}</td>
                          <td>{{$penggunaAlumni->jawaban}}</td> --}}
