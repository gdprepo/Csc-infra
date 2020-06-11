<?php

use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('textes')->insert([
            'title' => "Bienvenue",
            'texte' => "                <br>
            <p>Nous sommes spécialisés dans la plomberie et le chauffage depuis plus de 9 ans.
            <br><br>

            Nous effectuons les travaux de chauffage au gaz et électrique. Nous installons le chauffage en neuf et rénovation. Nous posons une pompe à chaleur adaptée à votre bâtiment. Nos professionnels sont qualifiés et vous apportent des travaux de qualité.
            <br><br>
                
            Nous effectuons la conception de votre salle de bains sur-mesure. Nous réalisons les travaux de tuyauterie et de canalisation. Nous sommes à votre service pour une étude personnalisée de votre plomberie. Nous intervenons pour les particuliers et les professionnels selon vos demandes en plomberie.
            <br><br>

            L'entreprise Morandini intervient pour la plomberie et le chauffage dans un rayon de 15 km autour de Périgny et dans les environs de La Rochelle, Dompierre-sur-Mer, Angoulins, Châtelaillon-Plage, Nieul-sur-Mer, Lagord et Saint Médard d'Aunis.
            <br><br>

            Alors pour tous vos travaux de plomberie et de chauffage, contactez l'entreprise Morandini pour de plus amples renseignements.</p><br>
            
            
            <h3>Morandini, c'est avant tout votre plombier chauffagiste qui trouve toutes les solutions à vos besoins.</h3>
            <br><br>",

        ]);

        DB::table('textes')->insert([
            'title' => "Historique",
            'texte' => "
            <br>
            <p><b>Du 15/06/2004 au 31/12/2007</b> - Activité en tant qu'entreprise Artisanale<br>
            <b>Au 01/01/2008</b> - Création de la Sarl CSC MORANDINI au capital 51 000 €<br>
            <b>Au 01/04/2013</b> - Augmentation du capital à 102 000 €</p>
            <br><br>",
        ]);
    }
}
