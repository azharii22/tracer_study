<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use App\Models\Alumni;
use App\Models\EvaluasiAlumni;
use App\Models\Pembelajaran;
use App\Models\JawabanAlumni;
use Illuminate\Http\Request;

use Phpml\Clustering\KMeans;

class ClusterController extends Controller
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

    public function index(Request $request)
    {
        //
        $cluster = Cluster::with('alumni')->get();

        return view('admin.clustering.index', compact('cluster'))->with('i');
    }

    public function generateCluster()
    {
        $alumni = Alumni::with('jawabanKuisioner')->wherehas('jawabanKuisioner', function ($check){
            $check->select('jawaban');
        })->get();
        foreach ($alumni as $a){
            foreach($a->jawabanKuisioner as $key => $kuisioner) {
                $jawaban[$key] = (int)$kuisioner->jawaban;
            }
            $array[$a->id]=$jawaban;
        }

        $kmeans = new KMeans(3, KMeans::INIT_RANDOM);
        $cluster = $kmeans->cluster($array);

        $jumlahPerCluster = array();
        foreach($cluster as $key => $c) {
            $jumlah = array();
            foreach($c as $k => $kk) {
                $jumlah[$k] = array_sum($kk);
            }
            $jumlahPerCluster[$key] = array_sum($jumlah);
            $clustering[array_sum($jumlah)] = collect($c);
        }
        ksort($clustering);

        $count = 0;
        foreach($clustering as $cluster=>$data)
        {
            if($count == 0) {
                $cluster = 'Kurang';
            } elseif($count == 1) {
                $cluster = 'Cukup';
            } elseif($count == 2) {
                $cluster = 'Baik';
            }
            foreach($data as $id_alumni=>$id)
            {
                Cluster::updateOrCreate(['id_alumni' => $id_alumni], ['cluster' => $cluster]);
            }
            $count++;
        }

        return redirect()->route('/admin/cluster');
    }

    public function clustering($data)
    {
        foreach($data as $key => $d) {
            $samples[$d->name] = [$d->transaksi->count(), $d->penjualan->sum('quantity')];
        }
        $kmeans = new KMeans(2);
        $cluster = $kmeans->cluster($samples);

        foreach($cluster as $key => $c) {
            $clustering['C'.($key+1)] = collect($c);
        }

        return $clustering;
    }

}
