<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create categories
        factory(App\Fly01\Models\Blog\Category::class, 6)->create()->each(function ($category) {
            // create posts and save relations
            $category->posts()->saveMany(
                factory(App\Fly01\Models\Blog\Post::class, 5)->create()->each(function ($post) {
                    // create comment
                    $post->comments()->saveMany(
                        factory(App\Fly01\Models\Blog\Comment::class, 2)->create()
                    );
                    // create tags
                    $post->tags()->sync(
                        factory(App\Fly01\Models\Blog\Tag::class, 2)->create()->pluck('id')->toArray()
                    );
                })
            );
        });

        // friend links
        factory(App\Fly01\Models\Blog\Link::class, 5)->create();
    }
}
