<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController{

    //Route avec l'URL /panier et le nom cart_index
    #[Route('/panier', name: 'cart_index')]
    public function index(ManagerRegistry $managerRegistry, RequestStack $requestStack): Response{
        //Je récupère la liste des produits contenue dans la session
        $productsSession = $requestStack->getSession()->get('products_cart');

        //Je retourne le rendue du fichier 'cart.html.twig' avec les variables en paramètres
        return $this->render('cart/cart.html.twig', ['products' => $this->getListProductInCart($managerRegistry, $productsSession), 'priceTotal' => $this->getTotalPrice($this->getProductsPrice($managerRegistry), $productsSession), 'numberProductOnCart' => self::getNumberProductOnCart($requestStack->getSession())]);
    }

    //Route avec l'URL /panier/add et le nom cart_add
    #[Route('/panier/add', name: 'cart_add')]
    public function addToCart(Request $request, RequestStack $requestStack): Response{
        //Je récupère les éléments de la page précédente
        $nb_product = $request->request->get('nb_product');
        $id_product = $request->request->get('id_product');

        //Si l'un des deux n'est pas inscrit alors je crée un messageFlash et je retourne sur la liste des produits
        if($nb_product == null OR $id_product == null){
            $this->addFlash('danger', 'Aucun produit à ajouter');
            $this->redirectToRoute('product_list');
        }


        //Je récupère la session actuelle de l'utilisateur
        $session = $requestStack->getSession();

        //Je récupère le tableau de produit qui est mits en session avec l'id 'products_cart' et s'il n'existe pas il retourne un tableau vide
        $products = $session->get('products_cart', []);

        //Je supprime le tableau de la session
        $session->remove('products_cart');
        //Je reset le nouveau tableau dans la session
        $session->set('products_cart', $this->addProductToCartList($products, $id_product, $nb_product));


        //Création d'un messageFlash quand cela marche
        $this->addFlash('success', 'Produit ajouté à votre panier avec succèes');

        //Je retourne vers la page principale
        return $this->redirectToRoute('cart_index');
    }

    //Route avec l'URL /panier/clear avec le nom 'cart_clear'
    #[Route('/panier/clear', 'cart_clear')]
    public function clearCart(Session $session){
        //Mis du tableau en session 'products_cart' sur un tableau vide
        $session->set("products_cart", []);

        //Redirection vers la page de panier
        return $this->redirectToRoute('cart_index');
    }



    /*
     * FONCTION
     */
    /**
     * @param $products
     * @param $id_product
     * @param $nb_product
     * @return array
     * Permet d'ajouter un produit ou de mettre à jour un tableau passer en paramètre
     */
    //Mets à jour ou ajoute le produit dans la liste des produits du panier
    public function addProductToCartList($products, $id_product, $nb_product): array{
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

        return $products;
    }

    /**
     * @param ManagerRegistry $managerRegistry
     * @param $productsSession
     * @return array
     * Retourne la liste des produits contenue dans la session
     */
    //Fonction qui retourne la liste des produits dans le panier pour l'affichage
    public function getListProductInCart(ManagerRegistry $managerRegistry, $productsSession): array{
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

                //"Je mets à jour la liste '$productsList' en y ajoutant un tableau contenant (le nom, la description, la quantité, le quantité et le prix final du produit)
                array_push($productsList, [$productItem->getName(), $productItem->getDescription(), $value, $priceFinalItem]);
            }
        }

        //Je retourne la liste des produits
        return $productsList;
    }

    /**
     * @param ManagerRegistry $managerRegistry
     * @return array
     * Retourne une liste contenant tous les prix des produits
     */
    public function getProductsPrice(ManagerRegistry $managerRegistry): array{
        //Creation d'une liste vide
        $productsPrice = array();

        //Recupération de la liste de tous les produits
        $products = $managerRegistry->getRepository(Product::class)->findAll();
        //Pour chaque produit dans la liste
        foreach($products as $item){
            //Je push dans la liste l'identifiant et le prix
            $productsPrice[$item->getId()] = $item->getPrice();
        }

        return $productsPrice;
    }

    /**
     * @param $productsPrice
     * @param $productsSession
     * @return float
     * Retourne un float qui désigne le prix total des produits contenu dans la liste 'productsSession'
     */
    //Fonction qui permet de calculer le cout total du panier
    public function getTotalPrice($productsPrice, $productsSession): float{
        //Je crée une variable globale et je lui assigne une valeur de 0
        $priceTotal = 0.0;

        //S'il y a des produits dans la session
        if($productsSession != null){
            //Pour chaque produit dans la liste, avec les clés dans la variable $key et les valeurs dans la variable $value
            foreach($productsSession as $key => $value){
                //Je crée une variable appelée 'courante' pour stocker le prix du produit en fonction de la quantité choisie
                $priceFinalItem = $value*$productsPrice[$key];
                //Je met à jour le prix final en ajoutant la valeur de la variable 'courante' au prix total
                $priceTotal = $priceTotal + $priceFinalItem;
            }
        }

        //Je retourne le prix total
        return $priceTotal;
    }

    /**
     * @param Session $session
     * @return int
     * Retourne le nombre de produits contenu dans la session
     */
    //Fonction qui permet de calculer le nombre de produits dans la session
    public static function getNumberProductOnCart(Session $session): int{
        //Recupération du tableau de produits stocké en session
        $productsOnCart = $session->get('products_cart');

        //Set la variable 'numberProductOnCart' qui désigne le nombre d'article dans la session à 0
        $numberProductOnCart = 0;

        //S'il y a des produits dans le tableau stocké en session
        if($productsOnCart != null){
            //Pour tous les éléments dans le tableau avec la clés $key et la valeur $value
            foreach ($productsOnCart as $key => $value){
                //Mise à jour de la variable 'numberProductOnCart' avec le nombre de produit actuel.
                $numberProductOnCart = $numberProductOnCart + $value;
            }
        }

        //Retourne le nombre de produit dans le panier
        return $numberProductOnCart;
    }

}