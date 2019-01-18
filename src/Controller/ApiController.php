<?php

namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ApiController extends AbstractController
{
    public function initSerializer()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];;
        $serializer = new Serializer($normalizers, $encoders);

        return $serializer;
    }

    /**
     * @Route("/listProperties", name="listAllProperties")
     */
    public function listProperties(PropertyRepository $propertyRepository)
    {
        $serializer = $this->initSerializer();

        $allProperties = $propertyRepository->findAll();

        $jsonContent = $serializer->serialize($allProperties, 'json');

// $jsonContent contains {"name":"foo","age":99,"sportsperson":false,"createdAt":null}

        // echo $jsonContent; // or return it in a Response

        return $jsonContent;
    }

    /**
     * @Route("/listProperties/{id}", name="getPropertyById")
     */
    public function listPropertyById(int $id, PropertyRepository $propertyRepository)
    {
        $serializer = $this->initSerializer();

        $getProperty = $propertyRepository->find($id);

        $jsonContent = $serializer->serialize($getProperty, 'json');

        return $jsonContent;
    }

    /**
     * @Route("/listAvailabilities", name="listAllAvailabilities")
     */
    public function listAvailabilities(PropertyRepository $propertyRepository)
    {
        $serializer = $this->initSerializer();

        $allAvailabilities = $propertyRepository->findAll();

        $jsonContent = $serializer->serialize($allAvailabilities, 'json');

        return $jsonContent;
    }

    /**
     * @Route("/listAvailabilities/{id}", name="getAvailabilitiesById")
     */
    public function getAvailabilityById(int $id, PropertyRepository $propertyRepository)
    {
        $serializer = $this->initSerializer();

        $getAvailability = $propertyRepository->find($id);

        $jsonContent = $serializer->serialize($getAvailability, 'json');

        return $jsonContent;
    }

    /**
     * @Route("/listMembers", name="listAllMembers")
     */
    public function listMembers(PropertyRepository $propertyRepository)
    {
        $serializer = $this->initSerializer();

        $allProperties = $propertyRepository->findAll();

        $jsonContent = $serializer->serialize($allProperties, 'json');

// $jsonContent contains {"name":"foo","age":99,"sportsperson":false,"createdAt":null}

        // echo $jsonContent; // or return it in a Response

        return $jsonContent;
    }

    /**
     * @Route("/listMembers/{id}", name="getMemberById")
     */
    public function listMemberById(int $id, PropertyRepository $propertyRepository)
    {
        $serializer = $this->initSerializer();

        $getProperty = $propertyRepository->find($id);

        $jsonContent = $serializer->serialize($getProperty, 'json');

        return $jsonContent;
    }

    /**
     * @Route("/listOpinions", name="listAllOpinions")
     */
    public function listOpinions(PropertyRepository $propertyRepository)
    {
        $serializer = $this->initSerializer();

        $allAvailabilities = $propertyRepository->findAll();

        $jsonContent = $serializer->serialize($allAvailabilities, 'json');

        return $jsonContent;
    }

    /**
     * @Route("/listOpinions/{id}", name="getOpinionById")
     */
    public function getOpinionById(int $id,PropertyRepository $propertyRepository)
    {
        $serializer = $this->initSerializer();

        $getAvailability = $propertyRepository->find($id);

        $jsonContent = $serializer->serialize($getAvailability, 'json');

        return $jsonContent;
    }
}
