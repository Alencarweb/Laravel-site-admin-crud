<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'First Post',
                'content' => 'This is the content of the first post.',
                'category_id' => 1,
            ],
            [
                'title' => 'Second Post',
                'content' => 'This is the content of the second post.',
                'category_id' => 1,
            ],
            [
                'title' => 'Third Post',
                'content' => 'This is the content of the third post.',
                'category_id' => 2,
            ],
        ]);
    }
}