<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController{

    #[Route('/panier', name: 'cart_index')]
    public function index(): Response{
        return $this->render('base.html.twig');
    }

    #[Route('/panier/add', name: 'cart_add')]
    public function addToCart(Request $request, RequestStack $requestStack): Response{
        $nb_product = $request->request->get('nb_product');
        $id_product = $request->request->get('id_product');

        if($nb_product == null OR $id_product == null){
            $this->addFlash('danger', 'Aucun produit à ajouter');
            $this->redirectToRoute('product_list');
        }

        $session = $requestStack->getSession();
        $session->clear();
        $products = $session->get('products_cart', []);

        $find = false;
        foreach ($products as $item){
            if($item[0] == $id_product){
                $find = true;
            }
        }

        if($find){
            $products[$id_product] = $products[$id_product] + $nb_product;
        }else {
            array_push($products, [$id_product, $nb_product]);
        }


        $session->set('products_cart', $products);

        $this->addFlash('success', 'Produit ajouté à votre panier avec succèes');

        return $this->render('base.html.twig');
    }

}