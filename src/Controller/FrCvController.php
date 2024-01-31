<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrCvController extends AbstractController
{
    #[Route('/fr/cv', name: 'app_fr_cv')]
    public function index(): Response
    {
        return $this->render('fr_cv/index.html.twig', [
            'controller_name' => 'FrCvController',
        ]);
    }
}
