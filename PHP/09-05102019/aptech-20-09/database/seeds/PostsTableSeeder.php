<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //luu y 
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i<10; $i++)
        {
           DB::table('posts')->insert(

            ['title'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'descripton'=>$faker->sentence($nbWords = 10, $variableNbWords = true)]
           );
        }
    }
}
