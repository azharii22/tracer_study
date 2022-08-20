<?php

namespace App\Imports;
use Illuminate\Support\Facades\Crypt;
use App\Models\Alumni;
use Maatwebsite\Excel\Concerns\ToModel;

class AlumniImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alumni([
            //
            'nim' => $row[1],
            'nama' => $row[2],
            'password' => Crypt::encryptString($row[3]),
        ]);
    }
}
