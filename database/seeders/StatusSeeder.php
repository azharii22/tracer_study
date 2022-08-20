<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status = Status::create([
            'id'       => 1,
            'status'   => "Bekerja",
        ]);
        $status->save();

        $status = Status::create([
            'id'       => 2,
            'status'   => "Wirausaha",
        ]);
        $status->save();

        $status = Status::create([
            'id'       => 3,
            'status'   => "Melanjutkan Study",
        ]);
        $status->save();

        $status = Status::create([
            'id'       => 4,
            'status'   => "Belum Memungkinkan Bekerja",
        ]);
        $status->save();
    }
}
