<?php

namespace App\Http\Controllers;

use App\Models\KuisionerAlumni;
use App\Models\JawabanAlumni;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Auth;

class KuisionerAlumniController extends Controller
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
        $alumni = Alumni::all();
        $kuisionerAlumni = KuisionerAlumni::orderBy('id', 'ASC')->get();
        return view('admin.form-kuisioner.alumni.kuisioner-alumni', compact('kuisionerAlumni', 'alumni'))->with('i');
    }

    public function jawabanAlumni()
    {
        $alumni = Alumni::orderBy('nim', 'ASC')->get();
        return view ('admin.jawaban.alumni.jawaban', compact('alumni'))->with('i');
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
            'jawaban_a'       => 'nullable',
            'jawaban_b'       => 'nullable',
            'jawaban_c'       => 'nullable',
            'jawaban_d'       => 'nullable',
            'jawaban_e'       => 'nullable',
            'jawaban_f'       => 'nullable',
            'jawaban_g'       => 'nullable',
            'jawaban_h'       => 'nullable',
        ]);

        $kuisionerAlumni = KuisionerAlumni::create([
            'pertanyaan'  => $request->pertanyaan,
            'jawaban_a'   => $request->jawaban_a,
            'jawaban_b'   => $request->jawaban_b,
            'jawaban_c'   => $request->jawaban_c,
            'jawaban_d'   => $request->jawaban_d,
            'jawaban_e'   => $request->jawaban_e,
            'jawaban_f'   => $request->jawaban_f,
            'jawaban_g'   => $request->jawaban_g,
            'jawaban_h'   => $request->jawaban_h
        ]);
        $kuisionerAlumni->save();
        alert()->success('Berhasil','Pertanyaan Telah Ditambah');
        return redirect('/admin-kuisioner-alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KuisionerAlumni  $kuisionerAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(KuisionerAlumni $kuisionerAlumni, $id)
    {
        //
        $alumni = Alumni::with('jawaban')->find($id);
        $jawaban = jawabanAlumni::where('id')->get();
        //dd($jawaban);
        return view('admin.jawaban.alumni.detail-jawaban', compact('alumni', 'jawaban'))->with('i');
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
            'jawaban_a'       => 'nullable',
            'jawaban_b'       => 'nullable',
            'jawaban_c'       => 'nullable',
            'jawaban_d'       => 'nullable',
            'jawaban_e'       => 'nullable',
            'jawaban_f'       => 'nullable',
            'jawaban_g'       => 'nullable',
            'jawaban_h'       => 'nullable'
        ]);

        $kuisionerAlumni = KuisionerAlumni::find($id);
        $kuisionerAlumni->update([
            'pertanyaan'  => $request->pertanyaan,
            'jawaban_a'   => $request->jawaban_a,
            'jawaban_b'   => $request->jawaban_b,
            'jawaban_c'   => $request->jawaban_c,
            'jawaban_d'   => $request->jawaban_d,
            'jawaban_e'   => $request->jawaban_e,
            'jawaban_f'   => $request->jawaban_f,
            'jawaban_g'   => $request->jawaban_g,
            'jawaban_h'   => $request->jawaban_h
        ]);
        alert()->success('Berhasil','Pertanyaan Telah Dirubah');

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
        alert()->success('Berhasil','Pertanyaan Telah Dihapus');
        return redirect('admin-kuisioner-alumni');
    }
}
