<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListcompterenduController extends AbstractController
{
    /**
     * @Route("/listcompterendu", name="listcompterendu")
     */
    public function index(): Response
    {
        return $this->render('listcompterendu/index.html.twig', [
            'controller_name' => 'ListcompterenduController',
        ]);
    }
}
