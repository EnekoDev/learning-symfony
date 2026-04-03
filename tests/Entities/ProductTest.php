<?php

namespace App\Tests\Entities;

use App\Entity\Product;
use App\Tests\DatabaseTestCase;

class ProductTest extends DatabaseTestCase
{
    private Product $product;
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->product = new Product();
    }

    public function testCreateProduct():void
    {
        $this->product->setName("Test");
        $this->product->setPrice(99.95);

        $this->entityManager->persist($this->product);
        $this->entityManager->flush();

        $this->assertNotNull($this->product->getId());
    }

    public function testGetProduct():void
    {
        $this->product->setName("Test");
        $this->product->setPrice(99.95);

        $this->entityManager->persist($this->product);
        $this->entityManager->flush();

        $retrievedProduct = $this->entityManager->getRepository(Product::class)->find($this->product->getId());
        $this->assertEquals(99.95, $retrievedProduct->getPrice());
    }
}
