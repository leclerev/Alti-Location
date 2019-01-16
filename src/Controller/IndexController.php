<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Member;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
//        $entityManager = $this->getDoctrine()->getManager();
//
//        $product = new Member();
//        $product->setName('Bob');
//        $product->setSurname('marcel');
//        $product->setMail('marcel@bbobobobobob.gg');
//        $product->setPhone('0606060606');
//        $product->setPassword('vzhnNMOZGNYZONYNPRI');
//
//        // tell Doctrine you want to (eventually) save the Product (no queries yet)
//        $entityManager->persist($product);
//
//        // actually executes the queries (i.e. the INSERT query)
//        $entityManager->flush();
//
//        return new Response('Saved new product with id '.$product->getId()); // return json for data bdd

        return $this->render('index/index.html.twig', [
        ]);
    }
}
