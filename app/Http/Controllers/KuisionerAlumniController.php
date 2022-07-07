<?php

namespace App\Http\Controllers;

use App\Models\KuisionerAlumni;
use Illuminate\Http\Request;
use Auth;

class KuisionerAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kuisionerAlumni = KuisionerAlumni::orderBy('id', 'DESC')->get();
        return view('admin.form-kuisioner.alumni.kuisioner-alumni', compact('kuisionerAlumni'))->with('i');
    }

    public function kuisioner_alumni()
    {
        //
        $kuisionerAlumni = KuisionerAlumni::orderBy('id', 'DESC')->get();
        return view('user.kuisioner-alumni', compact('kuisionerAlumni'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.form-kuisioner.alumni.buat-kuisioner-alumni');
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

        $kuisionerAlumni = KuisionerAlumni::create([
            'pertanyaan'  => $request->pertanyaan,
            'jawaban_a'   => $request->jawaban_a,
            'jawaban_b'   => $request->jawaban_b,
            'jawaban_c'   => $request->jawaban_c,
            'jawaban_d'   => $request->jawaban_d,
            'jawaban_e'   => $request->jawaban_e
        ]);
        $kuisionerAlumni->save();

        return redirect('/admin-kuisioner-alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KuisionerAlumni  $kuisionerAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(KuisionerAlumni $kuisionerAlumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KuisionerAlumni  $kuisionerAlumni
     * @return \Illuminate\Http\Response
     */
    public function edit(KuisionerAlumni $kuisionerAlumni, $id)
    {
        //
        $kuisionerAlumni = KuisionerAlumni::find($id);

        return view('admin.form-kuisioner.alumni.edit-kuisioner-alumni', compact('kuisionerAlumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KuisionerAlumni  $kuisionerAlumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KuisionerAlumni $kuisionerAlumni, $id)
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

        $kuisionerAlumni = KuisionerAlumni::find($id);
        $kuisionerAlumni->update([
            'pertanyaan'  => $request->pertanyaan,
            'jawaban_a'   => $request->jawaban_a,
            'jawaban_b'   => $request->jawaban_b,
            'jawaban_c'   => $request->jawaban_c,
            'jawaban_d'   => $request->jawaban_d,
            'jawaban_e'   => $request->jawaban_e
        ]);

        return redirect('admin-kuisioner-alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KuisionerAlumni  $kuisionerAlumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(KuisionerAlumni $kuisionerAlumni, $id)
    {
        //
        $kuisionerAlumni = KuisionerAlumni::find($id);
        $kuisionerAlumni->delete();

        return redirect('admin-kuisioner-alumni');
    }
}
