<?php

namespace App\Http\Controllers;

use App\Models\PenggunaAlumni;
use App\Models\JawabanPenggunaAlumni;
use App\Models\KuisionerPenggunaAlumni;
use Illuminate\Http\Request;
use DB;

class PenggunaAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $penggunaAlumni = PenggunaAlumni::orderBy('id', 'ASC')->get();
        return view('admin.data-pengguna.pengguna-alumni.pengguna-alumni', compact('penggunaAlumni'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('user.kuisioner-pengguna-alumni');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'        => 'required',
            'email'       => 'required',
            'perusahaan'  => 'required',
            'jabatan'     => 'required',
            'alamat'      => 'required',
            'nim'         => 'required',
            'nama_mhs'    => 'required',
            'th_lulus'    => 'required',
            'prodi'       => 'required'
        ]);
        // dd($request->get('jawaban-0'));
        DB::beginTransaction();
        try{
            $pengguna = new PenggunaAlumni;
            $pengguna->nama         = $request->nama;
            $pengguna->email        = $request->email;
            $pengguna->perusahaan   = $request->perusahaan;
            $pengguna->jabatan      = $request->jabatan;
            $pengguna->alamat       = $request->alamat;
            $pengguna->nim          = $request->nim;
            $pengguna->nama_mhs     = $request->nama_mhs;
            $pengguna->th_lulus     = $request->th_lulus;
            $pengguna->prodi        = $request->prodi;
            $pengguna->save();

        // $pertanyaan = KuisionerPenggunaAlumni::all();
            # code...
            for($i=0; $i<count($request->id_pertanyaan); $i++) {
                // dd($request->get('jawaban-'. $i));
                $jawaban = new JawabanPenggunaAlumni;
                $jawaban->id_user  = $pengguna->id;
                $jawaban->id_pertanyaan = $request->id_pertanyaan[$i];
                $jawaban->jawaban   = $request->get('jawaban-'. $i);

                $jawaban->save();
            }
            DB::commit();
        } catch (\Throwable $e)

        {
            DB::rollback();
            throw $e;
        }
        alert()->success('Terimakasih','Kuisioner Berhasil Terkirim');
        return redirect('data-pengguna-alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenggunaAlumni  $penggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(PenggunaAlumni $penggunaAlumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenggunaAlumni  $penggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function edit(PenggunaAlumni $penggunaAlumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PenggunaAlumni  $penggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenggunaAlumni $penggunaAlumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenggunaAlumni  $penggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenggunaAlumni $penggunaAlumni, $id)
    {
        //
        $penggunaAlumni = PenggunaAlumni::find($id);
        $penggunaAlumni->delete();

        return redirect('admin-data-pengguna-alumni');
    }
}
