<?php

namespace Tests\Browser;

use App\Models\Utente;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * Autore: Venuto
 */
class ModeraTest extends DuskTestCase
{
    public function test_Modera(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(Utente::find(1))
                ->visit('/')
                ->click('@user-functions')
                ->assertSee('Modera Membri')
                ->clickLink('Modera Membri')

                ->press('Promuovi')
                ->assertSee('Membro promosso con successo.')

                ->press('Declassa')
                ->assertSee('Membro declassato con successo.')

                ->press('Espelli')
                ->assertSee('Membro espulso con successo.');
        });
    }
}
