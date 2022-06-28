<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('posts')->insert([
                'user_id' => rand(1, 50),
                'title' => $faker->sentence,
                'content' => $faker->sentence,
                'created_at' =>  $faker->dateTimeThisDecade
            ]);
        }
    }
}
