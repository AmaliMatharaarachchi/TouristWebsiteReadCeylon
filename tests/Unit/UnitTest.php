<?php

namespace Tests\Feature;

use App\Package;
use App\User;
use App\Comment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class UnitTest extends TestCase
{
    use DatabaseTransactions;

    public function testPageWelcome(){
        $this->visit('/')->see('ReadCeylon');
    }

    public function test_create_package()
    {
        $first = factory(Package::class)->create();
        $second = factory(Package::class)->create();
        $this->get();

    }

    public function test_create_user()
    {
        $first = factory(User::class)->create();
        $second = factory(User::class)->create();

    }

    public function test_create_comment()
    {
        $first = factory(Comment::class)->create();
        $second = factory(Comment::class)->create();

    }
}