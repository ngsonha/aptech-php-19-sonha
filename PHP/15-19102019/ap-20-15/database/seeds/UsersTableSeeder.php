<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create();
        $roleIds = Role::get()->pluck('id');
        $roleIds = [1,2, 3,];
        for($i=0;$i<10;$i++)
        {
            User::create([
                "name"=>$faker->lastname,
                "email"=>$faker->email,
                "password"=>12345,
                "role_id"=>array_random($roleIds)
            ]);
        }
    }
}
