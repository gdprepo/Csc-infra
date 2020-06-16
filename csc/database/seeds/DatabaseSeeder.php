<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TextSeeder::class);
        $this->call(DocumentSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(RealisationSeeder::class);
        $this->call(ImageSeeder::class);

    }
}
