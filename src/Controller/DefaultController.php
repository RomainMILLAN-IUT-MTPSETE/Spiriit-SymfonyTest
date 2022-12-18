<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController{

    //Route avec l'URL / et le nom homepage
    #[Route('/', name: 'homepage')]
    public function homepage(RequestStack $requestStack): Response{
        //Retourne le rendu de la page base.html.twig avec les paramètres 'numberProductOnCart'
        return $this->render('base.html.twig', ['numberProductOnCart' => CartController::getNumberProductOnCart($requestStack->getSession())]);
    }

}