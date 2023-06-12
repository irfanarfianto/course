<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create(['name' => 'Lintang Desy',
            'username' => 'lintangdesy',
            'email' => 'lintang@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('pengajar');

        $user = User::create(['name' => 'Ria Suci',
            'username' => 'riasuci',
            'email' => 'ria@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('siswa');
    }
}
