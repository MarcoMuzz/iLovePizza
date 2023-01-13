<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Associazione_Utente;

class AssociazioneUtenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ----------- CREAZIONE DELLE PRIME 4 TUPLE (CAPI) -----------

        for($i=1;$i<=4;$i++) {
            Associazione_Utente::create([
                'associazione_id' => $i,
                'utente_id' => $i,
                'ruolo' => 3
            ]);
        }
    }
}
