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
                'immagine' => 'https://img.freepik.com/premium-photo/black-man-naked-with-salat_67651-2377.jpg',
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
                    'immagine'=> 'https://c8.alamy.com/zoomsit/6/5cd1333324dd45c2a0f752d17f69d334/b2a724.jpg',
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
                'immagine'=> 'https://lurlodimunch.files.wordpress.com/2013/03/uomo_nero_nudo_letto1.jpg',
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
                'immagine'=> 'https://i.etsystatic.com/9377676/r/il/5039b1/2119365259/il_570xN.2119365259_9sfu.jpg',
                'id_autore'=> rand(26,32)
            ]);
        }


    }
}
