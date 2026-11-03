<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
    User::updateOrCreate(
        ['email' => 'vagas@dosen.com'],
        [
            'name'        => 'Vagas Jaidi',
            'password'    => Hash::make('dosen123'),
            'role'        => 'dosen',
            'nomor_induk' => '102042532100',
        ]
    );

    User::updateOrCreate(
        ['email' => 'radaffa@mahasiswa.com'],
        [
            'name'        => 'Radaffa Amarul SUkma',
            'password'    => Hash::make('mahasiswa123'),
            'role'        => 'mahasiswa',
            'nomor_induk' => '102042530035',
        ]
    );
}
}
