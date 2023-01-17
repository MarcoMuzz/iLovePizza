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
                'id_associazione' => $i,
                'id_utente' => $i,
                'ruolo' => 3
            ]);
        }

        // ----------- CREAZIONE MEMBRI E MOD 1° ASS -----------
        for($i=5;$i<=11;$i++) {
            if ($i == 5 || $i == 6) {
                Associazione_Utente::create([
                    'id_associazione' => 1,
                    'id_utente' => $i,
                    'ruolo' => 2
                ]);
            } else {
                Associazione_Utente::create([
                    'id_associazione' => 1,
                    'id_utente' => $i,
                    'ruolo' => 1
                ]);

            }
        }
// ----------- CREAZIONE MEMBRI E MOD 2° ASS -----------
            for($i=12;$i<=18;$i++) {
                if($i==12 || $i==13){
                    Associazione_Utente::create([
                        'id_associazione' => 2,
                        'id_utente' => $i,
                        'ruolo' => 2
                    ]);
                }
                else{
                    Associazione_Utente::create([
                        'id_associazione' => 2,
                        'id_utente' => $i,
                        'ruolo' => 1
                    ]);

                }
            }
        // ----------- CREAZIONE MEMBRI E MOD 3° ASS -----------
                for($i=19;$i<=25;$i++) {
                    if ($i == 19 || $i == 20) {
                        Associazione_Utente::create([
                            'id_associazione' => 3,
                            'id_utente' => $i,
                            'ruolo' => 2
                        ]);
                    } else {
                        Associazione_Utente::create([
                            'id_associazione' => 3,
                            'id_utente' => $i,
                            'ruolo' => 1
                        ]);

                    }
                }
        // ----------- CREAZIONE MEMBRI E MOD 4° ASS -----------
                    for($i=26;$i<=32;$i++) {
                        if($i==26 || $i==27){
                            Associazione_Utente::create([
                                'id_associazione' => 4,
                                'id_utente' => $i,
                                'ruolo' => 2
                            ]);
                        }
                        else{
                            Associazione_Utente::create([
                                'id_associazione' => 4,
                                'id_utente' => $i,
                                'ruolo' => 1
                            ]);

                        }
        }
    }
}
