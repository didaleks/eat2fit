<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DietTest extends DuskTestCase
{
    /**
     * Temporal solution for cleaning up session
     */
    protected function setUp()
    {
        parent::setUp();
        foreach (static::$browsers as $browser) {
            $browser->driver->manage()->deleteAllCookies();
        }
    }

    public function testLogin()
    {
        $this->browse(function ($browser) {
            $browser->visit('/admin/user/login')
                ->type('email', 'support@molinos.ru')
                ->type('password', 'molinosru')
                ->press('Login')
                ->assertPathIs('/admin/page');
        });
    }
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/diet')
                    ->assertSee('ID')
            ;
        });
    }
}
