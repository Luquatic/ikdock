<?php

use Illuminate\Database\Seeder;

class WinnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('winners')->insert([
        "artist" => 'Lordi',
        "country" => 'Finland',
        "year" => 2006,
        "video" => '/videos/2006.mp4',
      ]);

      DB::table('winners')->insert([
        "artist" => 'Alexander Rybak',
        "country" => 'Norway',
        "year" => 2009,
        "video" => '/videos/2009.mp4',
      ]);

      DB::table('winners')->insert([
        "artist" => 'Loreen',
        "country" => 'Euphoria',
        "year" => 2012,
        "video" => '/videos/2012.mp4',
      ]);

      DB::table('winners')->insert([
        "artist" => 'Duncan Laurence',
        "country" => 'The Netherlands',
        "year" => 2019,
        "video" => '/videos/2019.mp4',
      ]);


    }
}
