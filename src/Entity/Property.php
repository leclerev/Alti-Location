<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToMany(targetEntity="App\Entity\Availability", mappedBy="property")
     */
    private $availability;

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

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Advert", mappedBy="property", cascade={"persist", "remove"})
     */
    private $advert;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Member", inversedBy="property")
     * @ORM\JoinColumn(nullable=false)
     */
    private $member;

    public function __construct()
    {
        $this->availability = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Availability[]
     */
    public function getAvailability(): Collection
    {
        return $this->availability;
    }

    public function addAvailability(Availability $availability): self
    {
        if (!$this->availability->contains($availability)) {
            $this->availability[] = $availability;
            $availability->setProperty($this);
        }

        return $this;
    }

    public function removeAvailability(Availability $availability): self
    {
        if ($this->availability->contains($availability)) {
            $this->availability->removeElement($availability);
            // set the owning side to null (unless already changed)
            if ($availability->getProperty() === $this) {
                $availability->setProperty(null);
            }
        }

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

    public function getAdvert(): ?Advert
    {
        return $this->advert;
    }

    public function setAdvert(Advert $advert): self
    {
        $this->advert = $advert;

        // set the owning side of the relation if necessary
        if ($this !== $advert->getProperty()) {
            $advert->setProperty($this);
        }

        return $this;
    }

    public function getMember(): ?Member
    {
        return $this->member;
    }

    public function setMember(?Member $member): self
    {
        $this->member = $member;

        return $this;
    }
}
