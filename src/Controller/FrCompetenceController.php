<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrCompetenceController extends AbstractController
{
    #[Route('/fr/competence', name: 'app_fr_competence')]
    public function index(): Response
    {
        return $this->render('fr_competence/index.html.twig', [
            'controller_name' => 'FrCompetenceController',
        ]);
    }
}
