<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class suscriptorModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     public function testExample()
     {
     	$this->get('/suscriptor')
     	->assertStatus(200)
     	->assertSee('Suscriptor');
     }

     /**
     * @return void */

      public function testExample()
     {
     	$this->get('/suscriptor/nuevo')
     	->assertStatus(200)
     	->assertSee('crear suscriptor');
     }

     /**
     * @return void */

      public function testExample()
     {
     	$this->withoutExceptionHandling();

     	$this->post('/suscriptor/', [
        'name'=> 'omar',
        'lastname'=>'ventura',
        'email'=>'omar@gmail.com',
        'password'=>'123456',
     	]);

     	$this->assertCredentials([
        'name'=> 'omar',
        'lastname'=>'ventura',
        'email'=>'omar@gmail.com',
        'password'=>'123456'
     	])
     	('procesando ');
     }
     
    //public function testExample()
    //{ 
      //  $this->assertTrue(true);
    //}
}
