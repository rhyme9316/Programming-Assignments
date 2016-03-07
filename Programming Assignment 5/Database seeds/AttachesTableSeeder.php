<?php

use Illuminate\Database\Seeder;

class AttachesTableSeeder extends Seeder
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
            DB::table('attaches')->insert([
                'attach_type' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'user_id' => $faker->randomNumber($nbDigits = NULL),
                'source_id' => $faker->randomNumber($nbDigits = NULL),
                'created_at' => $faker->dateTimeThisCentury($max = 'now'),
                'updated_at' => $faker->dateTimeThisCentury($max = 'now')
            ]);
        }
    }
}
