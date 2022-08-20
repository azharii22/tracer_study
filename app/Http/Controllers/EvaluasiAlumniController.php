<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiAlumni;
use Illuminate\Http\Request;

class EvaluasiAlumniController extends Controller
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
        $evaluasiAlumni = EvaluasiAlumni::orderBy('id', 'ASC')->get();
        return view('admin.form-kuisioner.kompetensi.index', compact('evaluasiAlumni'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.form-kuisioner.kompetensi.create');
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
            'sangat_besar'       => 'nullable',
            'besar'       => 'nullable',
            'cukup'       => 'nullable',
            'kurang'       => 'nullable',
            'tidak_sama_sekali'       => 'nullable'
        ]);

        $evaluasiAlumni = EvaluasiAlumni::create([
            'pertanyaan'  => $request->pertanyaan,
            'sangat_besar'   => $request->sangat_besar,
            'besar'   => $request->besar,
            'cukup'   => $request->cukup,
            'kurang'   => $request->kurang,
            'tidak_sama_sekali'   => $request->tidak_sama_sekali
        ]);
        $evaluasiAlumni->save();
        alert()->success('Berhasil','Pertanyaan Telah Ditambah');
        return redirect('/admin/evaluasi-alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EvaluasiAlumni  $evaluasiAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluasiAlumni $evaluasiAlumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EvaluasiAlumni  $evaluasiAlumni
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluasiAlumni $evaluasiAlumni, $id)
    {
        //
        $evaluasiAlumni = EvaluasiAlumni::find($id);

        return view('admin.form-kuisioner.kompetensi.edit', compact('evaluasiAlumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EvaluasiAlumni  $evaluasiAlumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvaluasiAlumni $evaluasiAlumni, $id)
    {
        //
        $request->validate([
            'pertanyaan'      => 'required',
            'sangat_besar'       => 'nullable',
            'besar'       => 'nullable',
            'cukup'       => 'nullable',
            'kurang'       => 'nullable',
            'tidak_sama_sekali'       => 'nullable'
        ]);
        $evaluasiAlumni = EvaluasiAlumni::find($id);
        $evaluasiAlumni->update([
            'pertanyaan'  => $request->pertanyaan,
            'sangat_besar'   => $request->sangat_besar,
            'besar'   => $request->besar,
            'cukup'   => $request->cukup,
            'kurang'   => $request->kurang,
            'tidak_sama_sekali'   => $request->tidak_sama_sekali
        ]);
        alert()->success('Berhasil','Pertanyaan Telah Dirubah');
        return redirect('/admin/evaluasi-alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EvaluasiAlumni  $evaluasiAlumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluasiAlumni $evaluasiAlumni, $id)
    {
        //
        $evaluasiAlumni = EvaluasiAlumni::find($id);
        $evaluasiAlumni->delete();

        alert()->success('Berhasil','Pertanyaan Telah Dihapus');

        return redirect('/admin/evaluasi-alumni');
    }
}
