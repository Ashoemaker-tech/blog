<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Post::truncate();
        Category::truncate();


        $user = User::factory(1)->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'lorem ipsum dolar sit amet',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis minima fugit obcaecati! Ab provident blanditiis ipsa sit rerum repellendus magnam officia aperiam labore. Nesciunt sunt commodi saepe inventore veritatis tempore labore, quaerat ullam cupiditate expedita aut rerum iste repellendus fuga voluptate temporibus animi unde vel, nulla at obcaecati! Aperiam, praesentium.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work Post',
            'slug' => 'my-second-post',
            'excerpt' => 'lorem ipsum dolar sit amet',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis minima fugit obcaecati! Ab provident blanditiis ipsa sit rerum repellendus magnam officia aperiam labore. Nesciunt sunt commodi saepe inventore veritatis tempore labore, quaerat ullam cupiditate expedita aut rerum iste repellendus fuga voluptate temporibus animi unde vel, nulla at obcaecati! Aperiam, praesentium.'
        ]);
    }
}
