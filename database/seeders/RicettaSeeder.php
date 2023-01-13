<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ricetta;

class RicettaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=3;$i++) {
            Ricetta::create([
                'nome' => 'ricetta' . $i,
                'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
                'preparazione'=>'blablabla',
                'romana' => 0,
                'napoletana' => 1,
                'resto' => 0,
                'internazionale' => 0,
                'light' => rand(0, 1),
                'vegetariano' => rand(0, 1),
                'senzaglutine' => rand(0, 1),
                'senzalattosio' => rand(0, 1),
                'cottura' => 'fornoalegna',
                'immagine' => 'https://t3.ftcdn.net/jpg/04/48/09/00/360_F_448090057_lQt2CrcZ0vnTffzwtmTVU0JuiC0EgUuK.jpg?w=400&h=200',
                'id_autore' => rand(5, 11)
            ]);
        }
            for($i=4;$i<=6;$i++){
                Ricetta::create([
                    'nome' => 'ricetta'.$i,
                    'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
                    'preparazione'=>'blablabla',
                    'romana'=> 1,
                    'napoletana'=> 0,
                    'resto'=> 0,
                    'internazionale'=>0,
                    'light'=>rand(0,1),
                    'vegetariano' =>rand(0,1),
                    'senzaglutine' =>rand(0,1),
                    'senzalattosio' =>rand(0,1),
                    'cottura' => 'fornoelettrico',
                    'immagine'=> 'https://t3.ftcdn.net/jpg/04/48/09/00/360_F_448090057_lQt2CrcZ0vnTffzwtmTVU0JuiC0EgUuK.jpgw?=400&h=200',
                    'id_autore'=> rand(12,18)
                ]);
        }
        for($i=7;$i<=9;$i++){
            Ricetta::create([
                'nome' => 'ricetta'.$i,
                'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
                'preparazione'=>'blablabla',
                'romana'=> 0,
                'napoletana'=> 0,
                'resto'=> 1,
                'internazionale'=>0,
                'light'=>rand(0,1),
                'vegetariano' =>rand(0,1),
                'senzaglutine' =>rand(0,1),
                'senzalattosio' =>rand(0,1),
                'cottura' => 'padella',
                'immagine'=> 'https://t3.ftcdn.net/jpg/04/48/09/00/360_F_448090057_lQt2CrcZ0vnTffzwtmTVU0JuiC0EgUuK.jpg?w=400&h=200',
                'id_autore'=> rand(19,25)
            ]);
        }
        for($i=10;$i<=12;$i++){
            Ricetta::create([
                'nome' => 'ricetta'.$i,
                'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
                'preparazione'=>'blablabla',
                'romana'=> 0,
                'napoletana'=> 0,
                'resto'=> 0,
                'internazionale'=>1,
                'light'=>rand(0,1),
                'vegetariano' =>rand(0,1),
                'senzaglutine' =>rand(0,1),
                'senzalattosio' =>rand(0,1),
                'cottura' => 'fornogas',
                'immagine'=> 'https://t3.ftcdn.net/jpg/04/48/09/00/360_F_448090057_lQt2CrcZ0vnTffzwtmTVU0JuiC0EgUuK.jpg?w=400&h=200',
                'id_autore'=> rand(26,32)
            ]);
        }


    }
}
