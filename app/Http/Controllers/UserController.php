<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KuisionerAlumni;
use App\Models\KuisionerPenggunaAlumni;
use App\Models\JawabanPenggunaAlumni;
use App\Models\PenggunaAlumni;
use App\Models\Tentang;
use App\Models\Alumni;

use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
	//     $this->middleware('auth',["except"=>["kuisioner_alumni"]]);
    // }

    //berita
    public function berita_user()
    {
        //
        $berita = Berita::orderBy('id', 'DESC')->get();
        return view('user.berita', compact('berita'));
    }

    public function showBerita($slug){
        $berita = Berita::where('slug', $slug)->with('user')->get();

        return view('user.baca-berita', compact('berita'));
    }

    //kuisioner alumni
    public function kuisioner_alumni()
    {
        if (Auth::guard('alumnis')->check()) {

        $kuisionerAlumni = KuisionerAlumni::orderBy('id', 'ASC')->get();
        return view('user.kuisioner-alumni', compact('kuisionerAlumni'))->with('i');
        }
        else{
            return redirect('login-alumni');
        }
    }

    public function edit(Request $request, Alumni $alumni)
    {
        $alumni = Alumni::find($request->id);
        return view('user.edit-profile', compact('alumni'));
        // return view('user.edit-profile', [
        //     'alumni' => $request->Auth::guard('alumnis')->user()->nim
        // ]);
    }

    public function update(Request $request, Alumni $alumni, $id)
    {
        //
        $alumni = Alumni::find($request->id);
        $request->validate([
            'th_lulus'       => 'required',
            'prodi'       => 'required',
            'no_hp'       => 'required',
            'email'       => 'required',
            'status'       => 'required',

        ]);

        $alumni->update([
            'nama'    => $request->nama,
            'th_lulus'    => $request->th_lulus,
            'prodi'    => $request->prodi,
            'no_hp'    => $request->no_hp,
            'email'    => $request->email,
            'status'    => $request->status
        ]);
        alert()->success('Berhasil','Profil dirubah');

        return redirect('kuisioner-alumni');
    }

    // public function edit(Alumni $alumni, $nim)
    // {
    //     $alumni = Alumni::find($nim);
    //     return view('user.edit-profile', compact('alumni'));
    // }

    public function simpanJawabanAlumni(Request $request)
    {
        JawabanAlumni::create([
            'id_alumni'           => $request->id_alumni,
            'id_pertanyaan' => $request->id_pertanyaan,
            'jawaban'       => $request->jawaban
        ]);
        alert()->success('Terimakasih','Kuisioner Berhasil Terkirim');
        return redirect()->back();
    }

    //Identitas pengguna alumni
    public function data_pengguna_alumni()
    {
        $penggunaAlumni = PenggunaAlumni::orderBy('id')->get();
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::orderBy('id', 'ASC')->get();
        return view('user.data-pengguna-alumni', compact('penggunaAlumni','kuisionerPenggunaAlumni'))->with('i');
    }

    //Kuisioner Pengguna ALumni
    public function kuisioner_pengguna_alumni()
    {
        //
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::orderBy('id', 'ASC')->get();
        return view('user.kuisioner-pengguna-alumni', compact('kuisionerPenggunaAlumni'))->with('i');
    }

    public function simpanJawabanPenggunaAlumni(Request $request)
    {
        JawabanPenggunaAlumni::create([
            'id_user' => $request->id_user,
            'id_pertanyaan' => $request->id_pertanyaan,
            'jawaban' => $request->jawaban,
        ]);
        alert()->success('Terimakasih','Kuisioner Berhasil Terkirim');
        return redirect()->back();
    }
    // Tentang
    public function tentang()
    {
        //
        $tentang = Tentang::orderBy('id', 'ASC')->get();
        return view('user.tentang', compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
