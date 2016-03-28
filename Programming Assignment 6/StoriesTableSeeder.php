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
        DB::table('stories')->delete();
        $faker = Faker\Factory::create();

        $limit = 20;
        for($i = 0; $i < $limit; $i++){
            DB::table('stories')->insert([
                'title' => $faker->sentence($nbWords = 6),
                'story' => $faker->paragraph($nmSentences = 5),
                'location_id' => (($faker->randomNumber($nbDigits = 2)) % 10 + 1),
                //'location_id'=>$faker->randomElement($array = array(1,2,3,4,5,6,7,8,9,10)),
                'published'=> $faker->randomElement($array = array(true,false))
            ]);
         
        }
        $this->command->info('seeding finished for stories!');
    }
}
