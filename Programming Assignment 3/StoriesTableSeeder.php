<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
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
            DB::table('stories')->insert([
                'title' => $faker->sentence($nbWords = 6),
                'story' => $faker->paragraph($nmSentences = 5),
                'published'=> $faker->randomElement($array = array(true,false))
            ]);
         
        }
    }
}
