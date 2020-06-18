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

        DB::table('textes')->insert([
            'title' => "Prestations",
            'texte' => "
            <br>
            <p>Pour tous vos projets, nous réalisons une étude personnalisée de vos besoins et établissons gratuitement un devis.<br>
            Nous vous proposons un large choix de matériels de qualité et sommes à votre écoute pour vous conseiller.</p>
            <br><br>",
        ]);
 
        DB::table('textes')->insert([
            'title' => "Chauffage",
            'texte' => "

            <p>Gaz<br>
            Electricité<br>
            Pompe à chaleur<br>
            Installation<br>
            Neuf &amp; Rénovation<br>
            Chauffagerie</p>
            ",
        ]);

        DB::table('textes')->insert([
            'title' => "Plomberie",
            'texte' => "

            <p>Installation de salle de bains complètes<br>
            Canalisations<br>
            Robinetterie<br>
            Tuyauterie<br>
            Carrelage<br>
            PMR (pour maintien de personnes à domicile)</p>
            ",
        ]);

        DB::table('textes')->insert([
            'title' => "References",
            'texte' => "

            <br><h3 style='text-align:left;'>ANNÉE  2004 : Création  de l'entreprise Artisanale</h3>
            <p>Réfection de la sous-station de l'HOPITAL ST LOUIS à LA ROCHELLE<br>
            Pose climatisation groupe STECADEF à CHATELALLION<br>
            Reprise réseau eau froide HOPITAL ST LOUIS</p>
            <br><br>
            
            <h3 style='text-align:left;'>ANNÉE  2005</h3>
            <p>Modification sur réseau hydraulique CENTRE MEDICO-CHIRURGICAL DE L'ATLANTIQUE A LA ROCHELLE<br>
            Pose de radiateurs ACOVA chez  MME JEANNEAU<br>
            Divers travaux de maintenance et refection complète sanitaire pour le parc locatif De la  SA HLM ATLANTIC AMENAGEMENT<br>
            Changement de robinets et tés de réglage sur toute une aile de bâtiment</p><br><br>
            
            <h3 style='text-align:left;'>ANNÉE  2006</h3>
            <p>Modification   hydraulique   sur   ventilo-convecteurs   sur le chantier  du pöle de réanimation de l'HOPITAL ST LOUIS<br>
            Raccordement d'un surpresseur résidence ORBIGNY à LA ROCHELLE <br>
            Raccordement d'une CTA en corronarographie HOPITAL LA ROCHELLE<br>
            Divers travaux de maintenance et réfection complète sanitaire pour le parc Locatif de la SA HLM ATLANTIC</p><br><br>
            
            <h3 style='text-align:left;'>ANNÉE  2007</h3>
            <p>Divers travaux de maintenance et réfection complète des sanitaires pour le parc Locatif de la SA HLM ATLANTIC AMENAGEMENT<br>
            Travaux   de   maintenance   et  dépannage   pour  le   Cabinet   DEMOUGINS   ET FONCIA<br>
            Raccordement  hydraulique d'un caisson CTA sur le site HOPITAL ST LOUIS A LA ROCHELLE<br>
            Travaux sur installation de chauffage maison de retraite  BAT ABC sur 3 niveaux (environ 160 Chambres) changement des robinets  et tés de réglage sur radiateurs Centre Hospitalier St Louis La Rochelle</p><br><br>
            
            <h3 style='text-align:left;'>ANNÉE  2008 : Création de la SARL CSC Morandini</h3>
            <p>Divers travaux de maintenance pour la SA HLM ATLANTIC  AMENAGEMENT et CABINET DEMOUGINS ET FONCIA<br>
            Travaux raccordement et réseau EU  pour INRAP L'HOUMEAU<br>
            Travaux hydrauliques en sous-traitance pour DALKIA </p><br><br>
            
            <h3 style='text-align:left;'>ANNÉE  2009</h3>
            <p>Hôtel KYRIAD La Rochelle rénovation des sanitaires et production  ECS (50 chambres, 1 logement et les communs)<br>
            Divers travaux de maintenance et réfection complète des sanitaire pour le parc locatif de la SA HLM ATLANTIC<br>
            AMENAGEMENT pour le Cabinet  DEMOUJIN - FONCIA ­ CHANDEAU et CEYRAT<br>
            Travaux hydrauliques en sous-traitance pour DALKIA<br>
            Réfection de sanitaires et dépannage réseaux pour les services du Génie MINISTERE de la DEFENSE La Rochelle</p><br><br>
            
            <h3 style='text-align:left;'>ANNÉES  2011 - 2012 - 2013 - 2014 - 2015</h3>
            <p>Divers travaux de maintenance : PICHET IMMOBILIER / FONCIA / SA HLM ATLANTIC AMENAGEMENT / PARTICULIERS / GROUPE SUP DE CO<br>
            Remplacement de l'ensemble des radiateurs chauffage central résidence « LA CHALOUPE LA ROCHELLE »<br>
            Appel d'offres MINISTERE DE LA DEFENSE remplacement chaudières Gaz<br>				Rénovation  complète salle de Bain Particuliers  et Parc locatif HLM ATLANTIC AMMENAGEMENT<br>
            Salle  de Bains  transformation  remplacement  baignoire  par Bac à douches  Parc locatif ATLANTIC AMENAGEMENT et PARTICULIERS<br>
            Travaux hydrauliques en sous-traitance pour DALKIA</p>
            <br><br>
            
            <h3 style='text-align:left;'>ANNÉE 2016</h3>
            <p>Divers travaux de maintenance : PICHET IMMOBILIER / FONCIA / DEMOUGIN / ATLANTIC AMENAGEMENT / CLARA AUTOMOBILES<br>
            Travaux hydraulique en sous-traitance pour DALKIA<br>
            Rénovation complète de salle de bain particulier et parc locatif HLM<br>
            Salle de bains transformation remplacement baignoire par Bac à douche Parc locatif ATLANTIC AMENAGEMENT et Particuliers<br>
            Travaux de maintenance EUROMASTER / LODIPAT OCEAN / FNATH / MINISTERE DE LA DEFENSE</p>
            <br><br>
            
            <h3 style='text-align:left;'>ANNÉE 2017</h3>
            <p>Divers travaux de maintenance pour FONCIA/ PICHET IMMOBILIER &amp; SERVICES/ CABINET DEMOUGIN/ ATLANTIC AMENAGEMENT<br>
            Travaux hydrauliques en sous-traitance pour DALKIA<br>
            Rénovation complète de salle de bains Particuliers et Parc locatif HLM<br>
            Salle de bains transformation remplacement baignoire par bac à douche Particuliers et Parc Locatif ATLANTIC AMENAGEMENT<br>
            Travaux de maintenance pour GIFI / EUROMASTER/ LODIPAT OCEAN /FNATH/Mairie de SAINT-ROGATIEN.<br>
            <br><br>
            
            </p>
            ",
        ]);

        DB::table('textes')->insert([
            'title' => "Showroom",
            'texte' => "
            <p>Etant membre de la COVAP, coopératives d'artisans, nous mettons à votre disposition un Showroom de sanitaires, cuisines et chauffages.
            Contactez-nous afin que nous prenions rendez-vous pour une visite. <b>Inspiration garantie pour vos projets !</b></p>    
            ",
        ]);

        DB::table('textes')->insert([
            'title' => "Adresse",
            'texte' => "
            <p><b>Adresse :</b></p>
            <p>ZA Rue des Greffières<br> 
            17140 LAGORD</p><br>",
        ]);

        DB::table('textes')->insert([
            'title' => "Horaire",
            'texte' => "
            <p><b>Heures d’ouverture :</b></p>
            <p>Lundi : 14H00 - 18H20<br>
            Mardi au vendredi : 9H00  -  12H00 &amp; 14H00  - 18H20<br>
            Samedi : 9H00  -  12H00</p>",
        ]);

        DB::table('textes')->insert([
            'title' => "Contact",
            'texte' => "
            <p>N'hésitez pas à nous contacter afin que nous étudions ensemble votre projet.</p>
            <br>",
        ]);

        DB::table('textes')->insert([
            'title' => "Coordonnees",
            'texte' => "
            <p>
            <b>Adresse :</b> 10 Rue Augustin Fresnel  -  17180 Périgny<br>
            <b>Téléphone :</b> 05 46 52 19 23<br>
            <b>Mobile :</b> 06 61 48 03 42<br>
            <b>Email :</b> j.morandini@csc-morandini.fr
        </p>",
        ]);

        DB::table('textes')->insert([
            'title' => "Zone",
            'texte' => "
            <p><b>L'entreprise Morandini intervient pour la plomberie et le chauffage dans un rayon de 15 km autour de Périgny :</b><br>
            dans les environs de La Rochelle, Dompierre-sur-Mer, Angoulins, Châtelaillon-Plage, Nieul-sur-Mer, Lagord, Saint Médard d'Aunis et l'Île de Ré.</p>
            ",
        ]);
                    




    }
}
