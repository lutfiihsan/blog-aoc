<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $categories = [
            [
                'category_name' => 'PHP',
                'slug' => 'php',
            ],
            [
                'category_name' => 'Laravel',
                'slug' => 'laravel',
            ],
            [
                'category_name' => 'JavaScript',
                'slug' => 'javascript',
            ],
            [
                'category_name' => 'React JS',
                'slug' => 'react-js',
            ],
            [
                'category_name' => 'Next JS',
                'slug' => 'next-js',
            ],
            [
                'category_name' => 'Firebase',
                'slug' => 'firebase',
            ],
            [
                'category_name' => 'CSS',
                'slug' => 'css',
            ],
            [
                'category_name' => 'Tailwind CSS',
                'slug' => 'tailwind-css',
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
