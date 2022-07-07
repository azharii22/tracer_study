<?php

namespace App\Http\Controllers;

use App\Models\KuisionerPenggunaAlumni;
use Illuminate\Http\Request;

class KuisionerPenggunaAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::orderBy('id', 'DESC')->get();
        return view('admin.form-kuisioner.pengguna-alumni.kuisioner-pengguna-alumni', compact('kuisionerPenggunaAlumni'))->with('i');
    }

    public function kuisioner_pengguna_alumni()
    {
        //
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::orderBy('id', 'DESC')->get();
        return view('user.kuisioner-pengguna-alumni', compact('kuisionerPenggunaAlumni'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.form-kuisioner.pengguna-alumni.buat-kuisioner-pengguna-alumni');
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
        $request->validate([
            'pertanyaan'      => 'required',
            'jawaban_a'       => 'required',
            'jawaban_b'       => 'required',
            'jawaban_c'       => 'required',
            'jawaban_d'       => 'required',
            'jawaban_e'       => 'required'
        ]);

        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::create([
            'pertanyaan'  => $request->pertanyaan,
            'jawaban_a'   => $request->jawaban_a,
            'jawaban_b'   => $request->jawaban_b,
            'jawaban_c'   => $request->jawaban_c,
            'jawaban_d'   => $request->jawaban_d,
            'jawaban_e'   => $request->jawaban_e,
        ]);
        $kuisionerPenggunaAlumni->save();

        return redirect('/admin-kuisioner-pengguna-alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KuisionerPenggunaAlumni  $kuisionerPenggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(KuisionerPenggunaAlumni $kuisionerPenggunaAlumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KuisionerPenggunaAlumni  $kuisionerPenggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function edit(KuisionerPenggunaAlumni $kuisionerPenggunaAlumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KuisionerPenggunaAlumni  $kuisionerPenggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KuisionerPenggunaAlumni $kuisionerPenggunaAlumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KuisionerPenggunaAlumni  $kuisionerPenggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(KuisionerPenggunaAlumni $kuisionerPenggunaAlumni, $id)
    {
        //
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::find($id);
        $kuisionerPenggunaAlumni->delete();

        return redirect('admin-kuisioner-pengguna-alumni');
    }
}
