<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::create([
        	'name' => 'Satria Bagus',
            'username' => 'sb',
        	'email' => 'satriab@gmail.com',
        	'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Satria Bagus ke2',
            'username' => 'sbsbsbsb',
            'email' => 'satriaaab@gmail.com',
            'password' => bcrypt('password')
        ]);

        Post::create([
            'user_id' => 1,
        	'body' => 'pada zaman dahulu',
        	'slug' => 'pada-zaman',
        	'hastag' => '#cobacoba'
        ]);

        Post::create([
            'user_id' => 1,
            'body' => 'pada zaman dahulu kala',
            'slug' => 'pada-zaman-zaman',
            'hastag' => '#cobainyuk'
        ]);

        Post::create([
            'user_id' => 2,
            'body' => 'pada zaman dahulu kala kala kala kala',
            'slug' => 'pada-zaman-zaman-wkwk',
            'hastag' => '#cobainyukcuy'
        ]);
    }
}
