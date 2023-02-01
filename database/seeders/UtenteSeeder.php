<?php

namespace Database\Seeders;

use App\Models\Utente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Autore: Venuto
 */
class UtenteSeeder extends Seeder
{
    public function run()
    {
        Utente::factory(50)->create();

        Utente::create([
            'nome' => 'Matteo',
            'cognome' => 'Baso',
            'username' => 'CapoProva',
            'email' => 'capo@prova.it',
            'password' => Hash::make('12345678')

        ]);

        Utente::create([
            'nome' => 'Marco',
            'cognome' => 'Musciacchio',
            'username' => 'MembroProva',
            'email' => 'membro@prova.it',
            'password' => Hash::make('12345678')

        ]);


    }
}
