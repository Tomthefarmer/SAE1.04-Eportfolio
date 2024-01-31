<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnCvController extends AbstractController
{
    #[Route('/en/cv', name: 'app_en_cv')]
    public function index(): Response
    {
        return $this->render('en_cv/index.html.twig', [
            'controller_name' => 'EnCvController',
        ]);
    }
}
