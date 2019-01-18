<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/colo", name="default")
     */
    public function colo()
    {
        return $this->render('default/colo.html.twig', [
        ]);
    }

    /**
     * @Route("/navbar", name="navbar")
     */
    public function navbar()
    {
        return $this->render('default/navbar.html.twig', [
        ]);
    }
}


