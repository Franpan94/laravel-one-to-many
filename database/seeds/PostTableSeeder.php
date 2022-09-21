<?php

use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 50; $i++){
            $newpost = new Post();
            $newpost->title = $faker->sentence(3);
            $newpost->author = $faker->sentence(2);
            $newpost->post_content = $faker->paragraph(20);
            $newpost->post_image = $faker->imageUrl();
            $newpost->post_date = $faker->dateTime();
            $newpost->save();
        }
    }
}
