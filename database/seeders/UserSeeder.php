<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'      => 'Neville Jeremy',
                // 'nim'       => '235314166',
                'role_id'   => 1,
                'division_id'  => null,
                'gen'       => '2023',
                'password'  => Hash::make('123neville456'),
            ],
            // co division
            [
                'name'      => 'Lery',
                // 'nim'       => '235314169',
                'role_id'   => 2,
                'division_id'  => 1,
                'gen'       => '2023',
                'password'  => Hash::make('itdays_lery'),
            ],
            [
                'name'      => 'Bobby',
                // 'nim'       => '235314170',
                'role_id'   => 2,
                'division_id'  => 2,
                'gen'       => '2023',
                'password'  => Hash::make('itdays_bobby'),
            ],
            [
                'name'      => 'Yulita',
                // 'nim'       => '235314171',
                'role_id'   => 2,
                'division_id'  => 3,
                'gen'       => '2023',
                'password'  => Hash::make('itdays_yulita'),
            ],
            [
                'name'      => 'Bayu',
                // 'nim'       => '235314171',
                'role_id'   => 2,
                'division_id'  => 4,
                'gen'       => '2023',
                'password'  => Hash::make('itdays_bayu'),
            ],
            [
                'name'      => 'Reva',
                // 'nim'       => '235314171',
                'role_id'   => 2,
                'division_id'  => 5,
                'gen'       => '2023',
                'password'  => Hash::make('itdays_reva'),
            ],
            [
                'name'      => 'Jordan',
                // 'nim'       => '235314171',
                'role_id'   => 2,
                'division_id'  => 6,
                'gen'       => '2023',
                'password'  => Hash::make('itdays_jordan'),
            ],
            [
                'name'      => 'Adelin',
                // 'nim'       => '235314171',
                'role_id'   => 2,
                'division_id'  => 7,
                'gen'       => '2023',
                'password'  => Hash::make('itdays_adelin'),
            ],
            [
                'name'      => 'Albet',
                // 'nim'       => '235314171',
                'role_id'   => 2,
                'division_id'  => 8,
                'gen'       => '2023',
                'password'  => Hash::make('itdays_albet'),
            ],
        ]);
    }
}
