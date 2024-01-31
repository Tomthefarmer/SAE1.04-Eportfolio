<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnAccueilController extends AbstractController
{
    #[Route('/en/accueil', name: 'app_en_accueil')]
    public function index(): Response
    {
        return $this->render('en_accueil/index.html.twig', [
            'controller_name' => 'EnAccueilController',
        ]);
    }
}
