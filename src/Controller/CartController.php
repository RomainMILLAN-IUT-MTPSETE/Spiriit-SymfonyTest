<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController{

    #[Route('/panier', name: 'cart_index')]
    public function index(ManagerRegistry $managerRegistry, RequestStack $requestStack): Response{
        $productsSession = $requestStack->getSession()->get('products_cart');

        $priceTotal = 0.0;
        $productsList = [];
        if($productsSession != null){
            foreach($productsSession as $key => $value){
                $productItem = $managerRegistry->getRepository(Product::class)->find($key);
                $priceFinalItem = $value*$productItem->getPrice();
                $priceTotal = $priceTotal + $priceFinalItem;
                array_push($productsList, [$productItem->getName(), $productItem->getDescription(), $value, $priceFinalItem]);
            }
        }

        return $this->render('cart/cart.html.twig', ['products' => $productsList, 'priceTotal' => $priceTotal, 'numberProductOnCart' => ProductController::getNumberProductOnCart($requestStack)]);
    }

    #[Route('/panier/add', name: 'cart_add')]
    public function addToCart(Request $request, RequestStack $requestStack): Response{
        $nb_product = $request->request->get('nb_product');
        $id_product = $request->request->get('id_product');
        //var_dump($id_product);

        if($nb_product == null OR $id_product == null){
            $this->addFlash('danger', 'Aucun produit à ajouter');
            $this->redirectToRoute('product_list');
        }

        $session = $requestStack->getSession();
        $products = $session->get('products_cart', []);
        if(array_key_exists($id_product, $products)){
            $newNbProduct = $products[$id_product] + $nb_product;
            $newProductList = array($id_product => $newNbProduct);
            $products = array_replace($products, $newProductList);
        }else {
            $products[$id_product] = $nb_product;
        }

        var_dump($products);
        $session->remove('products_cart');
        $session->set('products_cart', $products);


        $this->addFlash('success', 'Produit ajouté à votre panier avec succèes');

        return $this->render('base.html.twig', ['numberProductOnCart' => ProductController::getNumberProductOnCart($requestStack)]);
    }

}