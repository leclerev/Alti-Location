<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/listProperties", name="api")
     */
    public function listProperties()
    {
        $person = new App\Model\Property();
        $person->setName('foo');
        $person->setAge(99);
        $person->setSportsperson(false);

        $jsonContent = $serializer->serialize($person, 'json');

// $jsonContent contains {"name":"foo","age":99,"sportsperson":false,"createdAt":null}

        echo $jsonContent; // or return it in a Response

        return $response;
    }
}
