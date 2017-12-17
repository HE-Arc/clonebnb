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
      DB::table('users')->insert([
          'first_name' => 'UserTest',
          'last_name' => 'LastName',
          'phone' => '123456789',
          'email' => 'UserTest@gmail.com',
          'password' => bcrypt('123456'),
          'username' => 'test',
          'description' => 'blablabla',
          'photo' => 'default.png',
          'pin_code' => '',
          'address' => 'Neuchatel, Rue de He-Arc',
          'sex' => null,
          'date' => null,
          'is_confirmed' => 0,
          'language' => null,
          'is_activated' => 0,
          'facebook_id' => null,
          'cgu' => 0,
          'remember_token' => null
      ]);
      DB::table('users')->insert([
          'first_name' => 'Charles',
          'last_name' => 'Dupont',
          'phone' => '987654321',
          'email' => 'charles@gmail.com',
          'password' => bcrypt('123456'),
          'username' => 'charlesTest',
          'description' => 'blablabla',
          'photo' => 'default.png',
          'pin_code' => '',
          'address' => 'Neuchatel, Rue de He-Arc',
          'sex' => null,
          'date' => null,
          'is_confirmed' => 0,
          'language' => null,
          'is_activated' => 0,
          'facebook_id' => null,
          'cgu' => 0,
          'remember_token' => null
      ]);
    }
}
