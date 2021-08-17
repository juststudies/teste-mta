<?php

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
        $fake = Faker::create();
        $gender = $fake->randomElement(['male', 'female']);

        foreach(range(1, 100) as $index){
            DB::table('users')->insert([
                'name'=> $fake->name($gender),
                'username'=> $fake->username,
                'password'=> $fake->password
            ]);
        }
    }
}
