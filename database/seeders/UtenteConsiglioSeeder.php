<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utente_Consiglio;

class UtenteConsiglioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=33;$i<=50;$i++) {
            Utente_Consiglio::create([
                'id_utente' => $i,
                'id_consiglio' => rand(1, 5),
            ]);
            Utente_Consiglio::create([
                'id_utente' => $i,
                'id_consiglio' => rand(6, 10),
            ]);
        }
    }
}
