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
                'id' => Str::uuid(),
                'slug' => 'first-blog',
                'title' => 'First Blog',
                'content' => 'This is the first blog content',
                'created_by' => 'admin',
                'input_by' => 'admin',
                'status' => 'published',
            ], // Add more blogs here until 10
            [
                'id' => Str::uuid(),
                'slug' => 'second-blog',
                'title' => 'Second Blog',
                'content' => 'This is the second blog content',
                'created_by' => 'admin',
                'input_by' => 'admin',
                'status' => 'published',
            ],
            [
                'id' => Str::uuid(),
                'slug' => 'third-blog',
                'title' => 'Third Blog',
                'content' => 'This is the third blog content',
                'created_by' => 'admin',
                'input_by' => 'admin',
                'status' => 'published',
            ],
            [
                'id' => Str::uuid(),
                'slug' => 'fourth-blog',
                'title' => 'Fourth Blog',
                'content' => 'This is the fourth blog content',
                'created_by' => 'admin',
                'input_by' => 'admin',
                'status' => 'published',
            ],
            [
                'id' => Str::uuid(),
                'slug' => 'fifth-blog',
                'title' => 'Fifth Blog',
                'content' => 'This is the fifth blog content',
                'created_by' => 'admin',
                'input_by' => 'admin',
                'status' => 'published',
            ],
            [
                'id' => Str::uuid(),
                'slug' => 'sixth-blog',
                'title' => 'Sixth Blog',
                'content' => 'This is the sixth blog content',
                'created_by' => 'admin',
                'input_by' => 'admin',
                'status' => 'published',
            ],
            [
                'id' => Str::uuid(),
                'slug' => 'seventh-blog',
                'title' => 'Seventh Blog',
                'content' => 'This is the seventh blog content',
                'created_by' => 'admin',
                'input_by' => 'admin',
                'status' => 'published',
            ],
            [
                'id' => Str::uuid(),
                'slug' => 'eighth-blog',
                'title' => 'Eighth Blog',
                'content' => 'This is the eighth blog content',
                'created_by' => 'admin',
                'input_by' => 'admin',
                'status' => 'published',
            ],
        ];

        foreach ($blogs as $blog) {
            \App\Models\Blog::create($blog);
        }
    }
}
