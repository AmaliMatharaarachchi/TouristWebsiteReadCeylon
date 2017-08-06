<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AdditionalTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Dream');
        });

    }

    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'maamalilakshika@gmail.com')
                ->type('password', 'amaliLaravel')
                ->click('login');

        });

    }


    public function testUserLogOut()
    {
        $this->browse(function (Browser $browser) {
            $browser->click('#logout')
                ->assertPathIs('/logout');
        });

    }

//
//    public function testRegister()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/registerView')
//                ->assertSee('Register')
//                ->value('#username', 'Dilshan')
//                ->value('#email', 'abdsithira@gmail.com')
//                ->value('#password', '123456')
//                ->value('#passwordreenter', '123456')
//                // ->click('#recaptcha')
//                //  ->value('#check','Agreed')
//                ->click('.waves-effect')
//                ->assertSee('Buyer');
//
//        });
//
//
//    }
}
