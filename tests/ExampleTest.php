<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function tests_blog_page()
    {
        $this->visit('/blog')
             ->see('My Blog')
             ->see('Page');
    }


    public function tests_admin_redirects_to_auth_login()
    {
        $this->visit('/admin')
            ->assertResponseOk()
            ->assertRedirectedTo('/auth/login'); 
    }
    
    
}
