<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nome' => 'Pedro Henrique',
            'email' => 'pedro@email.com',
            'password' => Hash::make('123'),
            'permissao' => 0,
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Marcelo Henrique',
            'email' => 'marcelo@email.com',
            'password' => Hash::make('123'),
            'permissao' => 1,
        ]);
    }
}
