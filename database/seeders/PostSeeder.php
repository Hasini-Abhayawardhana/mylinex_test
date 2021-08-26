<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            [
                'id' => 1,
                'description' => 'First Post',
            ],
            [
                'id' => 2,
                'description' => 'Second Post',
            ],
            [
                'id' => 3,
                'description' => 'Third Post',
            ],
            [
                'id' => 4,
                'description' => 'Fourth Post',
            ],
            [
                'id' => 5,
                'description' => 'Fifth Post',
            ]
        ]);
    }
}
