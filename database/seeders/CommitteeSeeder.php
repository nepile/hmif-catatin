<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('committees')->insert([
            [
                'full_name'     => 'Danu Christoper',
                'nim'           => '235314200',
                'gen'           => '2023',
            ],
            [
                'full_name'     => 'Calvin Sipin',
                'nim'           => '235314201',
                'gen'           => '2023',
            ],
            [
                'full_name'     => 'Alfa Hans',
                'nim'           => '235314202',
                'gen'           => '2023',
            ],
        ]);
    }
}
