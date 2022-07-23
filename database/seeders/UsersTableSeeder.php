<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();

       $faker = \Faker\Factory::create();

        // Returns always random genders according to the name, inclusive mixed !!
        $gender = $faker->randomElement($array = array('male','female','mixed'));

       // And now, let's create a few articles in our database:
       for ($i = 0; $i < 10; $i++) {
        User::create([
               'name' => $faker->name($gender),
               'email' => $faker->email,
           ]);
       }
    }
}
