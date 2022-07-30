<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
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
        $tentang = Tentang::orderBy('id', 'ASC')->get();
        return view('admin.tentang.tentang', compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tentang.buat-tentang');
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
            'judul'      => 'required',
            'isi'       => 'required'
        ]);

        $tentang = Tentang::create([
            'judul'  => $request->judul,
            'isi'    => $request->isi
        ]);
        $tentang->save();
        alert()->success('Berhasil','Konten Telah Ditambah');
        return redirect('/admin/tentang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function edit(Tentang $tentang, $id)
    {
        //
        $tentang = Tentang::find($id);
        return view('admin.tentang.edit-tentang', compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tentang $tentang, $id)
    {
        //
        $request->validate([
            'judul'     => 'required',
            'isi'       => 'required'
        ]);
        $tentang = Tentang::find($id);
        $tentang->update([
            'judul'  => $request->judul,
            'isi'    => $request->isi
        ]);
        alert()->success('Berhasil','Konten dirubah');

        return redirect('/admin/tentang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tentang $tentang, $id)
    {
        //
        $tentang = Tentang::find($id);
        $tentang->delete();

        alert()->success('Berhasil','Konten dihapus');

        return redirect('/admin/tentang');
    }
}
