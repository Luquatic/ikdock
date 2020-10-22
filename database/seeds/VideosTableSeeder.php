<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
          "video" => '/videos/2006.mp4',
          "description" => 'Finalds winning song',
        ]);

        DB::table('videos')->insert([
          "video" => '/videos/2009.mp4',
          "description" => 'Norway winning song',
        ]);

        DB::table('videos')->insert([
          "video" => '/videos/2012.mp4',
          "description" => 'Sweden winning song',
        ]);

        DB::table('videos')->insert([
          "video" => '/videos/2019.mp4',
          "description" => 'Duncan Laurence Winning song :D!',
        ]);



    }
}
