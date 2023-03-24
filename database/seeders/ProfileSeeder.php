<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'nim' => '2141720230',
            'nama' => 'Ilham Khalis Putra Agatha',
            'jurusan' => 'D4-TI',
            'kelas' => '2H',
            'absen' => 12,
            'jk' => 'L'
        ]);
    }
}
