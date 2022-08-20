<?php

namespace App\Http\Controllers;

use App\Models\KuisionerPenggunaAlumni;
use App\Models\JawabanPenggunaAlumni;
use App\Models\PenggunaAlumni;
use App\Exports\JawabanPenggunaAlumniExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class KuisionerPenggunaAlumniController extends Controller
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
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::orderBy('id', 'ASC')->get();
        return view('admin.form-kuisioner.pengguna-alumni.kuisioner-pengguna-alumni', compact('kuisionerPenggunaAlumni'))->with('i');
    }

    public function jawabanPenggunaAlumni()
    {
        //
        $penggunaAlumni = PenggunaAlumni::has('jawaban')
            ->orderBy('id', 'ASC')
            ->get();

        return view('admin.jawaban.pengguna-alumni.jawaban', compact('penggunaAlumni'))->with('i');
    }

    public function exportJawaban(PenggunaAlumni $penggunaAlumni, KuisionerPenggunaAlumni $kuisionerPenggunaAlumni)
    {
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::get();
        $penggunaAlumni = PenggunaAlumni::with('jawaban')->get();
        $jawaban = JawabanPenggunaAlumni::with('PenggunaAlumni','KuisionerPenggunaAlumni')->get();
        // dd($jawaban);
        return Excel::download(new JawabanPenggunaAlumniExport, 'data-jawaban-pengguna-alumni.xlsx');
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
            'jawaban_d'       => 'required'
        ]);

        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::create([
            'pertanyaan'  => $request->pertanyaan,
            'jawaban_a'   => $request->jawaban_a,
            'jawaban_b'   => $request->jawaban_b,
            'jawaban_c'   => $request->jawaban_c,
            'jawaban_d'   => $request->jawaban_d,
        ]);
        $kuisionerPenggunaAlumni->save();

        alert()->success('Berhasil','Pertanyaan Telah Ditambah');

        return redirect('/admin-kuisioner-pengguna-alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KuisionerPenggunaAlumni  $kuisionerPenggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(KuisionerPenggunaAlumni $kuisionerPenggunaAlumni, $id)
    {
        //
        $penggunaAlumni = PenggunaAlumni::with('jawaban')->find($id);
        return view('admin.jawaban.pengguna-alumni.detail-jawaban', compact('penggunaAlumni'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KuisionerPenggunaAlumni  $kuisionerPenggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function edit(KuisionerPenggunaAlumni $kuisionerPenggunaAlumni, $id)
    {
        //
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::find($id);

        return view('admin.form-kuisioner.pengguna-alumni.edit-kuisioner-pengguna-alumni', compact('kuisionerPenggunaAlumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KuisionerPenggunaAlumni  $kuisionerPenggunaAlumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KuisionerPenggunaAlumni $kuisionerPenggunaAlumni, $id)
    {
        //
        $request->validate([
            'pertanyaan'      => 'required',
            'jawaban_a'       => 'required',
            'jawaban_b'       => 'required',
            'jawaban_c'       => 'required',
            'jawaban_d'       => 'required'
        ]);

        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::find($id);
        $kuisionerPenggunaAlumni->update([
            'pertanyaan'  => $request->pertanyaan,
            'jawaban_a'   => $request->jawaban_a,
            'jawaban_b'   => $request->jawaban_b,
            'jawaban_c'   => $request->jawaban_c,
            'jawaban_d'   => $request->jawaban_d
        ]);

        alert()->success('Berhasil','Pertanyaan Telah Dirubah');

        return redirect('admin-kuisioner-pengguna-alumni');
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

        alert()->success('Berhasil','Pertanyaan Telah Dihapus');

        return redirect('admin-kuisioner-pengguna-alumni');
    }

    public function hapusJwbPenggunaAlumni(KuisionerPenggunaAlumni $kuisionerPenggunaAlumni, $id)
    {
        //
        $penggunaAlumni = PenggunaAlumni::with('jawaban')->find($id);
        $penggunaAlumni->delete();
        // $jawaban = JawabanPenggunaAlumni::with('PenggunaAlumni','KuisionerPenggunaAlumni')->delete();
        alert()->success('Berhasil','Jawaban Telah Dihapus');
        return redirect('jawaban-pengguna-alumni');
    }
}
