<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alamin',
            'username' => 'Admin',
            'email'=> 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create ([
            'name' => 'software Developer',
            'slug' => 'software-developer'
        ]);

        Post::factory(20)->create();

    }
}
