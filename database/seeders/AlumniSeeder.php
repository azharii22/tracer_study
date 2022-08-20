<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use App\Models\Alumni;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = new Alumni();
        $data->nim     = "12";
        $data->nama    = "Akhmad Azhari Nur";
        $data->id_status = 1;
        $data->password = Crypt::encryptString("12");

        $data->save();
    }
}
