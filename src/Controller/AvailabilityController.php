<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AvailabilityController extends AbstractController
{
    /**
     * @Route("/availability", name="availability")
     */
    public function index()
    {
        return $this->render('availability/index.html.twig', [
            'controller_name' => 'AvailabilityController',
        ]);
    }
}
