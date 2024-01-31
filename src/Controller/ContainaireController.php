<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContainaireController extends AbstractController
{
    #[Route('/containaire', name: 'app_containaire')]
    public function index(): Response
    {
        return $this->render('containaire/index.html.twig', [
            'controller_name' => 'ContainaireController',
        ]);
    }
}
