<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
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
            DB::table('profiles')->insert([
            	'user_id' => $faker->randomNumber($nbDigits = NULL),
                'field_id' =>$faker->randomNumber($nbDigits = NULL),
                'field_data'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'privacy' => $faker->randomElement($array = array('seeable to self', 'seeable to all')),
                'created_at' => $faker->dateTimeThisCentury($max = 'now'),
                'updated_at' => $faker->dateTimeThisCentury($max = 'now')
            ]);
         
        }
    }
}
