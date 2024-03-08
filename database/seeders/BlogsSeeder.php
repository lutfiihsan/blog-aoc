<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'inputed_by' => 2,
                'category_id' => 9,
                'slug' => Str::slug('Hello World'),
                'title' => 'Hello World',
                'content' => 'Hello World',
                'image' => 'hello-world.jpg',
                'status' => 'published',
            ],
            [
                'inputed_by' => 2,
                'category_id' => 9,
                'slug' => Str::slug('Hello World 2'),
                'title' => 'Hello World 2',
                'content' => 'Hello World 2',
                'image' => 'hello-world-2.jpg',
                'status' => 'published',
            ]
        ];

        foreach ($blogs as $blog) {
            \App\Models\Blog::create($blog);
        }
    }
}
