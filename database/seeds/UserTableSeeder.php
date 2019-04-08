<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $password=bcrypt('Admin2019*');
        DB::table('users')->insert(['name'=>'Admin',
            'email'=>'admin@geysel.cu','password'=>$password]);
    }
}
