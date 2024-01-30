<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrAccueilController extends AbstractController
{
    #[Route('/fr/accueil', name: 'app_fr_accueil')]
    public function index(): Response
    {
        return $this->render('fr_accueil/index.html.twig', [
            'controller_name' => 'FrAccueilController',
        ]);
    }
}
