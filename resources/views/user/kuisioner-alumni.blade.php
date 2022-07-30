@extends('user.layout.main')

@section('content')

@include('sweetalert::alert')
      <!-- contact  section -->
      @if (Auth::guard('alumnis')->user()->th_lulus == NULL)
      <h1>Anda belum mengubah profil, Silahkan lengkapi terlebih dahulu profil anda</h1>
      <div id="client" class="testimonial">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h1>Untuk mengisi kuisioner, silahkan lengkapi profil terlebih dahulu</h1>
                     <a class="yellow" href="/profil/edit/{{Auth::guard('alumnis')->user()->id}}">Profil</a>
                  </div>
               </div>
            </div>
         </div>
    </div>
      @else

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
                  <form class="contact_form" action="{{ route('post-jawaban-alumni') }}" method="POST">
                    @csrf
                        @foreach ($kuisionerAlumni as $key=>$data )
                        <div class="col-md-12">
                        <div class="mt-4"><h4>{{++$i}}. {{$data->pertanyaan}}</h4></div>
                        <input type="hidden" name="id_pertanyaan[]" value="{{$data->id}}">
                        @if ($data->jawaban_a)
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_a}}">
                        <label for="a">{{$data->jawaban_a}}</label><br>
                        @endif
                        @if ($data->jawaban_b)
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_b}}">
                        <label for="b">{{$data->jawaban_b}}</label><br>
                        @endif
                        @if ($data->jawaban_c)
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_c}}">
                        <label for="c">{{$data->jawaban_c}}</label><br>
                        @endif
                        @if ($data->jawaban_d)
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_d}}">
                        <label for="d">{{$data->jawaban_d}}</label><br>
                        @endif
                        @if ($data->jawaban_e)
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_e}}">
                        <label for="e">{{$data->jawaban_e}}</label><br>
                        @endif
                        @if ($data->jawaban_f)
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_f}}">
                        <label for="f">{{$data->jawaban_f}}</label><br>
                        @endif
                        @if ($data->jawaban_g)
                        <input type="radio" id="{{$key}}" name="jawaban-{{$key}}" value="{{$data->jawaban_g}}">
                        <label for="g">{{$data->jawaban_g}}</label><br>
                        @endif
                        @if ($data->jawaban_h)
                        <label for="h">{{$data->jawaban_h}}</label>
                        <input type="text" id="{{$key}}" name="jawaban-{{$key}}" >
                        @endif
                        </div>
                        @endforeach

                        <!-- JAJAL RADIO BUTTON KARO TEXT -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <input type="radio" aria-label="Radio button for following text input">
                              </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with radio button">
                          </div>

                          <div class="col-md-12 ">
                            <input class="contact_control" placeholder=" Name" type="type" name="Name">
                         </div>
                        <!-- PRAGAT JAJAL -->

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         </div>
      <!-- end contact  section -->
      @endif
@stop
