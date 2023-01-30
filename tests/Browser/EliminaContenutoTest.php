<?php

namespace Tests\Browser;

use App\Models\Utente;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EliminaContenutoTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    //use DatabaseMigrations;
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(Utente::find(13))
                ->visit('/')
                ->click('@user-functions')
                ->assertSee('Modera Contenuti')
                ->clickLink('Modera Contenuti')
                ->assertSee('Ricette')
                ->press('Elimina Ricetta')
                ->assertSee('Ricetta eliminata')
                ->press('Elimina Consiglio')
                ->assertSee('Consiglio eliminato');
        });
    }
}
