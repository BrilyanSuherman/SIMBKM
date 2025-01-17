<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123456'),
            'role' => '1',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1'
        ]);

        User::create([
            'name' => 'Mahasiswa AB D3',
            'email' => 'mhsw@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '7',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1'
        ]);

        User::create([
            'name' => 'Woodie',
            'email' => 'woodiechek@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '1',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1'
        ]);

        User::create([
            'name' => 'Professor Albert Einstein',
            'email' => 'einstein@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '4',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1'
        ]);

        User::create([
            'name' => 'KPS',
            'email' => 'kps@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '3',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1'
        ]);

        User::create([
            'name' => 'Pembimbing Industri',
            'email' => 'pi@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '6',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1'
        ]);

        User::create([
            'name' => 'Pembimbing Akademik',
            'email' => 'pa@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '5',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1'
        ]);

        User::create([
            'name' => 'Wadir',
            'email' => 'wadir@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '2',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1'
        ]);
    }
}
