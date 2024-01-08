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
            // bph
            [
                'name'      => 'Albet Christian',
                'nim'       => '235314165',
                'role_id'   => 1,
                'division_id'  => null,
                'gen'       => '2023',
                'password'  => Hash::make('123albet456'),
            ],
            // dept medinfo
            [
                'name'      => 'Neville Jeremy',
                'nim'       => '235314166',
                'role_id'   => 2,
                'division_id'  => null,
                'gen'       => '2023',
                'password'  => Hash::make('123neville456'),
            ],
            // panti / co event
            [
                'name'      => 'Abiansyah',
                'nim'       => '235314167',
                'role_id'   => 3,
                'division_id'  => null,
                'gen'       => '2023',
                'password'  => Hash::make('123abi456'),
            ],
            [
                'name'      => 'Yopi Sadewa',
                'nim'       => '235314168',
                'role_id'   => 3,
                'division_id'  => null,
                'gen'       => '2023',
                'password'  => Hash::make('123yopi456'),
            ],
            // co division
            [
                'name'      => 'Arya Sandi',
                'nim'       => '235314169',
                'role_id'   => 4,
                'division_id'  => 1,
                'gen'       => '2023',
                'password'  => Hash::make('123arya456'),
            ],
            [
                'name'      => 'Fajar Siregar',
                'nim'       => '235314170',
                'role_id'   => 4,
                'division_id'  => 2,
                'gen'       => '2023',
                'password'  => Hash::make('123fajar456'),
            ],
            [
                'name'      => 'Bintang Kurnia',
                'nim'       => '235314171',
                'role_id'   => 4,
                'division_id'  => 3,
                'gen'       => '2023',
                'password'  => Hash::make('123bintang456'),
            ],
        ]);
    }
}
