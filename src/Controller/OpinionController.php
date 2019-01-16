<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OpinionController extends AbstractController
{
    /**
     * @Route("/opinion", name="opinion")
     */
    public function index()
    {
        return $this->render('opinion/index.html.twig', [
            'controller_name' => 'OpinionController',
        ]);
    }
}
