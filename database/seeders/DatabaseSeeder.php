<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UtenteSeeder::class, //popolazione tabella utente
            AssociazioneSeeder::class, //popolazione tabella associazione
            AssociazioneUtenteSeeder::class, //popolazione tabella associazione_utente
            ConsiglioSeeder::class, //popolazione tabella consiglio
            UtenteConsiglioSeeder::class, //popolazione tabella utente_consiglio
            RicettaSeeder::class, //popolazione tabella ricettas
            UtenteRicettaSeeder::class, //popolazione tabella utente_ricetta
            CommentoSeeder::class, //popolazione tabella commentos
        ]);

    }
}
