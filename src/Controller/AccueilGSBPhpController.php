<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilGSBPhpController extends AbstractController
{
    /**
     * @Route("/accueil_gsb_php", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('accueil_gsb_php/index.html.twig', [
            'controller_name' => 'AccueilGSBPhpController',
        ]);
    }
}
