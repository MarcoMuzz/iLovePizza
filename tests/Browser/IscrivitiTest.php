<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class IscrivitiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testIscrizione(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Registrati')
                    ->type('name','Arturo')
                    ->type('lastname','Signorini')
                    ->type('username','Virile39')
                    ->type('email','Ercole39@gmail.com')
                    ->type('password','12345678')
                    ->type('password_confirmation','12345678')
                    ->press('Register')
                    ->assertSee('Virile39');


        });
    }
}
