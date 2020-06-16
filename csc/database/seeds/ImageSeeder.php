<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'title' => "salle de bain",
            'src' => "images/gallerie/1_001g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "salle de bain",
            'src' => "images/gallerie/1_002g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "salle de bain",
            'src' => "images/gallerie/1_003g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "salle de bain",
            'src' => "images/gallerie/1_004g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "salle de bain",
            'src' => "images/gallerie/1_005g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "plomberie",
            'src' => "images/gallerie/2_001g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "plomberie",
            'src' => "images/gallerie/2_007g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "plomberie",
            'src' => "images/gallerie/2_003g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "plomberie",
            'src' => "images/gallerie/2_004g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "plomberie",
            'src' => "images/gallerie/2_005g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "plomberie",
            'src' => "images/gallerie/2_006g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche",
            'src' => "images/gallerie/3_001g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche",
            'src' => "images/gallerie/3_005g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche",
            'src' => "images/gallerie/3_003g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche",
            'src' => "images/gallerie/3_002g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche",
            'src' => "images/gallerie/3_006g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche",
            'src' => "images/gallerie/3_004g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche",
            'src' => "images/gallerie/3_007g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche aprés",
            'src' => "images/gallerie/3_008g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "douche aprés",
            'src' => "images/gallerie/3_009g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration",
            'src' => "images/gallerie/4_001g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration",
            'src' => "images/gallerie/4_002g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration",
            'src' => "images/gallerie/4_003g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration",
            'src' => "images/gallerie/4_004g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration",
            'src' => "images/gallerie/4_007g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration aprés",
            'src' => "images/gallerie/4_009g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration aprés",
            'src' => "images/gallerie/4_010g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration aprés",
            'src' => "images/gallerie/4_011g.jpg",
        ]);

        DB::table('images')->insert([
            'title' => "restauration aprés",
            'src' => "images/gallerie/4_012g.jpg",
        ]);
    }
}
