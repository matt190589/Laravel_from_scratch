<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $fun = Category::create([
            'name' => 'Fun',
            'slug' => 'fun'
        ]);

        $professional = Category::create([
            'name' => 'Professional',
            'slug' => 'professional'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $fun->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>All about my wicked family and their vibe</p>',
            'body' => '<p>What a lovely bunch of coconuts. You need to meet them all to find out more</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $professional->id,
            'title' => 'My Professional Post',
            'slug' => 'my-second-post',
            'excerpt' => '<p>All about my worklife</p>',
            'body' => '<p>What a lovely bunch of coconuts. You need to meet them all to find out more</p>'
        ]);
    }
}
