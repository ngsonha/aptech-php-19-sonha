<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'email'=>'ha@gmail.com',
                'password'=>12345

            ),
            array(
                'email'=>'ting@gmail.com',
                'password'=>12345

            ),

        ));
    }
}
