<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Story;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('story_tag')->delete();
        DB::table('tags')->delete();

       
        $tagLove = Tag::create( array(
            'id'  => 1,
            'value' => 'Love'
        ));
        $tagComedy = Tag::create(array(
            'id' => 2,
            'value' => 'comedy'
        ));

        $tagCrime = Tag::create(array(
            'id' => 3,
            'value' => 'crime'
        ));

        $tagThriller = Tag::create(array(
            'id' => 4,
            'value' => 'thriller'
        ));

        $this->command->info('seeding finished for tags and story_tag!');  
        $stories = App\Story::get();
        
        foreach($stories as $story)
        {
            $this->command->info($story->id);
            $tag_ids = array(1,2,3,4);
            $story->tags()->attach($tag_ids);        
        }    

        $this->command->info('seeding finished for tags and story_tag!');  
    }


}
