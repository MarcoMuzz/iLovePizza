<?php

namespace Tests\Browser;

use App\Models\Utente;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreaAssociazioneTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(Utente::find(33))
                ->visit('/')
                ->click('@user-functions')
                ->assertSee('Crea Associazione')
                ->clickLink('Crea Associazione')
                ->type('nome', 'Nome associazione Test')
                ->type('descrizione', 'Descrizione Test')
                ->check('napoletana')
                ->check('romana')
                ->press('Continua')
                ->assertSee('Associazione creata correttamente');
        });
    }
}
