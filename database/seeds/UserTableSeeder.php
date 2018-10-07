<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\en_GB\Person($faker));
        $faker->addProvider(new Faker\Provider\Internet($faker));
        $faker->addProvider(new Faker\Provider\DateTime($faker));

//        $limit = 50000;

        for ($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'amount_of_wages' => rand(8000, 50000),
                'employment_date' =>  $faker->dateTime,
                'email' => $faker->unique()->email,
                'position_id' => 1,
                'password' => bcrypt('secret'),
                'director_id' => 0,
            ]);
        }
        for ($i = 20; $i < 200; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'amount_of_wages' => rand(8000, 50000),
                'employment_date' =>  $faker->dateTime,
                'email' => $faker->unique()->email,
                'position_id' => 2,
                'password' => bcrypt('secret'),
                'director_id' => rand(1,19),
            ]);
        }
        for ($i = 200; $i < 1000; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'amount_of_wages' => rand(8000, 50000),
                'employment_date' =>  $faker->dateTime,
                'email' => $faker->unique()->email,
                'position_id' => 3,
                'password' => bcrypt('secret'),
                'director_id' => rand(20, 199),
            ]);
        }
        for ($i = 1000; $i < 10000; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'amount_of_wages' => rand(8000, 50000),
                'employment_date' =>  $faker->dateTime,
                'email' => $faker->unique()->email,
                'position_id' => rand(4,5),
                'password' => bcrypt('secret'),
                'director_id' => rand(200, 9999),
            ]);
        }

        for ($i = 10000; $i < 50000; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'amount_of_wages' => rand(8000, 50000),
                'employment_date' =>  $faker->dateTime,
                'email' => $faker->unique()->email,
                'position_id' => rand(4,5),
                'password' => bcrypt('secret'),
                'director_id' => rand(1000, 9999),
            ]);
        }
    }
}
