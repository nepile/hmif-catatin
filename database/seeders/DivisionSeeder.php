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
                'event_id'  => 1,
            ],
            [
                'name'      => 'Humas',
                'event_id'  => 1,
            ],
            [
                'name'      => 'Konsumsi',
                'event_id'  => 1,
            ],
        ]);
    }
}
