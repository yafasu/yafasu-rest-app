<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $faker = \Faker\Factory::create();

        DB::table('users')->insert([
            'first_name' => 'Yafa',
            'last_name' => 'Su',
            'username' => 'yafasu',
            'email' => 'yafasu32@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => 'tesla*001',
            'created_at' => Carbon::now()
        ]);

        for ($i = 0; $i < 49; $i++) {
            DB::table('users')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'username' => $faker->userName,
                'email' => $faker->email,
                'email_verified_at' => $faker->dateTimeThisDecade,
                'password' => $faker->password,
                'created_at' => $faker->dateTimeThisDecade
            ]);
        }
    }
}
