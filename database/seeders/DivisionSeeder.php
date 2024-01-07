<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisions')->insert([
            [
                'name'      => 'Acara',
                'coor_id'   => 5,
                'event_id'  => 1,
            ],
            [
                'name'      => 'Humas',
                'coor_id'   => 6,
                'event_id'  => 1,
            ],
            [
                'name'      => 'Konsumsi',
                'coor_id'   => 7,
                'event_id'  => 1,
            ],
        ]);
    }
}
