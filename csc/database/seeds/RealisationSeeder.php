<?php

use Illuminate\Database\Seeder;

class RealisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('realisations')->insert([
            'title' => "Realisations",
            'texte' => "

            <h3 style='text-align:left;'>Pose d'une salle de bain chez un particulier</h3>
            ",
        ]);

        DB::table('realisations')->insert([
            'title' => "Plomberie",
            'texte' => "

            <h3 style='text-align:left;'>Plomberie</h3>
            ",
        ]);

        DB::table('realisations')->insert([
            'title' => "douche",
            'texte' => "

            <h3 style='text-align:left;'>Pose d'une douche avant / après : Maintien à domicile</h3>
            ",
        ]);

        DB::table('realisations')->insert([
            'title' => "douche_apres",
            'texte' => "",
        ]);

        DB::table('realisations')->insert([
            'title' => "restauration",
            'texte' => "

            <h3 style='text-align:left;'>Restauration d'une salle de bain avant/après : Label HSS (Habitation Sénior Services)</h3>
            ",
        ]);

        DB::table('realisations')->insert([
            'title' => "restauration_apres",
            'texte' => "",
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 1,
            'image_id' => 1,
        ]);
        
        DB::table('image_realisation')->insert([
            'realisation_id' => 1,
            'image_id' => 2,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 1,
            'image_id' => 3,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 1,
            'image_id' => 4,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 1,
            'image_id' => 5,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 2,
            'image_id' => 6,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 2,
            'image_id' => 7,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 2,
            'image_id' => 8,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 2,
            'image_id' => 9,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 2,
            'image_id' => 10,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 2,
            'image_id' => 11,
        ]);
        
        DB::table('image_realisation')->insert([
            'realisation_id' => 3,
            'image_id' => 12,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 3,
            'image_id' => 13,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 3,
            'image_id' => 14,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 3,
            'image_id' => 15,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 3,
            'image_id' => 16,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 3,
            'image_id' => 17,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 3,
            'image_id' => 18,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 4,
            'image_id' => 19,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 4,
            'image_id' => 20,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 5,
            'image_id' => 21,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 5,
            'image_id' => 22,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 5,
            'image_id' => 23,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 5,
            'image_id' => 24,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 5,
            'image_id' => 25,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 6,
            'image_id' => 26,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 6,
            'image_id' => 27,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 6,
            'image_id' => 28,
        ]);

        DB::table('image_realisation')->insert([
            'realisation_id' => 6,
            'image_id' => 29,
        ]);
    }
}
