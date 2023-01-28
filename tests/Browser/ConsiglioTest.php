<?php

namespace Tests\Browser;

use App\Models\Utente;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ConsiglioTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_consiglio(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(Utente::find(5))
                ->visit('/')
                ->click('@user-functions')
                ->clickLink('Scrivi consiglio')
                ->type('nome', 'Consiglio Dusk')
                ->type('contenuto', 'Lorem Ipsum Dolor')
                ->type('immagine', 'https://www.misya.info/wp-content/uploads/2007/04/impasto_per_pizze.jpg')
                ->press('Pubblica')  // Qui c'è la pubblicazione del consiglio, nei prossimi step si visita la pagina del profilo utente per controllare che il consiglio compaia anche lì
                ->visit('/')
                ->click('@user-functions')
                ->clicklink('Profilo')
                ->assertSee('Consiglio Dusk');
        });
    }
}
