<?php

use App\User\Models\Post;
use App\User\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        factory(Post::class, 5)->create([
            'user_id' => factory(User::class)->create()->id
        ]);
    }
}
