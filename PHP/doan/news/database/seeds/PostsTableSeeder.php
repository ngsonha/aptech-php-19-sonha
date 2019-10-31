<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Facades\DB;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(array(
            array(
                'title'=>'o la la ',
                'description'=>'hot ',
                'image'=>'link1',
                'content'=>'hot girl cosplay thàng tiên nữ oh lala thích quá đi',
                'so_like'=>5,
                'slug'=>'tiên nữ 18',
                'user_id'=>1,
                'category_id'=>1

            ),
            array(
                'title'=>'o haha',
                'description'=>'colde ',
                'image'=>'link',
                'content'=>'hot girl của làng đại học xây dựng',
                'so_like'=>10,
                'slug'=>'xây dựng',
                'user_id'=>1,
                'category_id'=>2
            )


        ));
    }
}
