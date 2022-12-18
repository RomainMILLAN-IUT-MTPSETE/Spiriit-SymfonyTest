<?php

namespace App\Tests\Unit;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductTest extends WebTestCase{

    public function testProductList(): void{
        $client = static::createClient();
        $crawler = $client->request('GET', '/produits');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h3', 'Liste des produits');
    }

    public function testProductSee(): void{
        $client = static::createClient();
        $crawler = $client->request('GET', '/produits/see');

        $this->assertResponseIsSuccessful();
    }
}
