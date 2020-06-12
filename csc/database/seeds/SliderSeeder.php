<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'title' => "CSC Morandini",
            'paragraphe' => "Un plombier chauffagiste qui trouve toutes les solutions à vos besoins",
            'image' => "images/slider.jpg",
        ]);

        DB::table('sliders')->insert([
            'title' => "CSC Morandini - Une intervention rapide pour particuliers et professionnels",
            'paragraphe' => "",
            'image' => "images/slider2.jpg",
        ]);

        DB::table('sliders')->insert([
            'title' => "CSC Morandini - Une équipe dynamique & qualifiée à votre écoute",
            'paragraphe' => "",
            'image' => "images/slider3.jpg",
        ]);
    }
}
