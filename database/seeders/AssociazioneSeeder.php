<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Associazione;

class AssociazioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   // ----------- CREAZIONE 1° TUPLA -----------

        Associazione::create([
            'nome' => "Associazione 1",
            'romana' => 1,
            'napoletana' => 0,
            'resto' => 0,
            'internazionale' => 0,
            'utente_id' => 1
        ]);
        // ----------- CREAZIONE 2° TUPLA -----------

        Associazione::create([
            'nome' => "Associazione 2",
            'romana' => 0,
            'napoletana' => 1,
            'resto' => 0,
            'internazionale' => 0,
            'utente_id' => 2
        ]);
        // ----------- CREAZIONE 3° TUPLA -----------

        Associazione::create([
            'nome' => "Associazione 3",
            'romana' => 0,
            'napoletana' => 0,
            'resto' => 1,
            'internazionale' => 0,
            'utente_id' => 3
        ]);
        // ----------- CREAZIONE 4° TUPLA -----------

        Associazione::create([
            'nome' => "Associazione 4",
            'romana' => 1,
            'napoletana' => 0,
            'resto' => 0,
            'internazionale' => 1,
            'utente_id' => 4
        ]);
    }
}
