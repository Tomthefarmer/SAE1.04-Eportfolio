<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnConnexionController extends AbstractController
{
    #[Route('/en/connexion', name: 'app_en_connexion')]
    public function index(): Response
    {
        return $this->render('en_connexion/index.html.twig', [
            'controller_name' => 'EnConnexionController',
        ]);
    }
}
