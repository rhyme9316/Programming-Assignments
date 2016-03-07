<?php

use Illuminate\Database\Seeder;

class ProfileSettingsTableSeeder extends Seeder
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
            DB::table('profileSettings')->insert([
            	'field_name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'visiable' => $faker->randomElement($array = array('true', 'false')),
                'editable'=> $faker->randomElement($array = array('true', 'false')),
                'required' => $faker->randomElement($array = array('true', 'false')),
                'form_type' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'form_default_value'=> $faker->sentence($nbWords = 3, $variableNbWords = true),
                'validation' => $faker->password,
                'tips' => $faker->sentence($nbWords = 10, $variableNbWords = true),
                'created_at' => $faker->dateTimeThisCentury($max = 'now'),
                'updated_at' => $faker->dateTimeThisCentury($max = 'now')
            ]);
         
        }
    }
}
