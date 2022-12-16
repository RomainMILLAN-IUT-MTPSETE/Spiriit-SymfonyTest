<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController{

    #[Route('/produits', name: 'product_list')]
    public function list(): Response{
        return $this->render('products/list.html.twig');
    }

}