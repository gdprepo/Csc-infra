<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'prenom' => "Gabin",
            'nom' => 'Admin',
            'email' => "admin@gmail.com",
            'password' => Hash::make('password'),
            'adresse' => "rue azerty test Paris 92000",
            'mobile' => "0645200450",
            'groupe' => "admin",
        ]);

        DB::table('users')->insert([
            'prenom' => "Gabin",
            'nom' => 'Depaire',
            'email' => "gabindepaire@gmail.com",
            'password' => Hash::make('password'),
            'adresse' => "rue azerty test Paris 92000",
            'mobile' => "0603200450",
            'groupe' => "sousadmin",
        ]);

        DB::table('users')->insert([
            'prenom' => "Diane",
            'nom' => 'Nom',
            'email' => "diane@gmail.com",
            'password' => Hash::make('password'),
            'adresse' => "rue azerty diane Paris 15",
            'mobile' => "060350450",
            'groupe' => "client",
        ]);

        DB::table('users')->insert([
            'prenom' => "Christine",
            'nom' => 'Nom',
            'email' => "christine@gmail.com",
            'password' => Hash::make('password'),
            'adresse' => "rue azerty christine Paris 16",
            'mobile' => "061500450",
            'groupe' => "client",
        ]);


        DB::table('users')->insert([
            'prenom' => "Marc",
            'nom' => 'Nom',
            'email' => "marc@gmail.com",
            'password' => Hash::make('password'),
            'adresse' => "rue azerty marc Paris 16",
            'mobile' => "0673000450",
            'groupe' => "client",
        ]);


        DB::table('users')->insert([
            'prenom' => "Anne",
            'nom' => 'Nom',
            'email' => "anne@gmail.com",
            'password' => Hash::make('password'),
            'adresse' => "rue azerty anne Paris 18",
            'mobile' => "0616000450",
            'groupe' => "client",
        ]);


        DB::table('users')->insert([
            'prenom' => "Benjamin",
            'nom' => 'Nom',
            'email' => "benjamin@gmail.com",
            'password' => Hash::make('password'),
            'adresse' => "rue azerty benjamin Paris 15",
            'mobile' => "0664800450",
            'groupe' => "client",
        ]);
    }
}
