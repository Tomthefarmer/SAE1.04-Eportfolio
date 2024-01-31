<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnAproposController extends AbstractController
{
    #[Route('/en/apropos', name: 'app_en_apropos')]
    public function index(): Response
    {
        return $this->render('en_apropos/index.html.twig', [
            'controller_name' => 'EnAproposController',
        ]);
    }
}
