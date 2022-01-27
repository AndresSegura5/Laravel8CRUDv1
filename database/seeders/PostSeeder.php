<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // \App\Models\User::factory(10)->create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->name,
                'body' => $faker->realText(50),
                'image' => $faker->imageUrl(),
            ]);
        }
    }
}
