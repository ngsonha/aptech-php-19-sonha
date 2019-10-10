<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i<3; $i++)
        {
           DB::table('articles')->insert(

   
            ['title'=>$faker->sentence($nbWords = 2, $variableNbWords = true), 'content'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'category_id'=>$faker->randomDigit]
           );
        }
    }
}
