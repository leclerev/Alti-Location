<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AvailabilityRepository")
 */
class Availability
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_availability;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_property;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    public function getIdAvailability(): ?int
    {
        return $this->id_availability;
    }

    public function getIdProperty(): ?int
    {
        return $this->id_property;
    }

    public function setIdProperty(int $id_property): self
    {
        $this->id_property = $id_property;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
