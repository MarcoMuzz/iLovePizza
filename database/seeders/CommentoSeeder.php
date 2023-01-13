<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commento;

class CommentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   for($i=1;$i<=20;$i++){
        Commento::create([
            'id_ricetta' => rand(1,12),
            'id_autore' => rand(33,50),
            'contenuto' => 'blablabla'
        ]);
    }
    }
}
