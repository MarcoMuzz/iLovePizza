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
                'romana' => 1,
                'napoletana' => 0,
                'resto' => 0,
                'internazionale' => 0,
                'cottura' => 'fornoalegna',
                'immagine' => 'https://www.giallozafferano.it/images/5-560/Pizza-Romana_780x520_wm.jpg',
                'utente_id' => rand(5, 11)
            ]);
        }
            for($i=4;$i<=6;$i++){
                Ricetta::create([
                    'nome' => 'ricetta'.$i,
                    'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
                    'preparazione'=>'blablabla',
                    'romana'=> 0,
                    'napoletana'=> 1,
                    'resto'=> 0,
                    'internazionale'=>0,
                    'cottura' => 'fornoelettrico',
                    'immagine'=> 'https://latteriasorrentina.com/wp-content/uploads/2019/06/come-fare-la-vera-pizza-1764x882.jpg',
                    'utente_id'=> rand(12,18)
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
                'cottura' => 'padella',
                'immagine'=> 'https://media-cdn.tripadvisor.com/media/photo-s/17/ed/fd/81/san-marco.jpg',
                'utente_id'=> rand(19,25)
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
                'cottura' => 'fornogas',
                'immagine'=> 'https://www.foodandwineitalia.com/wp-content/uploads/elementor/thumbs/pizza-ananas-shutterstock-pkuuz32rlvimvtt3l7lrad591d03en9nu2ppqlzqyg.png',
                'utente_id'=> rand(26,32)
            ]);
        }


    }
}
