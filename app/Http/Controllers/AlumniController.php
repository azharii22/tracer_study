<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\JawabanAlumni;
use App\Models\KuisionerAlumni;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use DB;

class AlumniController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
        $alumni = Alumni::orderBy('nama', 'ASC')->get();
        return view('admin.data-pengguna.alumni.alumni', compact('alumni'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'nama'        => 'required',
        //     'email'       => 'required',
        //     'perusahaan'  => 'required',
        //     'jabatan'     => 'required',
        //     'alamat'      => 'required',
        //     'nim'         => 'required',
        //     'nama_mhs'    => 'required',
        //     'th_lulus'    => 'required',
        //     'prodi'       => 'required'
        // ]);
        // dd($request->get('jawaban-0'));
        DB::beginTransaction();
        try{
            $alumni = new Alumni;
            // $alumni->nama         = $request->nama;
            // $alumni->nim          = $request->nim;
            // $alumni->th_lulus     = $request->th_lulus;
            // $alumni->status       = $request->status;
            // // $alumni->alamat       = $request->alamat;
            // // $alumni->nim          = $request->nim;
            // // $alumni->nama_mhs     = $request->nama_mhs;
            // // $alumni->th_lulus     = $request->th_lulus;
            // // $alumni->prodi        = $request->prodi;
            // $alumni->save();

        // $pertanyaan = KuisionerPenggunaAlumni::all();
            # code...
            for($i=0; $i<count($request->id_pertanyaan); $i++) {
                // dd($request->get('jawaban-'. $i));
                $jawaban = new JawabanAlumni;
                $jawaban->id_alumni  = Auth::guard('alumnis')->user()->id;
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
        return redirect('kuisioner-alumni');
    }

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
    public function destroy($id)
    {
        //
    }
}
