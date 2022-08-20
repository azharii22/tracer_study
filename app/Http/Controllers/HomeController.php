<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use App\Models\PenggunaAlumni;
use App\Models\Status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, Alumni $alumni, Status $status, PenggunaAlumni $penggunaAlumni)
    {
        $partisipanAlumni = Alumni::has('jawaban')->count();
        $partisipanPA = PenggunaAlumni::has('jawaban')->count();

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


        return view('admin.index', compact('totalAlumni', 'totalBekerja', 'totalWirausaha', 'totalMelanjutkanStudi', 'totalBelumBekerja', 'labels', 'dataPie', 'dataRPL', 'dataTI', 'prodiRPL', 'prodiTI', 'partisipanAlumni', 'partisipanPA'));
    }
}
