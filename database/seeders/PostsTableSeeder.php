<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Xóa dữ liệu cũ trong bảng trước khi thêm dữ liệu mới (tùy chọn)
        // Post::truncate();
        // Thêm dữ liệu vào bảng posts
        Post::create([
            'title' => 'First Post',
            'description' => 'This is the first post description.',
            'image' => 'first_post.jpg',
            'status' => 1,
        ]);

        Post::create([
            'title' => 'Second Post',
            'description' => 'This is the second post description.',
            'image' => 'second_post.jpg',
            'status' => 1,
        ]);

    }
}
