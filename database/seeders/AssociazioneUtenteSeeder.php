<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Associazione_Utente;

/**
 * Autore: Stingi
 */
class AssociazioneUtenteSeeder extends Seeder
{
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

        // ----------- CREAZIONE MEMBRI E MOD 1° ASS -----------
        for($i=5;$i<=11;$i++) {
            if ($i == 5 || $i == 6) {
                Associazione_Utente::create([
                    'associazione_id' => 1,
                    'utente_id' => $i,
                    'ruolo' => 2
                ]);
            } else {
                Associazione_Utente::create([
                    'associazione_id' => 1,
                    'utente_id' => $i,
                    'ruolo' => 1
                ]);

            }
        }
// ----------- CREAZIONE MEMBRI E MOD 2° ASS -----------
            for($i=12;$i<=18;$i++) {
                if($i==12 || $i==13){
                    Associazione_Utente::create([
                        'associazione_id' => 2,
                        'utente_id' => $i,
                        'ruolo' => 2
                    ]);
                }
                else{
                    Associazione_Utente::create([
                        'associazione_id' => 2,
                        'utente_id' => $i,
                        'ruolo' => 1
                    ]);

                }
            }
        // ----------- CREAZIONE MEMBRI E MOD 3° ASS -----------
                for($i=19;$i<=25;$i++) {
                    if ($i == 19 || $i == 20) {
                        Associazione_Utente::create([
                            'associazione_id' => 3,
                            'utente_id' => $i,
                            'ruolo' => 2
                        ]);
                    } else {
                        Associazione_Utente::create([
                            'associazione_id' => 3,
                            'utente_id' => $i,
                            'ruolo' => 1
                        ]);

                    }
                }
        // ----------- CREAZIONE MEMBRI E MOD 4° ASS -----------
                    for($i=26;$i<=32;$i++) {
                        if($i==26 || $i==27){
                            Associazione_Utente::create([
                                'associazione_id' => 4,
                                'utente_id' => $i,
                                'ruolo' => 2
                            ]);
                        }
                        else{
                            Associazione_Utente::create([
                                'associazione_id' => 4,
                                'utente_id' => $i,
                                'ruolo' => 1
                            ]);

                        }
        }
                    Associazione_Utente::create([
                    'associazione_id' => 5,
                    'utente_id' => 51,
                    'ruolo' => 3
                    ]);

                    Associazione_Utente::create([
                    'associazione_id' => 5,
                    'utente_id' => 52,
                    'ruolo' => 1
                    ]);
    }
}
