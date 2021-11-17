<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama'=>'Muhammad Nuh Hasibuan',
            'jeniskelamin' => 'cowok',
            'notelpon' => '082343089525',

        ]);
    }
}
