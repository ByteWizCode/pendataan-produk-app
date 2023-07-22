<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'admin',
                'jenis_kelamin' => null,
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('Password123!'),
                'role' => 'admin',
            ],
            [
                'nama' => 'staff1',
                'jenis_kelamin' => 'P',
                'email' => 'staff1@gmail.com',
                'password' => \Hash::make('Password123!'),
                'role' => 'staff',
            ],
            [
                'nama' => 'staff2',
                'jenis_kelamin' => 'L',
                'email' => 'staff2@gmail.com',
                'password' => \Hash::make('Password123!'),
                'role' => 'staff',
            ],
            [
                'nama' => 'pelanggan test',
                'jenis_kelamin' => 'L',
                'email' => 'pelanggan@gmail.com',
                'password' => \Hash::make('Password123!'),
                'role' => 'pelanggan',
            ],
        ]);
    }
}
