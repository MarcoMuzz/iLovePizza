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
    {

        Associazione::create([
            'nome' => "La Confraternita della Pizza",
            'romana' => 1,
            'napoletana' => 0,
            'resto' => 0,
            'internazionale' => 0,
            'utente_id' => 1
        ]);


        Associazione::create([
            'nome' => "L'Angolo di Zia Margherita",
            'romana' => 0,
            'napoletana' => 1,
            'resto' => 0,
            'internazionale' => 0,
            'utente_id' => 2
        ]);
        //

        Associazione::create([
            'nome' => "Capricciosa Revolution",
            'romana' => 0,
            'napoletana' => 0,
            'resto' => 1,
            'internazionale' => 0,
            'utente_id' => 3
        ]);


        Associazione::create([
            'nome' => "La Vela",
            'romana' => 1,
            'napoletana' => 0,
            'resto' => 0,
            'internazionale' => 1,
            'utente_id' => 4
        ]);

        Associazione::create([
            'nome' => "Associazione Prova",
            'romana' => 1,
            'napoletana' => 1,
            'resto' => 0,
            'internazionale' => 0,
            'utente_id' => 51
        ]);
    }
}
