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
                    ->assertSee('Блок');
        });
    }

    public function testCartPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cart')
                ->assertSee('Корзина');
        });
    }

    public function testAboutPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/about')
                ->assertSee('компании');
        });
    }

    public function testContactPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contacts')
                ->assertSee('Контакты');
        });
    }

    public function testCatalogPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/catalog')
                ->assertSee('рацион');
        });
    }
}
