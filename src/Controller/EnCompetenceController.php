<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnCompetenceController extends AbstractController
{
    #[Route('/en/competence', name: 'app_en_competence')]
    public function index(): Response
    {
        return $this->render('en_competence/index.html.twig', [
            'controller_name' => 'EnCompetenceController',
        ]);
    }
}
