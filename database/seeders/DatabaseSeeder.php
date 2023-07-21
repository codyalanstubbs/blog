<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $hobby = Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Family is everything!</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus natus porro sapiente numquam nobis perspiciatis cupiditate asperiores doloremque, ea ex expedita nam. Voluptas suscipit quod fugit soluta nam amet voluptatibus?</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Work is everything!</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus natus porro sapiente numquam nobis perspiciatis cupiditate asperiores doloremque, ea ex expedita nam. Voluptas suscipit quod fugit soluta nam amet voluptatibus?</p>'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
