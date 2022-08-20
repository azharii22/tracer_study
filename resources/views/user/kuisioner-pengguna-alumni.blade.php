@extends('user.layout.main')

@section('content')

@include('sweetalert::alert')
      <!-- contact  section -->
      <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Form Identitas Pengguna Alumni</h2><br>
                     <h2>Politeknik Negeri Indramayu</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                <form class="forms-sample" action="{{ route('post-jawaban-pengguna-alumni') }}" method="POST">
                    @csrf
                    <div class="form-group">
                    <label for="formGroupExampleInput">Nama</label>
                    <input type="text" class="form-control" name="nama" id="formGroupExampleInput" placeholder="Nama Pengisi" required>
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="perusahaan" id="formGroupExampleInput2" placeholder="Perusahaan">
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" id="formGroupExampleInput2" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="formGroupExampleInput2" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">NIM Lulusan Polindra yang dinilai</label>
                    <input type="number" class="form-control" name="nim" id="formGroupExampleInput2" placeholder="Nim">
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Nama Lulusan</label>
                    <input type="text" class="form-control" name="nama_mhs" id="formGroupExampleInput2" placeholder="Nama Lulusan">
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Tahun Lulus Mahasiswa</label>
                    <input type="number" class="form-control" name="th_lulus" id="formGroupExampleInput2" placeholder="Tahun Lulus">
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Program Studi Lulusan</label>
                    <select name="prodi" class="form-control">
                    <option selected disabled> Program Studi Lulusan </option>
                    <option value="Teknik Informatika">TEKNIK INFORMATIKA</option>
                    <option value="Rekayasa Perangkat Lunak">REKAYASA PERANGKAT LUNAK</option>
                    </select>
                    </div>
                    <div class="row">
                        @foreach ($kuisionerPenggunaAlumni as $key=>$data)
                        <div class="col-md-12">
                        <div class="mt-4"><h4>{{++$i}}. {{$data->pertanyaan}}</h4></div>
                        <input type="hidden" name="id_pertanyaan[]" value="{{$data->id}}">
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_a}}">
                        <label for="a">{{$data->jawaban_a}}</label><br>
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_b}}">
                        <label for="b">{{$data->jawaban_b}}</label><br>
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_c}}">
                        <label for="c">{{$data->jawaban_c}}</label><br>
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_d}}">
                        <label for="d">{{$data->jawaban_d}}</label><br>
                        </div>
                        @endforeach
                        <div class="form-group">
                            <br><label for="exampleFormControlTextarea1">Saran</label>
                            <textarea class="form-control" name="saran" id="exampleFormControlTextarea1" rows="5" cols="100"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
                  </div>
               </div>
            </div>
         </div>
      <!-- end contact  section -->
@stop
