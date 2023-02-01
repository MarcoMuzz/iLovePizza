<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utente_Consiglio;

/**
 * Autore: Baso
 */
class UtenteConsiglioSeeder extends Seeder
{
    public function run()
    {
        //
        for($i=33;$i<=50;$i++) {
            Utente_Consiglio::create([
                'utente_id' => $i,
                'consiglio_id' => rand(1, 5),
            ]);
            Utente_Consiglio::create([
                'utente_id' => $i,
                'consiglio_id' => rand(6, 10),
            ]);
        }
    }
}
