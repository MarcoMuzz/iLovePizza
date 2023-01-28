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
            Ricetta::create([
                'nome' => 'Pizza Margherita',
                'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
                'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'romana' => 1,
                'napoletana' => 0,
                'resto' => 0,
                'internazionale' => 0,
                'cottura' => 'fornoalegna',
                'immagine' => 'https://static.gamberorosso.it/2019/09/pizza-romana-e1568103827939.jpg',
                'utente_id' => rand(5, 11)
            ]);
        Ricetta::create([
            'nome' => 'La mia Capricciosa',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana' => 1,
            'napoletana' => 0,
            'resto' => 0,
            'internazionale' => 0,
            'cottura' => 'fornoalegna',
            'immagine' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/d7/a5/d0/pizza-capricciosa.jpg',
            'utente_id' => rand(5, 11)
        ]);

        Ricetta::create([
            'nome' => 'Boscaiola romana',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana' => 1,
            'napoletana' => 0,
            'resto' => 0,
            'internazionale' => 0,
            'cottura' => 'fornoalegna',
            'immagine' => 'https://www.lalievita.it/wp-content/uploads/2020/05/pizzeria-la-lievita-pizza-a-domicilio-e-da-asporto-boscaiola-uscita-dal-forno.jpg',
            'utente_id' => rand(5, 11)
        ]);



        Ricetta::create([
            'nome' => 'Pizza Diavola',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana'=> 0,
            'napoletana'=> 1,
            'resto'=> 0,
            'internazionale'=>0,
            'cottura' => 'fornoalegna',
            'immagine'=> 'https://foodle.pro/meals-images/2019-05-10-13-02-22-03055aea3f35d745c688df1aa84f9947.jpg',
            'utente_id'=> rand(12,18)
        ]);


        Ricetta::create([
            'nome' => 'Margherita Sciuè Sciuè',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana'=> 0,
            'napoletana'=> 1,
            'resto'=> 0,
            'internazionale'=>0,
            'cottura' => 'fornoalegna',
            'immagine'=> 'https://latteriasorrentina.com/wp-content/uploads/2019/06/come-fare-la-vera-pizza-1764x882.jpg',
            'utente_id'=> rand(12,18)
        ]);


        Ricetta::create([
            'nome' => 'Quattro Formaggi bianca',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana'=> 0,
            'napoletana'=> 1,
            'resto'=> 0,
            'internazionale'=>0,
            'cottura' => 'fornoalegna',
            'immagine'=> 'https://www.tasteatlas.com/images/dishes/e6f2310a7ffe4904bc9826bfc77ee11f.jpg',
            'utente_id'=> rand(12,18)
        ]);





            Ricetta::create([
                'nome' => 'Pizza Siciliana Acciughe,Olive nere e Pomodorini',
                'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
                'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'romana'=> 0,
                'napoletana'=> 0,
                'resto'=> 1,
                'internazionale'=>0,
                'cottura' => 'fornoelettrico',
                'immagine'=> 'https://www.dolcidee.it/media/uploads/recipe/62a493734e7dc_tmpb1fe878a9d2d497b805fe901e901027d.jpg',
                'utente_id'=> rand(19,25)
            ]);

        Ricetta::create([
            'nome' => 'Pizza al trancio milanese',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana'=> 0,
            'napoletana'=> 0,
            'resto'=> 1,
            'internazionale'=>0,
            'cottura' => 'fornoelettrico',
            'immagine'=> 'https://www.giochidigusto.it/wp-content/uploads/2021/02/trancio-senza-mozzarella-1.jpg',
            'utente_id'=> rand(19,25)
        ]);

        Ricetta::create([
            'nome' => 'Pizza con olive e nduja',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana'=> 0,
            'napoletana'=> 0,
            'resto'=> 1,
            'internazionale'=>0,
            'cottura' => 'fornoelettrico',
            'immagine'=> 'https://media-assets.lacucinaitaliana.it/photos/61fae816034a68e68c6375e0/4:3/w_1512,h_1134,c_limit/pizza-con-olive-e-nduja.jpg',
            'utente_id'=> rand(19,25)
        ]);




            Ricetta::create([
                'nome' => 'Pizza con ananas e Prosciutto',
                'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
                'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'romana'=> 0,
                'napoletana'=> 0,
                'resto'=> 0,
                'internazionale'=>1,
                'cottura' => 'fornoelettrico',
                'immagine'=> 'https://media-assets.lacucinaitaliana.it/photos/61fbd90ad70ea601fe205d23/3:2/w_1200,h_800,c_limit/pizza-con-ananas-origini.jpg',
                'utente_id'=> rand(26,32)
            ]);

        Ricetta::create([
            'nome' => 'Pizza Bulgogi',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana'=> 0,
            'napoletana'=> 0,
            'resto'=> 0,
            'internazionale'=>1,
            'cottura' => 'fornoelettrico',
            'immagine'=> 'https://www.sbs.com.au/food/sites/sbs.com.au.food/files/styles/full/public/ep10-korea-recipe-bulgogi-beef-pizza-cu.jpg?itok=FiQJFvUa',
            'utente_id'=> rand(26,32)
        ]);

        Ricetta::create([
            'nome' => 'Pizza con Pollo africana',
            'ingredienti' => 'Ingrediente 1, Ingrediente 2, Ingrediente 3',
            'preparazione'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'romana'=> 0,
            'napoletana'=> 0,
            'resto'=> 0,
            'internazionale'=>1,
            'cottura' => 'fornoelettrico',
            'immagine'=> 'https://images-gmi-pmc.edge-generalmills.com/fea4cf15-06a3-4de3-8b2f-0cd8a6a9a80d.jpg',
            'utente_id'=> rand(26,32)
        ]);


    }
}
