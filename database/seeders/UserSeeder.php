<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama'=> 'admin',
            'alamat'=> 'Jl. xxx',
            'telepon'=> '+62',
            'email'=> 'admin@email.com',
            'password'=> Hash::make('admin@123'),
            'jenis'=> 'admin'
        ])
    }
}
