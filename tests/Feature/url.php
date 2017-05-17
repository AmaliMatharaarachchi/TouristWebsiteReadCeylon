<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class url extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWelcome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testPackage()
    {
        $response = $this->get('/packages');

        $response->assertStatus(200);
    }

    public function testCity()
    {
        $response = $this->get('/cities');

        $response->assertStatus(200);
    }

//    public function testContact()
//    {
//        $response = $this->post('/contact-us');
//
//        $response->assertStatus(200);
//    }

    public function testReview()
    {
        $response = $this->get('/reviews');
//this redirects to login page because only a admin can log to it
        $response->assertStatus(302);
    }

//    public function testReviewUpdate()
//    {
//        $response = $this->get('/reviews/update');
////this redirects to login page because only a admin can log to it
//        $response->assertStatus(302);
//    }

//    public function testComment()
//    {
//        $response = $this->get('/comment/create');
////this redirects to login page because only a authenticated user can log to it
//        $response->assertStatus(302);
//    }

//    public function testPackageUpdate()
//    {
//        $response = $this->get('/packages/update');
////this redirects to login page because only a admin can log to it
//        $response->assertStatus(302);
//    }

//    public function testCityUpdate()
//    {
//        $response = $this->get('/cities/update');
////this redirects to login page because only a admin can log to it
//        $response->assertStatus(302);
//    }


    public function testPackageCreate()
    {
        $response = $this->get('/packages/create');
//this redirects to login page because only a admin can log to it
        $response->assertStatus(302);
    }

    public function testMessage()
    {
        $response = $this->get('/view-message');
//this redirects to login page because only a authenticated user can log to it
        $response->assertStatus(302);
    }

    public function testCityCreate()
    {
        $response = $this->get('/cities/create');
//this redirects to login page because only a admin can log to it
        $response->assertStatus(302);
    }

    public function testAdminRegister()
    {
        $response = $this->get('/admin-register');
//this redirects to login page because only a admin can log to it
        $response->assertStatus(302);
    }


}
