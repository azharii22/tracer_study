<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = new User();
        $data->name     = "admin";
        $data->email     = "admin@gmail.com";
        $data->password = bcrypt("12345678");
        $data->level  = "admin";

        $data->save();

    }
}
