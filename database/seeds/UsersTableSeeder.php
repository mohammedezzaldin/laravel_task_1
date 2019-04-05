<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
           'name' => 'Admin',
            'password' => bcrypt('123456'),
            'email' => 'mohammedezz@gmail.com',
            'admin' => 1
        ]);
    }
}
