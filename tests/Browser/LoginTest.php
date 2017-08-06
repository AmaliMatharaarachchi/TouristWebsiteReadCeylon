<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use Laravel\Dusk\Chrome;


class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */


//    use DatabaseMigrations;


    use DatabaseTransactions;
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testLoginAdmin()
    {

        $this->browse(function ($browser)  {
            $browser->visit('/login')
                ->type('email', 'maamalilakshika@gmail.com')
                ->type('password', 'amaliLaravel')
                ->press('Login')
                ->assertPathIs('/');

        });
    }
    public function testLoginUser()
    {

        $this->browse(function ($browser)  {
            $browser->visit('/login')
                ->type('email', 'hansaka@gmail.com')
                ->type('password', 'amaliLaravel')
                ->press('Login')
                ->assertPathIs('/');

        });
    }

}
