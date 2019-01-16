<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FavoritesRepository")
 */
class Favorites
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_membre;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_advert;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMembre(): ?int
    {
        return $this->id_membre;
    }

    public function setIdMembre(int $id_membre): self
    {
        $this->id_membre = $id_membre;

        return $this;
    }

    public function getIdAdvert(): ?int
    {
        return $this->id_advert;
    }

    public function setIdAdvert(int $id_advert): self
    {
        $this->id_advert = $id_advert;

        return $this;
    }
}
