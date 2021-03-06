<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use App\User;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MainTest extends DuskTestCase
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

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Блок');
        });
    }

    public function testDatabase()
    {

        $this->assertDatabaseHas('users', [
            'email' => 'support@molinos.ru'
        ]);
    }

    public function testDatabase2()
    {
        $this->assertDatabaseMissing('users', [
            'email' => 'support1@molinos.ru'
        ]);
    }
}
