<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use PHPUnit\Framework\Assert as PHPUnit;


class AdminTest extends DuskTestCase
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

    public function testDietIndex()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/diet')
                ->assertSeeIn('h1', 'Рационы')
            ;
        });
    }


    public function testPageIndex()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/page')
                ->assertSee('Главная')
            ;
        });
    }

    public function testDishIndex()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/dish')
                ->assertSeeIn('h1', 'Блюда')
            ;
        });
    }

    public function testFeedbackIndex()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/feedback')
                ->assertSeeIn('h1', 'Обратная связь')
            ;
        });
    }

    public function testOrderIndex()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/order')
                ->assertSeeIn('h1', 'Заказы')
            ;
        });
    }

    public function testDietEdit()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/diet/1/edit')
                ->assertSee('Название')
            ;
        });
    }

    public function testDishEdit()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/dish/1/edit')
                ->assertSee('Название')
            ;
        });
    }

    public function testDayEdit()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/day/1/edit')
                ->assertSee('День')
            ;
        });
    }


    public function testEatingEdit()
    {
        $this->testLogin();
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/eating/1/edit')
                ->assertSee('Тип приема пищи')
            ;
        });
    }
}
