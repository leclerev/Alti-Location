<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyRepository")
 */
class Property
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
    private $id_member;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_availability;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $room_count;

    /**
     * @ORM\Column(type="integer")
     */
    private $people_count;

    /**
     * @ORM\Column(type="integer")
     */
    private $bed_count;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="boolean")
     */
    private $smoker;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pets;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMember(): ?int
    {
        return $this->id_member;
    }

    public function setIdMember(int $id_member): self
    {
        $this->id_member = $id_member;

        return $this;
    }

    public function getIdAvailability(): ?int
    {
        return $this->id_availability;
    }

    public function setIdAvailability(int $id_availability): self
    {
        $this->id_availability = $id_availability;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getRoomCount(): ?int
    {
        return $this->room_count;
    }

    public function setRoomCount(int $room_count): self
    {
        $this->room_count = $room_count;

        return $this;
    }

    public function getPeopleCount(): ?int
    {
        return $this->people_count;
    }

    public function setPeopleCount(int $people_count): self
    {
        $this->people_count = $people_count;

        return $this;
    }

    public function getBedCount(): ?int
    {
        return $this->bed_count;
    }

    public function setBedCount(int $bed_count): self
    {
        $this->bed_count = $bed_count;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSmoker(): ?bool
    {
        return $this->smoker;
    }

    public function setSmoker(bool $smoker): self
    {
        $this->smoker = $smoker;

        return $this;
    }

    public function getPets(): ?bool
    {
        return $this->pets;
    }

    public function setPets(bool $pets): self
    {
        $this->pets = $pets;

        return $this;
    }
}
