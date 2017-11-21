<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeControllerTest extends TestCase
{
    /**
     * Testando a visualização de produtos na página /see
     *
     * @return products
     */
    public function testGetImport()
    {
      $response = $this->call('GET', 'import');
      
    }



     public function testIndex()
    {
      $response = $this->call('GET', '/');

      $response->assertViewHas('products');

      $products = $response->original->getData()['products'];
      
    }

     public function testGetProducts()
    {
      $response = $this->call('GET', 'see');

      $response->assertViewHas('products');

      $products = $response->original->getData()['products'];
      
    }
}
