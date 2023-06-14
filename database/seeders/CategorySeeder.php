<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'name' => 'Development',
                'slug' => 'development',
            ],
            [
                'name' => 'Design',
                'slug' => 'design',
            ],
            [
                'name' => 'Marketing',
                'slug' => 'marketing',
            ],
            [
                'name' => 'Music',
                'slug' => 'music',
            ],
            [

                'name' => 'Videography',
                'slug' => 'videography',
            ],
            [
                'name' => 'Photography',
                'slug' => 'photography',
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
            ],
            [
                'name' => 'Health & Fitness',
                'slug' => 'health-fitness',
            ],
        ];

        foreach ($category as $category) {
            Category::create($category);
        }
    }
}
