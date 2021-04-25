<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 26; $i++) { 
          Article::create([
            'title' =>'The',
            'subtitle' =>'End',
            'content' =>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis assumenda harum illo quod obcaecati quidem in, omnis adipisci explicabo officia nemo nisi incidunt laudantium provident odio iusto architecto libero animi!'
           
        ]);  
        }
        
    }
}
