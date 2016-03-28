<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('locations')->delete();
        $faker = Faker\Factory::create();
        $limit = 10;
        for($i = 0; $i < $limit; $i++){
           DB::table('locations')->insert([ //,
               'value' => $faker->city.','.$faker->stateAbbr,
           ]);
        }
        $this->command->info('seeding finished for locations!');
    }
}