<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profile;
class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert(array(
            array(
                'name'=>'Nguyễn Sơn Hà',
                'birthday'=>'1999-12-13',
                'address'=>'Hội An',
                'user_id'=>1
            ),
            array(
                'name'=>'Nguyễn Văn Tịnh',
                'birthday'=>'1999-02-05',
                'address'=>'Huế',
                'user_id'=>2

            ),

        ));
    }
}
