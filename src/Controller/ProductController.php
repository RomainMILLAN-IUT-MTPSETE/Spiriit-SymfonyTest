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
        return $this->render('products/list.html.twig', ['products' => $products, 'numberProductOnCart' => CartController::getNumberProductOnCart($requestStack->getSession())]);
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
        return $this->render('products/show.html.twig', ['product' => $product, 'numberProductOnCart' => CartController::getNumberProductOnCart($requestStack->getSession())]);
    }

}