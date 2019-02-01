<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testMainPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertDontSee('Error');
        });
    }

    public function testCartPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cart')
                ->assertDontSee('Error');
        });
    }

    public function testAboutPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/about')
                ->assertDontSee('Error');
        });
    }

    public function testContactPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contacts')
                ->assertDontSee('Error');
        });
    }

    public function testCatalogPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/catalog')
                ->assertDontSee('ErrorException');
        });
    }
}
