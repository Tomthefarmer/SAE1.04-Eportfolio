<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrConnexionController extends AbstractController
{
    #[Route('/fr/connexion', name: 'app_fr_connexion')]
    public function index(): Response
    {
        return $this->render('fr_connexion/index.html.twig', [
            'controller_name' => 'FrConnexionController',
        ]);
    }
}
