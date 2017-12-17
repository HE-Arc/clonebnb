<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('media')->insert([
          'name' => 'Asus-VP278H.jpg',
          'ad_id' => '1'
      ]);
      DB::table('media')->insert([
          'name' => 'Microsoft-Surface-Pro-i5-128GB-4GB-.jpg',
          'ad_id' => '2'
      ]);
      DB::table('media')->insert([
          'name' => 'mercedesA.jpeg',
          'ad_id' => '3'
      ]);
      DB::table('media')->insert([
          'name' => 'mercedesA.jpeg',
          'ad_id' => '4'
      ]);
      DB::table('media')->insert([
          'name' => 'mercedesA.jpeg',
          'ad_id' => '5'
      ]);
      DB::table('media')->insert([
          'name' => 'mercedesA.jpeg',
          'ad_id' => '6'
      ]);
      DB::table('media')->insert([
          'name' => 'mercedesA.jpeg',
          'ad_id' => '7'
      ]);
    }
}
