<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductControllerTest extends TestCase
{
    

    public function testStore()
    {
      $this->mock
           ->shouldReceive('create')
           ->once();
     
      $this->app->instance('Product', $this->mock);
     
      $this->call('POST', 'update');
     
      $this->assertRedirectedToRoute('see');
     
    }

    public function testEdit()
    {

    $code = 1010;

    $response = $this->call('GET', 'edit/'. $code);
     
      $response->assertViewHas('product');
      $response->assertViewHas('categories');

      $products = $response->original->getData()['product'];
      $categories = $response->original->getData()['categories'];
      $this->assertRedirectedToRoute('edit');
     
    }

       public function testUpdate()
    {
       $code = 1010;

        $response = $this->call('POST', 'update/'. $code);
        $this->assertRedirectedToRoute('see');
     
    }

    public function testDelete()
    {

      $code = 1010;

      $response = $this->call('GET', 'delete/'. $code);

      $this->assertRedirectedToRoute('see');
     
    }

   


  
}
