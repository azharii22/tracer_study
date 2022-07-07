@extends('user.layout.main')

@section('content')
      <!-- contact  section -->
      <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Form Kuisioner Alumni Politeknik Negeri Indramayu</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <form id="post_form" class="contact_form">
                        @foreach ($kuisionerAlumni as $data )
                        <form>
                        <div class="col-md-12">
                        <div class="mt-4"><h4>{{++$i}}. {{$data->pertanyaan}}</h4></div>

                        <input type="radio" id="a" name="jawaban_a" value="jawabanA">
                        <label for="a">{{$data->jawaban_a}}</label><br>
                        <input type="radio" id="b" name="jawaban_b" value="jawabanB">
                        <label for="b">{{$data->jawaban_b}}</label><br>
                        <input type="radio" id="c" name="jawaban_c" value="jawabanC">
                        <label for="c">{{$data->jawaban_c}}</label><br>
                        <input type="radio" id="d" name="jawaban_d" value="jawabanD">
                        <label for="d">{{$data->jawaban_d}}</label><br>
                        <input type="radio" id="e" name="jawaban_e" value="jawabanE">
                        <label for="e">{{$data->jawaban_e}}</label><br>
                        </div>
                        </form>
                        @endforeach
                    </form>
                    <div class="col-md-12">
                        <button class="send_btn">Send</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- end contact  section -->
@stop
