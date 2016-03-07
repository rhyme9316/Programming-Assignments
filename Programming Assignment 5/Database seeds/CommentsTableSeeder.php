<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
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
            DB::table('comments')->insert([
            	'post_id' => $faker->randomNumber($nbDigits = NULL),
                'user_id' =>$faker->randomNumber($nbDigits = NULL),
                'to_comment_user_id' => $faker->randomNumber($nbDigits = NULL),
                'content'=> $faker->text($maxNbChars = 200),
                'created_at' => $faker->dateTimeThisCentury($max = 'now'),
                'updated_at' => $faker->dateTimeThisCentury($max = 'now'),
                'attach_id' => $faker->randomNumber($nbDigits = NULL)
            ]);
         
        }
    }
}
