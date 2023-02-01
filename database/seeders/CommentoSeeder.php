<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commento;

/**
 * Autore: Baso
 */
class CommentoSeeder extends Seeder
{
    public function run()
    {   for($i=1;$i<=20;$i++){
        Commento::create([
            'ricetta_id' => rand(1,12),
            'utente_id' => rand(33,50),
            'contenuto' => 'blablabla'
        ]);
    }
    }
}
