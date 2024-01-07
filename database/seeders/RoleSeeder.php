<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name'     => 'Badan Pengurus Harian'], // 1
            ['name'     => 'Departemen Media Informasi'], // 2
            ['name'     => 'CO Event / Panitia Inti'], // 3
            ['name'     => 'Division Coordinator'], // 4
        ]);
    }
}
