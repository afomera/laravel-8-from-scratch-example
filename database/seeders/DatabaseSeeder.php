<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Andrea Fomera',
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);

//         $user = User::factory()->create();

//         $personal = Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal',
//         ]);

//         $work = Category::create([
//             'name' => 'Work',
//             'slug' => 'work',
//         ]);

//         $hobbies = Category::create([
//             'name' => 'Hobbies',
//             'slug' => 'hobbies',
//         ]);

//         $lorem_ipsum_paragraph = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien
//   ipsum, vehicula eget euismod eu, vehicula porttitor elit. Vestibulum molestie
//   erat vel arcu facilisis lacinia. Etiam non lorem a nisi mollis imperdiet.
//   Praesent mollis justo non justo scelerisque, non molestie est commodo. In hac
//   habitasse platea dictumst. Morbi semper dignissim neque, eget iaculis mi
//   pharetra id. Etiam pretium aliquam erat, volutpat luctus massa pellentesque
//   et. Maecenas convallis sed tortor nec lacinia. Mauris feugiat quam id nunc
//   imperdiet, vitae semper dui varius. Quisque consequat aliquam est nec tempus.
//   Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin fringilla
//   dapibus felis, non condimentum felis ullamcorper nec. In vulputate odio mi, ut
//   iaculis nisi molestie efficitur. Nulla facilisi. Vivamus at accumsan lacus,
//   quis dapibus libero. Curabitur sapien justo, commodo nec porta sed, imperdiet
//   nec libero. Donec nisl est, varius non vestibulum bibendum, viverra at magna.
//   Cras malesuada ex turpis, ac malesuada ipsum finibus at. Donec tempor, nulla
//   vitae malesuada facilisis, urna libero tincidunt erat, sit amet vehicula metus
//   dolor in nisi. Duis sagittis arcu ut nibh pretium pulvinar.</p>";

//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $personal->id,
//             'title' => 'My Person post',
//             'slug' => 'my-personal-post',
//             'excerpt' => '<p>This is my first post</p>',
//             'body' => $lorem_ipsum_paragraph,
//         ]);

//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $work->id,
//             'title' => 'My Work post',
//             'slug' => 'my-work-post',
//             'excerpt' => '<p>This is my second post</p>',
//             'body' => $lorem_ipsum_paragraph,
//         ]);

//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $hobbies->id,
//             'title' => 'My Hobbies post',
//             'slug' => 'my-hobbies-post',
//             'excerpt' => '<p>This is my third post</p>',
//             'body' => $lorem_ipsum_paragraph,
//         ]);

        // \App\Models\Post::factory(10)->create();
    }
}
