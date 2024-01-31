<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrAproposController extends AbstractController
{
    #[Route('/fr/apropos', name: 'app_fr_apropos')]
    public function index(): Response
    {
        return $this->render('fr_apropos/index.html.twig', [
            'controller_name' => 'FrAproposController',
        ]);
    }
}
