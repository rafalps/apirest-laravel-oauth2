<?php

use Illuminate\Database\Seeder;
use Tasks\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'teste','email'=>'teste@teste.com','password'=>Hash::make('testte')]);
    }
}
