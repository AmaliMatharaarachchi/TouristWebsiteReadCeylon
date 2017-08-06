<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MultipleUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user1 = factory(User::class)->create([
            'email' => 'taylor@laravel.com',
        ]);
        $user2 = factory(User::class)->create([
            'email' => 'amali@laravel.com',
        ]);
        $this->browse(function ($first, $second) use ($user1,$user2) {
            $first->loginAs($user1)
                ->visit('/');


            $second->loginAs($user2)
                ->visit('/');


        });
    }
}
