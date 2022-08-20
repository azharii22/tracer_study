<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\JawabanAlumni;
use App\Models\KuisionerAlumni;
use App\Exports\AlumniExport;
use App\Imports\AlumniImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use DB;

class AlumniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function alumni()
    {
        return view('admin.data-pengguna.alumni.tambah-alumni', [
            'title' => 'Tambah Data Alumni'
        ]);
    }

    public function validatorAlumni(array $data)
    {
        return Validator::make($data, [
            'nim' => ['required', 'string', 'max:7', 'unique:alumnis'],
            'nama' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:7', 'confirmed'],
        ]);
    }

    public function createAlumni(Request $request)
    {
        $data = new Alumni();
        $data->nim     = $request->nim;
        $data->nama    = $request->nama;
        $data->password = Crypt::encryptString($request->password);

        $data->save();

        alert()->success('Berhasil','Data Alumni Telah Ditambah');

        return redirect('/data-alumni');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::orderBy('nim', 'ASC')->get();
        return view('admin.data-pengguna.alumni.alumni', compact('alumni'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function exportAlumni()
    {
        return Excel::download(new AlumniExport, 'data-alumni.xlsx');
    }

    public function importAlumni(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataAlumni', $namaFile);

        Excel::import(new AlumniImport, public_path('/DataAlumni/'.$namaFile));
        return redirect('/data-alumni');
    }

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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni, $id)
    {
        //
        $alumni = Alumni::find($id);
        $alumni->delete();

        alert()->success('Berhasil','Akun dihapus');

        return redirect('/data-alumni');
    }
}
