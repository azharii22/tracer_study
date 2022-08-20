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

    // public function create()
    // {
    //     return view ('user.kuisioner-pengguna-alumni');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
