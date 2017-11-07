<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ads')->insert([
          'title' => 'PlayStation 4',
          'description' => 'PlayStation 4 neuve en location quand vous voulez',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 1,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'PlayStation 4',
          'description' => 'PlayStation 4 neuve en location quand vous voulez',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 1,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'PlayStation 4',
          'description' => 'PlayStation 4 neuve en location quand vous voulez',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 1,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'PlayStation 4',
          'description' => 'PlayStation 4 neuve en location quand vous voulez',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 1,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'PlayStation 4',
          'description' => 'PlayStation 4 neuve en location quand vous voulez',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 1,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'PlayStation 4',
          'description' => 'PlayStation 4 neuve en location quand vous voulez',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 2,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'PlayStation 4',
          'description' => 'PlayStation 4 neuve en location quand vous voulez',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 2,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'PlayStation 4',
          'description' => 'PlayStation 4 neuve en location quand vous voulez',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 3,
          'user_id' => 1
      ]);
    }
}
