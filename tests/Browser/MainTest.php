<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use App\User;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MainTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
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
}
