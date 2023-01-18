<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Consiglio;

class ConsiglioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            Consiglio::create([
                'nome' => "consiglio {$i}",
                'contenuto' => "blablabla",
                'immagine'=> "https://images.emojiterra.com/google/android-oreo/512px/1f601.png",
                'utente_id'=> rand(1,32) //
            ]);
        }
    }
}
