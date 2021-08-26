<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comments;
use Illuminate\Support\Str;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comments::insert([
            [
                'id' => 1,
                'post_id' => 2,
                'message' => Str::random(10),
            ],
            [
                'id' => 2,
                'post_id' => 2,
                'message' => Str::random(10),
            ],
            [
                'id' => 3,
                'post_id' => 2,
                'message' => Str::random(10),
            ],
            [
                'id' => 4,
                'post_id' => 3,
                'message' => 'First Comment',
            ],
            [
                'id' => 5,
                'post_id' => 3,
                'message' => 'Second Comment',
            ],
            [
                'id' => 6,
                'post_id' => 5,
                'message' => Str::random(10),
            ],
        ]);
    }
}
