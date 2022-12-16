<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController{

    #[Route('/produits', name: 'product_list')]
    public function list(ManagerRegistry $doctrine, RequestStack $requestStack): Response{
        $entityManager = $doctrine->getManager();

        $products = $entityManager->getRepository(Product::class)->findAll();

        return $this->render('products/list.html.twig', ['products' => $products, 'numberProductOnCart' => self::getNumberProductOnCart($requestStack)]);
    }

    #[Route('/produits/{id}', name: 'product_show')]
    public function show(ManagerRegistry $doctrine, int $id, RequestStack $requestStack): Response{
        if($id < 1){
            return $this->redirectToRoute('product_list');
        }

        $entityManager = $doctrine->getManager();

        $product = $entityManager->getRepository(Product::class)->find($id);

        if(!$product){
            throw $this->createNotFoundException('Produit avec l\'identifiant '.$id.' non trouvé');
        }

        return $this->render('products/show.html.twig', ['product' => $product, 'numberProductOnCart' => self::getNumberProductOnCart($requestStack)]);
    }


    public static function getNumberProductOnCart(RequestStack $requestStack): int{
        $productsOnCart = $requestStack->getSession()->get('products_cart');
        $numberProductOnCart = 0;
        if($productsOnCart != null){
            foreach ($productsOnCart as $key => $value){
                $numberProductOnCart = $numberProductOnCart + $value;
            }
        }

        return $numberProductOnCart;
    }

}