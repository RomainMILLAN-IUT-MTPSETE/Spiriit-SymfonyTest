<?php

namespace App\Tests\Unit;

use App\Controller\CartController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;

class CartTest extends WebTestCase
{
    public function testCartPage(): void{
        $client  = static::createClient();
        self::ensureKernelShutdown();
        $crawler = $client->request('GET', '/panier');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('h3', "Vote panier:");
    }
}
