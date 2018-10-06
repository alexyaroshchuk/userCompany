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

        $limit = 50000;

        for ($i = 0; $i < 5; $i++) {
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
        for ($i = 5; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'amount_of_wages' => rand(8000, 50000),
                'employment_date' =>  $faker->dateTime,
                'email' => $faker->unique()->email,
                'position_id' => rand(2, 3),
                'password' => bcrypt('secret'),
                'director_id' => rand(1,5),
            ]);
        }
        for ($i = 20; $i < 100; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'amount_of_wages' => rand(8000, 50000),
                'employment_date' =>  $faker->dateTime,
                'email' => $faker->unique()->email,
                'position_id' => rand(4, 5),
                'password' => bcrypt('secret'),
                'director_id' => rand(6, 20),
            ]);
        }
    }
}
