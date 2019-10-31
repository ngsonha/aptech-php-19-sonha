<?php

use Illuminate\Database\Seeder;
use App\Comment;
use Illuminate\Support\Facades\DB;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('comments')->insert(array(
            array(
                'content'=>'hay vl',
                'user_id'=>1,
                'post_id'=>2
            ),
        
    ));
    }
}
