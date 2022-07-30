@extends('user.layout.main')

@section('content')
      <!-- contact  section -->
      <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Form Kuisioner Pengguna Alumni</h2><br>
                     <h2>Politeknik Negeri Indramayu</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                <form action="{{ route('post-jawaban-pengguna-alumni') }}" method="POST">
                    @csrf
                     <div class="row">
                        @foreach ($kuisionerPenggunaAlumni as $data )
                        <form>
                        <div class="col-md-12">
                        <div class="mt-4"><h4>{{++$i}}. {{$data->pertanyaan}}</h4></div>
                        <input type="radio" id="a" name="jawaban" value="jawabanA">
                        <label for="a">{{$data->jawaban_a}}</label><br>
                        <input type="radio" id="b" name="jawaban" value="jawabanB">
                        <label for="b">{{$data->jawaban_b}}</label><br>
                        <input type="radio" id="c" name="jawaban" value="jawabanC">
                        <label for="c">{{$data->jawaban_c}}</label><br>
                        <input type="radio" id="d" name="jawaban" value="jawabanD">
                        <label for="d">{{$data->jawaban_d}}</label><br>
                        <input type="radio" id="e" name="jawaban" value="jawabanE">
                        <label for="e">{{$data->jawaban_e}}</label><br>
                        </div>
                        </form>
                        @endforeach
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
