<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KuisionerAlumni;
use App\Models\EvaluasiAlumni;
use App\Models\Pembelajaran;
use App\Models\KuisionerPenggunaAlumni;
use App\Models\JawabanPenggunaAlumni;
use App\Models\JawabanAlumni;
use App\Models\PenggunaAlumni;
use App\Models\Tentang;
use App\Models\Alumni;
use App\Models\Status;
use DB;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request, Alumni $alumni, Status $status)
    {
        // Pie Chart
        $totalAlumni  = Alumni::count();
        $totalBekerja  = Alumni::where('id_status', 1)->count();
        $totalWirausaha = Alumni::where('id_status', 2)->count();
        $totalMelanjutkanStudi  = Alumni::where('id_status', 3)->count();
        $totalBelumBekerja  = Alumni::where('id_status', 4)->count();

        $alumni = Alumni::with('status');
        $bekerja = $alumni->withCount('status')->pluck('status_count')->toArray();
        $wirausaha = $alumni->withCount('status')->pluck('status_count')->toArray();
        $melanjutkanStudi = $alumni->withCount('status')->pluck('status_count')->toArray();
        $belumBekerja = $alumni->withCount('status')->pluck('status_count')->toArray();

        $dataPie = [$totalBekerja, $totalWirausaha, $totalMelanjutkanStudi, $totalBelumBekerja];

        // Bar Chart
        $labels = $alumni->pluck('prodi')->toArray();
        $totalTI  = Alumni::where('prodi', 'Teknik Informatika')->count();
        $totalRPL  = Alumni::where('prodi', 'Rekayasa Perangkat Lunak')->count();

        $dataTI   = [$totalTI];
        $dataRPL   = [$totalRPL];
        $prodiTI    = ['Teknik Informatika'];
        $prodiRPL    = ['Rekayasa Perangkat Lunak'];
        $bgColor   = ['#f39915', '#a43cda'];

        return view('user.index', compact('totalAlumni', 'totalBekerja', 'totalWirausaha', 'totalMelanjutkanStudi', 'totalBelumBekerja', 'labels', 'dataPie', 'dataRPL', 'dataTI', 'prodiRPL', 'prodiTI'));
    }

    public function berita_user()
    {
        //
        $berita = Berita::orderBy('id', 'DESC')->get();
        return view('user.berita', compact('berita'));
    }

    public function showBerita($slug){
        $berita = Berita::where('slug', $slug)->with('user')->get();

        return view('user.baca-berita', compact('berita'));
    }

    //kuisioner alumni
    public function kuisioner_alumni()
    {
        if (Auth::guard('alumnis')->check()) {
        $evaluasiAlumni = EvaluasiAlumni::orderBy('id', 'ASC')->get();
        $pembelajaran = Pembelajaran::orderBy('id', 'ASC')->get();
        $kuisionerAlumni = KuisionerAlumni::orderBy('id', 'ASC');
        return view('user.kuisioner-alumni', compact('kuisionerAlumni', 'evaluasiAlumni', 'pembelajaran'))->with('i');
        }
        else{
            return redirect('login-alumni');
        }
    }

    public function edit(Request $request, Alumni $alumni, Status $status)
    {
        $status = Status::all();
        $alumni = Alumni::find($request->id);
        return view('user.edit-profile', compact('alumni', 'status'));
        // return view('user.edit-profile', [
        //     'alumni' => $request->Auth::guard('alumnis')->user()->nim
        // ]);
    }

    public function update(Request $request, Alumni $alumni, $id)
    {
        //
        $alumni = Alumni::find($request->id);
        $request->validate([
            'th_lulus'       => 'required',
            'prodi'       => 'required',
            'no_hp'       => 'required',
            'email'       => 'required'

        ]);

        $alumni->update([
            'nama'    => $request->nama,
            'th_lulus'    => $request->th_lulus,
            'prodi'    => $request->prodi,
            'no_hp'    => $request->no_hp,
            'email'    => $request->email,
            'id_status'    => $request->id_status
        ]);
        alert()->success('Berhasil','Profil dirubah');

        return redirect('kuisioner-alumni');
    }

    public function simpanJawabanAlumni(Request $request)
    {
        //
        // dd($request->all());
        DB::beginTransaction();
        try{
            $alumni = new Alumni;
            $jml=0;
            for($i=0; $i<count($request->id_pertanyaan); $i++) {
                $jawabanKuisioner = new JawabanAlumni;
                $jawabanKuisioner->id_alumni  = Auth::guard('alumnis')->user()->id;
                $jawabanKuisioner->id_pertanyaan = $request->id_pertanyaan[$i];
                $jawabanKuisioner->jawaban   = $request->get('jawaban-'. $i);
                $jml++;
                $jawabanKuisioner->save();
            }

            for($i=0; $i<count($request->id_evaluasi); $i++) {
                // dd($request->get('jawaban-evaluasi-'. $i));
                $jawabanEvaluasi = new JawabanAlumni;
                $jawabanEvaluasi->id_alumni  = Auth::guard('alumnis')->user()->id;
                $jawabanEvaluasi->id_evaluasi = $request->id_evaluasi[$i];
                $jawabanEvaluasi->jawaban   = $request->get('jawaban-evaluasi-'. $i);
                $jawabanEvaluasi->save();
            }

            for($i=0; $i<count($request->id_pembelajaran); $i++) {
                // dd($request->get('jawaban-evaluasi-'. $i));
                $jawabanPembelajaran = new JawabanAlumni;
                $jawabanPembelajaran->id_alumni  = Auth::guard('alumnis')->user()->id;
                $jawabanPembelajaran->id_pembelajaran = $request->id_pembelajaran[$i];
                $jawabanPembelajaran->jawaban   = $request->get('jawaban-pembelajaran-'. $i);
                $jawabanPembelajaran->save();
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

    //Identitas pengguna alumni
    public function data_pengguna_alumni()
    {
        $penggunaAlumni = PenggunaAlumni::orderBy('id')->get();
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::orderBy('id', 'ASC')->get();
        return view('user.data-pengguna-alumni', compact('penggunaAlumni','kuisionerPenggunaAlumni'))->with('i');
    }

    //Kuisioner Pengguna ALumni
    public function kuisioner_pengguna_alumni()
    {
        //
        $penggunaAlumni = PenggunaAlumni::orderBy('id')->get();
        $kuisionerPenggunaAlumni = KuisionerPenggunaAlumni::orderBy('id', 'ASC')->get();
        return view('user.kuisioner-pengguna-alumni', compact('kuisionerPenggunaAlumni'))->with('i');
    }

    //Post
    public function simpanJawabanPenggunaAlumni(Request $request)
    {
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
            $pengguna = new PenggunaAlumni;
            $pengguna->nama         = $request->nama;
            $pengguna->email        = $request->email;
            $pengguna->perusahaan   = $request->perusahaan;
            $pengguna->jabatan      = $request->jabatan;
            $pengguna->alamat       = $request->alamat;
            $pengguna->nim          = $request->nim;
            $pengguna->nama_mhs     = $request->nama_mhs;
            $pengguna->th_lulus     = $request->th_lulus;
            $pengguna->prodi        = $request->prodi;
            $pengguna->saran        = $request->saran;
            $pengguna->save();

        // $pertanyaan = KuisionerPenggunaAlumni::all();
            # code...
            for($i=0; $i<count($request->id_pertanyaan); $i++) {
                // dd($request->get('jawaban-'. $i));
                $jawaban = new JawabanPenggunaAlumni;
                $jawaban->id_user  = $pengguna->id;
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
        return redirect('kuisioner-pengguna-alumni');
    }

    // public function simpanJawabanPenggunaAlumni(Request $request)
    // {
    //     JawabanPenggunaAlumni::create([
    //         'id_user' => $request->id_user,
    //         'id_pertanyaan' => $request->id_pertanyaan,
    //         'jawaban' => $request->jawaban,
    //     ]);
    //     alert()->success('Terimakasih','Kuisioner Berhasil Terkirim');
    //     return redirect()->back();
    // }
    // Tentang
    public function tentang()
    {
        //
        $tentang = Tentang::orderBy('id', 'ASC')->get();
        return view('user.tentang', compact('tentang'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
