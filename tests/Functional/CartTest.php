<?php

namespace App\Tests\Functional;

use App\Controller\CartController;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;

class CartTest extends TestCase
{
    public function testNumberProductOnCart(): void{
        $session = new Session(new MockArraySessionStorage());

        $session->set("products_cart", []);
        $this->assertEquals(0, CartController::getNumberProductOnCart($session));

        $session->set("products_cart", ['1' => 1, '3' => 4]);
        $this->assertEquals(5, CartController::getNumberProductOnCart($session));
    }

    public function testTotalPrice(): void{
        $listProductToTest = ['1' => 1, '2' => 1, '3' => 1, '4' => 1, '5' => 1, '6' => 1, '7' => 1, '8' => 1, '9' => 1, '10' => 1, '11' => 1];
        $listProcutsPrice = ['1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, '11' => 11];
        $this->assertEquals(66.00, (new CartController())->getTotalPrice($listProcutsPrice, $listProductToTest));

        $listProcutsPrice = ['1' => 1.1, '2' => 2.2, '3' => 3.3, '4' => 4.4, '5' => 5.5, '6' => 6.6, '7' => 7.7, '8' => 8.8, '9' => 9.9, '10' => 10.10, '11' => 11.11];
        $this->assertEqualsWithDelta(70.71, (new CartController())->getTotalPrice($listProcutsPrice, $listProductToTest), 0.01);

        $listProcutsPrice = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0];
        $this->assertEquals(0.0, (new CartController())->getTotalPrice($listProcutsPrice, $listProductToTest));
    }
}
