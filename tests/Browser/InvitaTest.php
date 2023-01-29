<?php

namespace Tests\Browser;

use App\Models\Utente;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class InvitaTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function test_Invita(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->loginAs(Utente::find(1))
                ->visit('/')
                ->click('@user-functions')
                ->clickLink('Invita membro')
                ->assertSee('Inserisci l\'email')
                ->type('email','InvitaTest@gmail.com')
                ->press('Invia invito')
                ->assertSee('Invito inviato!');

        });
    }
}
