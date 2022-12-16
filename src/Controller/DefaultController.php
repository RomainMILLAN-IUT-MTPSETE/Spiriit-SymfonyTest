<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController{

    #[Route('/', name: 'homepage')]
    public function homepage(RequestStack $requestStack): Response{
        return $this->render('base.html.twig', ['numberProductOnCart' => ProductController::getNumberProductOnCart($requestStack)]);
    }

    #[Route('/session/clear', name: 'session_clear')]
    public function clearSession(RequestStack $requestStack): Response{
        $requestStack->getSession()->clear();
        return $this->redirectToRoute('homepage');
    }

}