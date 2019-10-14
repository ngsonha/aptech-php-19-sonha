<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create();
        for($i=0;$i<10;$i++)
        {
            Article::insert(
                [
                    "title"=>$faker->sentence($nbWords = 4, $variableNbWords = true),
                    "description"=>$faker->sentence($nbWords = 8, $variableNbWords = true)
                ]
                );
        }
    }
}
