<?php

namespace App\Exports;

use App\Models\PenggunaAlumni;
use App\Models\KuisionerPenggunaAlumni;
use App\Models\JawabanPenggunaAlumni;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;

class JawabanPenggunaAlumniExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function view(): View
    // {
    //     return view('admin.jawaban.pengguna-alumni.export', [
    //         'penggunaAlumni' => PenggunaAlumni::with('jawaban')->get(),

    //     ]);
    // }

    use Exportable;

    public function view(): View
    {
        return view('admin.jawaban.pengguna-alumni.export', [
            // 'kuisionerPenggunaAlumni' => kuisionerPenggunaAlumni::get(),
            'penggunaAlumni' => PenggunaAlumni::get(),
            'jawaban' => JawabanPenggunaAlumni::with('PenggunaAlumni','KuisionerPenggunaAlumni')->get(),

        ]);
    }

}
