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
                'immagine' => 'pizza1.jpg',
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
            'immagine' => 'pizza2.jpg',
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
            'immagine' => 'pizza3.jpg',
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
            'immagine'=> 'pizza4.jpg',
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
            'immagine'=> 'pizza5.jpg',
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
            'immagine'=> 'pizza6.jpg',
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
                'immagine'=> 'pizza7.jpg',
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
            'immagine'=> 'pizza8.jpg',
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
            'immagine'=> 'pizza9.jpg',
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
                'immagine'=> 'pizza10.webp',
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
            'immagine'=> 'pizza11.jpg',
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
            'immagine'=> 'pizza12.jpg',
            'utente_id'=> rand(26,32)
        ]);


    }
}
