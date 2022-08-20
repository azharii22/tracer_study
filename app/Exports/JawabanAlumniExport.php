<?php

namespace App\Exports;

use App\Models\Alumni;
use App\Models\Status;
use App\Models\KuisionerAlumni;
use App\Models\JawabanAlumni;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use DB;

class JawabanAlumniExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function view(): View
    {
        return view('admin.jawaban.alumni.export', [
            // 'penggunaAlumni' => PenggunaAlumni::with('jawaban')->get(),
            // 'kuisionerAlumni' => kuisionerAlumni::get(),
            'jawaban' => JawabanAlumni::whereHas('KuisionerAlumni')->get(),
            'alumni' => DB::table('alumnis')
            ->join('statuses','statuses.id','=','alumnis.id_status')
            ->select('alumnis.*','statuses.*')
            ->get(),
        ]);
    }
}
