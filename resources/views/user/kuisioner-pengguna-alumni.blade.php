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
                  <form id="post_form" class="contact_form">
                     <div class="row">
                        @foreach ($kuisionerPenggunaAlumni as $data )
                        <div class="col-md-12"><br>
                        <label for="formGroupExampleInput">{{++$i}}.</label>
                        <label for="formGroupExampleInput">{{$data->pertanyaan}}</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban_a" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">{{$data->jawaban_a}}</label>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban_b" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">{{$data->jawaban_b}}</label>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban_c" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">{{$data->jawaban_c}}</label>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban_d" id="exampleRadios4" value="option4">
                        <label class="form-check-label" for="exampleRadios4">{{$data->jawaban_d}}</label>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban_e" id="exampleRadios5" value="option5">
                        <label class="form-check-label" for="exampleRadios5">{{$data->jawaban_e}}</label>
                        </div>
                        </div>
                        @endforeach
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                    </div>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      <!-- end contact  section -->
@stop
