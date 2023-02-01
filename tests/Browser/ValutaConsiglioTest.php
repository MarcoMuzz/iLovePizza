<?php

namespace Tests\Browser;

use App\Models\Utente;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ValutaConsiglioTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_valuta_consiglio(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(Utente::first())
                ->visit('/')
                ->assertSee('Consigli')
                ->clickLink('Consigli')
                ->assertSee('Continua a leggere')
                ->clickLink('Continua a leggere')
                ->click('@bottoneCuore');
        });
    }
}
