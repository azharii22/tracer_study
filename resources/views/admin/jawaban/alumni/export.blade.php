@extends('admin.layout.main')

@section('content')

<div class="table-responsive pt-3">
    <table class="table table-striped project-orders-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Tahun Lulus</th>
            <th>Program Studi</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Status</th>
            <th>Pertanyaan Kuisioner</th>
            <th>Jawaban</th>
            {{-- <th>Pertanyaan Evaluasi</th>
            <th>Jawaban</th> --}}
        </tr>
    </thead>
        <?php $no = 1;?>
    @foreach ($jawaban as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->nim}}</td>
            <td>{{$data->th_lulus}}</td>
            <td>{{$data->prodi}}</td>
            <td>{{$data->no_hp}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->KuisionerAlumni->pertanyaan}}</td>
            <td>{{$data->jawaban}}</td>
        </tr>
    @endforeach
</table>
</div>
@endsection
