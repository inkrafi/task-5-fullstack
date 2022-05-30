<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('articles')->insert([
                'title' => $faker->text(30),
                'content' => $faker->text(300),
                'image' => $faker->image(),
                'user_id' => $faker->randomNumber(),
                'category_id' => $faker->randomNumber()
            ]);
        };
    }
}
