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

    //Route avec l'URL /panier et le nom cart_index
    #[Route('/panier', name: 'cart_index')]
    public function index(ManagerRegistry $managerRegistry, RequestStack $requestStack): Response{
        //Je récupère la liste des produits contenue dans la session
        $productsSession = $requestStack->getSession()->get('products_cart');

        //Je crée une variable globale et je lui assigne une valeur de 0
        $priceTotal = 0.0;
        //Je crée une liste vide
        $productsList = [];
        //S'il y a des produits dans la session
        if($productsSession != null){
            //Pour chaque produit dans la liste, avec les clés dans la variable $key et les valeurs dans la variable $value
            foreach($productsSession as $key => $value){
                //Je récupère le produit courant à partir de la base de données
                $productItem = $managerRegistry->getRepository(Product::class)->find($key);
                //Je crée une variable appelée 'courante' pour stocker le prix du produit en fonction de la quantité choisie
                $priceFinalItem = $value*$productItem->getPrice();
                //Je met à jour le prix final en ajoutant la valeur de la variable 'courante' au prix total
                $priceTotal = $priceTotal + $priceFinalItem;

                //"Je mets à jour la liste '$productsList' en y ajoutant un tableau contenant (le nom, la description, la quantité, le quantité et le prix final du produit)
                array_push($productsList, [$productItem->getName(), $productItem->getDescription(), $value, $priceFinalItem]);
            }
        }

        //Je retourne le rendue du fichier 'cart.html.twig' avec les variables en paramètres
        return $this->render('cart/cart.html.twig', ['products' => $productsList, 'priceTotal' => $priceTotal, 'numberProductOnCart' => ProductController::getNumberProductOnCart($requestStack)]);
    }

    //Route avec l'URL /panier/add et le nom cart_add
    #[Route('/panier/add', name: 'cart_add')]
    public function addToCart(Request $request, RequestStack $requestStack): Response{
        //Je get les éléments de la page précédente
        $nb_product = $request->request->get('nb_product');
        $id_product = $request->request->get('id_product');

        //Si l'un des deux n'est pas inscrit alors je crée un messageFlash et je retour sur la liste des produits
        if($nb_product == null OR $id_product == null){
            $this->addFlash('danger', 'Aucun produit à ajouter');
            $this->redirectToRoute('product_list');
        }

        //Je get la sessions actuelle de l'utilisateur
        $session = $requestStack->getSession();
        //Je get le tableau de produit qui est mits en session avec l'id 'products_cart' et si il n'existe pas il retour un tableau vide
        $products = $session->get('products_cart', []);
        //Si l'identifiant du produit que l'utilsiateur existe
        if(array_key_exists($id_product, $products)){
            //Je calcule le nouveau nombre de produit
            $newNbProduct = $products[$id_product] + $nb_product;
            //Je remplace l'ancien produit par le nouveau
            $products = array_replace($products, array($id_product => $newNbProduct));
        }else {
            //Sinon je l'ajoute dans la liste
            $products[$id_product] = $nb_product;
        }

        //Je supprime le tableau de la session
        $session->remove('products_cart');
        //Je reset le nouveau tableau dans la session
        $session->set('products_cart', $products);


        //Je crée un messageFlash quand cela marche
        $this->addFlash('success', 'Produit ajouté à votre panier avec succèes');

        //Je retourne vers la page principale
        return $this->redirectToRoute('cart_index');
    }

}