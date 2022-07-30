@extends('user.layout.main')

@section('content')

@include('sweetalert::alert')
<div id="contact" class="contact ">
    <div class="container">
        <body>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-lg-5">
                            <div class="login-wrap p-4 p-md-5">
                                <h2 class="text-center mb-4">Profil Alumni</h2>
                                <form action="{{route('edit-profil', Auth::guard('alumnis')->user()->id)}}" method="POST">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInput1" class="form-label">NIM</label><br>
                                  <input type="text" class="form-control rounded-left" value="{{ $alumni->nim }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1" class="form-label">Nama</label><br>
                                    <input type="text" class="form-control rounded-left" name="nama" value="{{ $alumni->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1" class="form-label">Tahun Lulus</label><br>
                                    <input type="text" class="form-control rounded-left" name="th_lulus" value="{{ $alumni->th_lulus }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Program Studi</label>
                                    <select name="prodi" class="form-control">
                                    <option disabled> Program Studi </option>
                                    <option value="Teknik Informatika">TEKNIK INFORMATIKA</option>
                                    <option value="Rekayasa Perangkat Lunak">REKAYASA PERANGKAT LUNAK</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1" class="form-label">Nomor Telepon/HP</label><br>
                                    <input type="text" class="form-control rounded-left" name="no_hp" value="{{ $alumni->no_hp }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1" class="form-label">Alamat Email</label><br>
                                    <input type="text" class="form-control rounded-left" name="email" value="{{ $alumni->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Status</label>
                                    <select name="status" class="form-control">
                                    <option disabled> Pilih Status Anda </option>
                                    <option value="Bekerja">Bekerja</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Melanjutkan Studi">Melanjutkan Studi</option>
                                    <option value="Menanggur">Menganggur</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
	    </body>
    </div>
</div>
@stop
