<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
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
            'name' => 'arie',
            'email' => 'arie@gmail.com',
            'password' => bcrypt('password')
        ]);

        Category::create([
            'name' => 'Furry',
            'slug' => 'furry',
            'thumb' => 'thumb/hitam.jpg'
        ]);
        Category::create([
            'name' => 'Pixel',
            'slug' => 'pixel',
            'thumb' => 'thumb/hitam.jpg'
        ]);
        Category::create([
            'name' => 'Abstrack',
            'slug' => 'abstrack',
            'thumb' => 'thumb/hitam.jpg'
        ]);
    }
}
