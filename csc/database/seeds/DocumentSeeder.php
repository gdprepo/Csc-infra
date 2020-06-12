<?php

use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([
            'title' => "Attestation d'assurance",
            'src' => "images/ATTESTATION-2020-CSC-MORANDINI-CHAUFFAGES-SANITAIRE.pdf",
        ]);

        DB::table('documents')->insert([
            'title' => "Certificat d'identité professionnelle des entreprises artisanales du batiment",
            'src' => "images/csc_identite_pro.pdf",
        ]);

        DB::table('documents')->insert([
            'title' => "Attestation d'assurance Responsabilité décennale",
            'src' => "images/ATTESTATION-2020-CSC-MORANDINI-CHAUFFAGES-SANITAIRE.pdf",
        ]);

        DB::table('documents')->insert([
            'title' => "Appellation professionnel du Gaz",
            'src' => "images/csc_appellation_gaz_2020.pdf",
        ]);

        DB::table('documents')->insert([
            'title' => "Certificat Qualibat 2019",
            'src' => "images/CERTIFICAT-QUALIBAT-2019-2020.jpg",
        ]);

        DB::table('documents')->insert([
            'title' => "Certificat Qualibat 'RGE' 2019",
            'src' => "images/CERTIFICAT-RGE-2019-2020.jpg",
        ]);

        DB::table('documents')->insert([
            'title' => "Attestation de validation des connaissances Gaz",
            'src' => "images/csc_attestation_validation_connaissances_gaz.pdf",
        ]);
    }
}
