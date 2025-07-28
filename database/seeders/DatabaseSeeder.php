<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'admin',
            'nis' => '123456789000',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'jenis_kelamin' => 'pria',
            'alamat'=>'jl. kenanga',
            'kelas'=>'6',
            'nomor_hp' => '086969123123',
            'tgl_lahir'=> '1985-09-17',
            'password' => bcrypt('password'),
            'status' => 'admin'
        ]);
     
        User::factory(50)->create();

        Category::create([
            'name' => 'Web-Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Game-Programming',
            'slug' => 'game-programming'
        ]);

        Category::create([
            'name' => 'Literature',
            'slug' => 'literature'
        ]);
        Category::create([
            'name' => 'Mathematics',
            'slug' => 'mathematics'
        ]);
        Category::create([
            'name' => 'Religion',
            'slug' => 'religion'
        ]);
        Category::create([
            'name' => 'Applied-Arts',
            'slug' => 'applied-arts'
        ]);
        Category::create([
            'name' => 'Science',
            'slug' => 'science'
        ]);
        Category::create([
            'name' => 'Social-studies',
            'slug' => 'social-studies'
        ]);
        Category::create([
            'name' => 'Natural-Sciences',
            'slug' => 'natural-sciences'
        ]);
        Category::create([
            'name' => 'Physical-Education',
            'slug' => 'physical-education'
        ]);

        Post::factory(100)->create();

    }
}
