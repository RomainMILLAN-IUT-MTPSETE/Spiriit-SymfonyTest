<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController{

    //Route avec l'URL /produits et le nom 'product_list'
    #[Route('/produits', name: 'product_list')]
    public function list(ManagerRegistry $doctrine, RequestStack $requestStack): Response{
        //Récupération du manager
        $entityManager = $doctrine->getManager();

        //Récupération de tous les produit par ordre de nom ASCENDANT
        $products = $entityManager->getRepository(Product::class)->findBy(array(), array('name' => 'ASC'));

        //Retourne le rendu de la page products/list.html.twig avec tous les paramètres
        return $this->render('products/list.html.twig', ['products' => $products, 'numberProductOnCart' => self::getNumberProductOnCart($requestStack)]);
    }

    //Route avec l'URL /produits/ avec un identifiant de produit et le nom 'product_show'
    #[Route('/produits/{id}', name: 'product_show')]
    public function show(ManagerRegistry $doctrine, int $id, RequestStack $requestStack): Response{
        //Si l'identifiant passer en paramètre est < 1
        if($id < 1){
            //Redirection vers la liste des produits
            return $this->redirectToRoute('product_list');
        }

        //Récupération du manager
        $entityManager = $doctrine->getManager();

        //Récupération du produit avec l'identifiant $id
        $product = $entityManager->getRepository(Product::class)->find($id);

        //Si le produit existe pas
        if(!$product){
            //Retourne une exception
            throw $this->createNotFoundException('Produit avec l\'identifiant '.$id.' non trouvé');
        }

        //Retourne le rendu de la page products/show.html.twig avec les paramètres
        return $this->render('products/show.html.twig', ['product' => $product, 'numberProductOnCart' => self::getNumberProductOnCart($requestStack)]);
    }


    //Fonction qui permet de calculer le nombre de produits dans la session
    public static function getNumberProductOnCart(RequestStack $requestStack): int{
        //Recupération du tableau de produits stocké en session
        $productsOnCart = $requestStack->getSession()->get('products_cart');
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