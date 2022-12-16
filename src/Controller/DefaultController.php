<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController{

    #[Route('/', name: 'homepage')]
    public function homepage(): Response{
        $urlProductList = $this->redirectToRoute('product_list');
        return $urlProductList;
    }

    #[Route('/session/clear', name: 'session_clear')]
    public function clearSession(RequestStack $requestStack): Response{
        $requestStack->getSession()->clear();
        return $this->redirectToRoute('homepage');
    }

}