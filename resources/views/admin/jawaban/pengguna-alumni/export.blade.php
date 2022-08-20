<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Perusahaan</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Tahun Lulus</th>
            <th>Prodi</th>
            <th>Saran</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
        </tr>
        <?php $no = 1;?>
    @foreach ($jawaban as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$data->PenggunaAlumni->nama}}</td>
            <td>{{$data->PenggunaAlumni->email}}</td>
            <td>{{$data->PenggunaAlumni->perusahaan}}</td>
            <td>{{$data->PenggunaAlumni->jabatan}}</td>
            <td>{{$data->PenggunaAlumni->alamat}}</td>
            <td>{{$data->PenggunaAlumni->nim}}</td>
            <td>{{$data->PenggunaAlumni->nama_mhs}}</td>
            <td>{{$data->PenggunaAlumni->th_lulus}}</td>
            <td>{{$data->PenggunaAlumni->prodi}}</td>
            <td>{{$data->PenggunaAlumni->saran}}</td>
            <td>{{$data->KuisionerPenggunaAlumni->pertanyaan}}</td>
            <td>{{$data->jawaban}}</td>
        </tr>
    @endforeach
    </thead>
</table>
