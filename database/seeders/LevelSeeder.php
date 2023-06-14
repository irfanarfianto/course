<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            [
                'name' => 'Beginner',
                'description' => 'This is the beginner level.',
            ],
            [
                'name' => 'Intermediate',
                'description' => 'This is the intermediate level.',
            ],
            [
                'name' => 'Advanced',
                'description' => 'This is the advanced level.',
            ],
        ];

        // Loop melalui data dan simpan ke dalam tabel "levels"
        foreach ($levels as $level) {
            Level::create($level);
        }
    }
}
