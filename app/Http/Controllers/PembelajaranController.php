<?php

namespace App\Http\Controllers;

use App\Models\Pembelajaran;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
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
        $pembelajaran = Pembelajaran::orderBy('id', 'ASC')->get();
        return view('admin.form-kuisioner.pembelajaran.index', compact('pembelajaran'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.form-kuisioner.pembelajaran.create');
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

        $pembelajaran = Pembelajaran::create([
            'pertanyaan'  => $request->pertanyaan,
            'sangat_besar'   => $request->sangat_besar,
            'besar'   => $request->besar,
            'cukup'   => $request->cukup,
            'kurang'   => $request->kurang,
            'tidak_sama_sekali'   => $request->tidak_sama_sekali
        ]);
        $pembelajaran->save();
        alert()->success('Berhasil','Pertanyaan Telah Ditambah');
        return redirect('/admin/pembelajaran-alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelajaran $pembelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelajaran $pembelajaran, $id)
    {
        //
        $pembelajaran = Pembelajaran::find($id);
        return view('admin.form-kuisioner.pembelajaran.edit', compact('pembelajaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelajaran $pembelajaran, $id)
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
        $pembelajaran = Pembelajaran::find($id);
        $pembelajaran->update([
            'pertanyaan'  => $request->pertanyaan,
            'sangat_besar'   => $request->sangat_besar,
            'besar'   => $request->besar,
            'cukup'   => $request->cukup,
            'kurang'   => $request->kurang,
            'tidak_sama_sekali'   => $request->tidak_sama_sekali
        ]);
        alert()->success('Berhasil','Pertanyaan Telah Dirubah');
        return redirect('/admin/pembelajaran-alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelajaran $pembelajaran, $id)
    {
        //
        $pembelajaran = Pembelajaran::find($id);
        $pembelajaran->delete();

        alert()->success('Berhasil','Pertanyaan Telah Dihapus');

        return redirect('/admin/pembelajaran-alumni');
    }
}
