<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_products()
    {
        Product::factory()->create([
            'name' => 'Mouse',
            'price' => 100,
            'stock' => 5
        ]);

        $response = $this->getJson('/api/products');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'data'
                 ]);
    }

    public function test_create_product()
    {
        $response = $this->postJson('/api/products', [
            'name' => 'Teclado',
            'description' => 'Mecânico',
            'price' => 200,
            'stock' => 10
        ]);

        $response->assertStatus(201)
                 ->assertJsonStructure([
                     'data' => ['id', 'name', 'price']
                 ]);
    }

    public function test_show_product()
    {
        $product = Product::factory()->create();

        $response = $this->getJson("/api/products/{$product->id}");

        $response->assertStatus(200)
                 ->assertJson([
                     'data' => [
                         'id' => $product->id
                     ]
                 ]);
    }
}