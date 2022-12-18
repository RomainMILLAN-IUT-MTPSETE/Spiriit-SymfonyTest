<?php

namespace App\Tests\Unit;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultTest extends WebTestCase
{
    public function testHomePage(): void{
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Test-Symfony');
        $this->assertSelectorTextContains('p#textMainContent', 'Un test fait par Romain MILLAN pour obtenir un stage dans l\'entreprise ');
    }

    public function testHeader(): void {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertSelectorExists('p#cartButtonNumberProduct');
        $this->assertSelectorTextSame('p#cartButtonNumberProduct', 'Panier (0)');
    }
}
