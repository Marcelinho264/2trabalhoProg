<?php

namespace Database\Seeders;

use Database\Seeders\UsuariosSeeder;
use Database\Seeders\FilmesSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuariosSeeder::class,
            FilmesSeeder::class,
        ]);
    }
}
