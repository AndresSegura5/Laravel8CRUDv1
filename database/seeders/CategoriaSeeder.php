<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('categorias')->insert([
                'nombre' => $faker->name,
                'descripcion' => $faker->realText(50),
                'imagen' => $faker->imageUrl(),
            ]);
        }
        //
    }
}
