<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListpracticiensController extends AbstractController
{
    /**
     * @Route("/listpracticiens", name="listpracticiens")
     */
    public function index(): Response
    {
        return $this->render('listpracticiens/index.html.twig', [
            'controller_name' => 'ListpracticiensController',
        ]);
    }
}
