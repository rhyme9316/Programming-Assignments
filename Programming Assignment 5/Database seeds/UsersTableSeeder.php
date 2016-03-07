<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $limit = 20;
        for($i = 0; $i < $limit; $i++){
            DB::table('users')->insert([
            	'name' => $faker->name($gender = null),
            	'email' => $faker->email,
            	'phone' => $faker->phoneNumber,
            	'sex'=> $faker->randomElement($array = array('male','female')),
            	'password'=> $faker->password,
            	'remember_token' => $faker->slug,
            	'created_at' => $faker->dateTimeThisCentury($max = 'now'),
            	'updated_at' => $faker->dateTimeThisCentury($max = 'now')
            ]);
         
        }
    }
}
