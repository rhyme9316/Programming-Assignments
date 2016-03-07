<?php

use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
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
            DB::table('pictures')->insert([
            	'url' => $faker->imageUrl($width = 640, $height = 480),
                'title' =>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
                'size'=> $faker->word,
                'extension' => $faker->fileExtension
            ]);
         
        }
    }
}
