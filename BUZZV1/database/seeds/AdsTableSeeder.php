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
          'title' => 'Asus VP278H',
          'description' => 'Moniteur avec un temps de réponse rapide de 1 ms',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 1,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'Microsoft Surface Pro (i5, 128GB, 4GB)',
          'description' => 'La tablette qui remplace votre ordinateur',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 1,
          'user_id' => 1
      ]);

      DB::table('ads')->insert([
          'title' => 'Mercedes-AMG A 45 4MATIC',
          'description' => 'Confort propice aux performances et sécurité exemplaire.',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 2,
          'user_id' => 2
      ]);
      DB::table('ads')->insert([
          'title' => 'Mercedes-AMG A 45 4MATIC',
          'description' => 'Confort propice aux performances et sécurité exemplaire.',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 2,
          'user_id' => 2
      ]);
      DB::table('ads')->insert([
          'title' => 'Mercedes-AMG A 45 4MATIC',
          'description' => 'Confort propice aux performances et sécurité exemplaire.',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 2,
          'user_id' => 2
      ]);
      DB::table('ads')->insert([
          'title' => 'Mercedes-AMG A 45 4MATIC',
          'description' => 'Confort propice aux performances et sécurité exemplaire.',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 2,
          'user_id' => 2
      ]);
      DB::table('ads')->insert([
          'title' => 'Mercedes-AMG A 45 4MATIC',
          'description' => 'Confort propice aux performances et sécurité exemplaire.',
          'online' => 0,
          'expired' => 0,
          'address' => 'Rue de la rue 6, 2000 Neuchâtel',
          'category_id' => 2,
          'user_id' => 2
      ]);
    }
}
