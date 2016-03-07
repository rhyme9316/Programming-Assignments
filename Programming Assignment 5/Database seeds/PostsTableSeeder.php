<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
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
            DB::table('posts')->insert([
                'user_id' => $faker->randomNumber($nbDigits = NULL),
                'title' => $faker->sentence($nb = 10,$varaibleNbWords = true),
                'content'=> $faker->text($maxNbChars = 1000),
                'post_time'=> $faker->dateTimeThisCentury($max = 'now'),
                'reply_count' => $faker->randomNumber($nbDigits = NULL),
                'read_count'=> $faker->randomNumber($nbDigits = NULL),
                'attach_id'=> $faker->randomNumber($nbDigits = NULL),
                'created_at'=> $faker->dateTimeThisCentury($max = 'now'),
                'updated_at'=> $faker->dateTimeThisCentury($max = 'now')
            ]);
         
        }
    }
}
