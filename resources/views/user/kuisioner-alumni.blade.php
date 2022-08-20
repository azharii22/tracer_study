@extends('user.layout.main')

@section('content')

@include('sweetalert::alert')
      <!-- contact  section -->
      @if (Auth::guard('alumnis')->user()->id_status == NULL)
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
      @elseif (Auth::guard('alumnis')->user()->id_status == "1")

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
                    @php
                        $no=0;
                        $kuisioner=$kuisionerAlumni->where('id_status', 1)->get();
                    @endphp
                        @foreach ($kuisioner as $key=>$data )
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
                        <div class="form-group">
                        <input type="text" class="form-control" name="jawaban-{{$key}}" id="{{$key}}">
                        </div>
                        @endif
                        </div>
                        @endforeach
                        <br><br><div class="card">
                                <div class="table-responsive pt-3">
                                        <h1 style="text-align: center">Kompetensi</h1>
                                    <table class="table table-striped project-orders-table">
                                        <thead>
                                            <tr>
                                                <th class="ml-5">Pada saat lulus, pada tingkat mana kompetensi dibawah ini yang Anda kuasai?</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                              </tr>
                                          </thead>
                                        <tbody>
                                            @foreach ($evaluasiAlumni as $key=>$evaluasi )
                                     <tr>
                                      <td>{{$evaluasi->pertanyaan}}</td>
                                      <input type="hidden" name="id_evaluasi[]" value="{{$evaluasi->id}}">
                                      <td>
                                        @if ($evaluasi->tidak_sama_sekali)
                                        <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->tidak_sama_sekali}}">
                                        @endif
                                    </td>
                                      <td>
                                        @if ($evaluasi->kurang)
                                        <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->kurang}}">
                                        @endif
                                      </td>
                                      <td>
                                        @if ($evaluasi->cukup)
                                        <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->cukup}}">
                                        @endif
                                      </td>
                                      <td>
                                        @if ($evaluasi->besar)
                                        <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->besar}}">
                                        @endif
                                      </td>
                                      <td>
                                        @if ($evaluasi->sangat_besar)
                                        <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->sangat_besar}}">
                                        @endif
                                      </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                              </div>
                            </div><br><br>
                            <div class="card">
                                <div class="table-responsive pt-3">
                                    <h1 style="text-align: center">Metode Pembelajaran</h1>
                                    <table class="table table-striped project-orders-table">
                                        <thead>
                                            <tr>
                                                <th class="ml-5">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini
                                                    dilaksanakan di program studi anda?</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                              </tr>
                                          </thead>
                                        <tbody>
                                            @foreach ($pembelajaran as $key=>$pembelajaran )
                                     <tr>
                                      <td>{{$pembelajaran->pertanyaan}}</td>
                                      <input type="hidden" name="id_pembelajaran[]" value="{{$pembelajaran->id}}">
                                      <td>
                                        @if ($pembelajaran->tidak_sama_sekali)
                                        <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->tidak_sama_sekali}}">
                                        @endif
                                    </td>
                                      <td>
                                        @if ($pembelajaran->kurang)
                                        <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->kurang}}">
                                        @endif
                                      </td>
                                      <td>
                                        @if ($pembelajaran->cukup)
                                        <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->cukup}}">
                                        @endif
                                      </td>
                                      <td>
                                        @if ($pembelajaran->besar)
                                        <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->besar}}">
                                        @endif
                                      </td>
                                      <td>
                                        @if ($pembelajaran->sangat_besar)
                                        <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->sangat_besar}}">
                                        @endif
                                      </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                              </div>
                            </div><br>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
         </div>

         @elseif (Auth::guard('alumnis')->user()->id_status == "2")
         <div id="contact" class="contact ">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Form Kuisioner Alumni Negeri Indramayu</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <form class="contact_form" action="{{ route('post-jawaban-alumni') }}" method="POST">
                       @csrf
                       @php
                        $no=0;
                        $kuisioner=$kuisionerAlumni->where('id_status', 2)->get();
                        @endphp
                        @foreach ($kuisioner as $key=>$data )
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
                           <div class="form-group">
                            <input type="text" class="form-control" name="jawaban-{{$key}}" id="{{$key}}">
                            </div>
                           @endif
                           </div>
                           @endforeach
                           <div class="card">
                            <div class="table-responsive pt-3">
                                <h1 style="text-align: center">Kompetensi</h1>
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th class="ml-5">Pada saat lulus, pada tingkat mana kompetensi dibawah ini yang Anda kuasai?</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                        @foreach ($evaluasiAlumni as $key=>$evaluasi )
                                 <tr>
                                  <td>{{$evaluasi->pertanyaan}}</td>
                                  <input type="hidden" name="id_evaluasi[]" value="{{$evaluasi->id}}">
                                  <td>
                                    @if ($evaluasi->tidak_sama_sekali)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->tidak_sama_sekali}}">
                                    @endif
                                </td>
                                  <td>
                                    @if ($evaluasi->kurang)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->kurang}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->cukup)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->cukup}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->besar}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->sangat_besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->sangat_besar}}">
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                          </div>
                        </div><br>
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <h1 style="text-align: center">Metode Pembelajaran</h1>
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th class="ml-5">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini
                                                dilaksanakan di program studi anda?</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                        @foreach ($pembelajaran as $key=>$pembelajaran )
                                 <tr>
                                  <td>{{$pembelajaran->pertanyaan}}</td>
                                  <input type="hidden" name="id_pembelajaran[]" value="{{$pembelajaran->id}}">
                                  <td>
                                    @if ($pembelajaran->tidak_sama_sekali)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->tidak_sama_sekali}}">
                                    @endif
                                </td>
                                  <td>
                                    @if ($pembelajaran->kurang)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->kurang}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->cukup)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->cukup}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->besar}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->sangat_besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->sangat_besar}}">
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                          </div>
                        </div><br>
                           <div class="col-md-12 text-center">
                               <button type="submit" class="btn btn-primary">Send</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
        </div>

        @elseif (Auth::guard('alumnis')->user()->id_status == "3")
         <div id="contact" class="contact ">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Form Kuisioner Alumni Negeri Indramayu</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <form class="contact_form" action="{{ route('post-jawaban-alumni') }}" method="POST">
                       @csrf
                       @php
                        $no=0;
                        $kuisioner=$kuisionerAlumni->where('id_status', 3)->get();
                        @endphp
                        @foreach ($kuisioner as $key=>$data )
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
                           <div class="form-group">
                            <input type="text" class="form-control" name="jawaban-{{$key}}" id="{{$key}}">
                            </div>
                           @endif
                           </div>
                           @endforeach
                           <div class="card">
                            <div class="table-responsive pt-3">
                                <h1 style="text-align: center">Kompetensi</h1>
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th class="ml-5">Pada saat lulus, pada tingkat mana kompetensi dibawah ini yang Anda kuasai?</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                        @foreach ($evaluasiAlumni as $key=>$evaluasi )
                                 <tr>
                                  <td>{{$evaluasi->pertanyaan}}</td>
                                  <input type="hidden" name="id_evaluasi[]" value="{{$evaluasi->id}}">
                                  <td>
                                    @if ($evaluasi->tidak_sama_sekali)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->tidak_sama_sekali}}">
                                    @endif
                                </td>
                                  <td>
                                    @if ($evaluasi->kurang)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->kurang}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->cukup)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->cukup}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->besar}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->sangat_besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->sangat_besar}}">
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                          </div>
                        </div><br>
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <h1 style="text-align: center">Metode Pembelajaran</h1>
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th class="ml-5">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini
                                                dilaksanakan di program studi anda?</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                        @foreach ($pembelajaran as $key=>$pembelajaran )
                                 <tr>
                                  <td>{{$pembelajaran->pertanyaan}}</td>
                                  <input type="hidden" name="id_pembelajaran[]" value="{{$pembelajaran->id}}">
                                  <td>
                                    @if ($pembelajaran->tidak_sama_sekali)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->tidak_sama_sekali}}">
                                    @endif
                                </td>
                                  <td>
                                    @if ($pembelajaran->kurang)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->kurang}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->cukup)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->cukup}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->besar}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->sangat_besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->sangat_besar}}">
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                          </div>
                        </div><br>
                           <div class="col-md-12 text-center">
                               <button type="submit" class="btn btn-primary">Send</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
        </div>

        @elseif (Auth::guard('alumnis')->user()->id_status == "4")
         <div id="contact" class="contact ">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Form Kuisioner Alumni Negeri Indramayu</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <form class="contact_form" action="{{ route('post-jawaban-alumni') }}" method="POST">
                       @csrf
                       @php
                        $no=0;
                        $kuisioner=$kuisionerAlumni->where('id_status', 4)->get();
                        @endphp
                        @foreach ($kuisioner as $key=>$data )
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
                           <div class="form-group">
                            <input type="text" class="form-control" name="jawaban-{{$key}}" id="{{$key}}">
                            </div>
                           @endif
                           </div>
                           @endforeach
                           <div class="card">
                            <div class="table-responsive pt-3">
                                <h1 style="text-align: center">Kompetensi</h1>
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th class="ml-5">Pada saat lulus, pada tingkat mana kompetensi dibawah ini yang Anda kuasai?</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                        @foreach ($evaluasiAlumni as $key=>$evaluasi )
                                 <tr>
                                  <td>{{$evaluasi->pertanyaan}}</td>
                                  <input type="hidden" name="id_evaluasi[]" value="{{$evaluasi->id}}">
                                  <td>
                                    @if ($evaluasi->tidak_sama_sekali)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->tidak_sama_sekali}}">
                                    @endif
                                </td>
                                  <td>
                                    @if ($evaluasi->kurang)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->kurang}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->cukup)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->cukup}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->besar}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($evaluasi->sangat_besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-evaluasi-{{$key}}" value="{{$evaluasi->sangat_besar}}">
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                          </div>
                        </div><br>
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <h1 style="text-align: center">Metode Pembelajaran</h1>
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th class="ml-5">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini
                                                dilaksanakan di program studi anda?</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                        @foreach ($pembelajaran as $key=>$pembelajaran )
                                 <tr>
                                  <td>{{$pembelajaran->pertanyaan}}</td>
                                  <input type="hidden" name="id_pembelajaran[]" value="{{$pembelajaran->id}}">
                                  <td>
                                    @if ($pembelajaran->tidak_sama_sekali)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->tidak_sama_sekali}}">
                                    @endif
                                </td>
                                  <td>
                                    @if ($pembelajaran->kurang)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->kurang}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->cukup)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->cukup}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->besar}}">
                                    @endif
                                  </td>
                                  <td>
                                    @if ($pembelajaran->sangat_besar)
                                    <input type="radio" id="{{$key}}" name="jawaban-pembelajaran-{{$key}}" value="{{$pembelajaran->sangat_besar}}">
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                          </div>
                        </div><br>
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
