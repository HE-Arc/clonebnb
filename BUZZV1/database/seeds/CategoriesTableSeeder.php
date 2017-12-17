<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
          'name' => 'Informatique',
          'description' => 'Location du matériel informatique. Ordinateur, souris, clavier...',
          'icon' => "macbook",
      ]);

      DB::table('categories')->insert([
          'name' => 'Véhicule',
          'description' => 'Location de véhicules de tout type.',
          'icon' => "car",
      ]);

      DB::table('categories')->insert([
          'name' => 'Outils',
          'description' => 'Locations d\'outils pour travaux',
          'icon' => "repair-tools",
      ]);

      DB::table('categories')->insert([
          'name' => 'Ski',
          'description' => 'Locations de matériel de ski',
          'icon' => "ski",
      ]);

      DB::table('categories')->insert([
          'name' => 'Piscine',
          'description' => 'Locations de piscine gonflable, ou mise en location d\'une piscine réelle',
          'icon' => "step-ladder",
      ]);

      DB::table('categories')->insert([
          'name' => 'Musique',
          'description' => 'Locations de matériels liés à la musique',
          'icon' => "headphones",
      ]);

      DB::table('categories')->insert([
          'name' => 'Sport',
          'description' => 'Locations d\'articles de sport',
          'icon' => "basketball-jersey",
      ]);

      DB::table('categories')->insert([
          'name' => 'Jeux Vidéos',
          'description' => 'Locations de consoles de jeux vidéos',
          'icon' => "gamepad",
      ]);

      DB::table('categories')->insert([
          'name' => 'Chambre pour séjour',
          'description' => 'Locations de chambres',
          'icon' => "bed",
      ]);

      DB::table('categories')->insert([
          'name' => 'Autres',
          'description' => 'Locations diverses',
          'icon' => "dot",
      ]);
    }
}
