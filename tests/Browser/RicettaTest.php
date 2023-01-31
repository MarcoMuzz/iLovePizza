<?php

namespace Tests\Browser;

use App\Models\Utente;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RicettaTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_Ricetta(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(Utente::find(5))
                ->visit('/')
                ->click('@user-functions')
                ->clickLink('Scrivi ricetta')
                ->type('nome', 'Ricetta Dusk')
                ->type('ingredienti', 'Ingrediente1,Ingrediente2,Ingrediente3')
                ->type('preparazione', 'Lorem Ipsum Dolor')
                ->select('tipologia', 'romana')
                ->select('cottura')
                ->attach('immagine',  __DIR__.'\immaginitest\pizzatest.jpg')
                ->press('Pubblica')  // Qui c'è la pubblicazione della ricetta, nei prossimi step si visita la pagina del profilo utente per controllare che la ricetta compaia anche lì
                ->visit('/')
                ->click('@user-functions')
                ->clicklink('Profilo')
                ->assertSee('Ricetta Dusk');
        });
    }
}
