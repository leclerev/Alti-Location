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
     * @ORM\ManyToOne(targetEntity="App\Entity\Member", inversedBy="properties")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Availability", mappedBy="property", orphanRemoval=true)
     */
    private $availability;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Opinion", mappedBy="property")
     */
    private $opinion;

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
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pay_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $due_date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $img_path;

    public function __construct()
    {
        $this->availability = new ArrayCollection();
        $this->opinion = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?Member
    {
        return $this->author;
    }

    public function setAuthor(?Member $author): self
    {
        $this->author = $author;

        return $this;
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

    /**
     * @return Collection|Opinion[]
     */
    public function getOpinion(): Collection
    {
        return $this->opinion;
    }

    public function addOpinion(Opinion $opinion): self
    {
        if (!$this->opinion->contains($opinion)) {
            $this->opinion[] = $opinion;
            $opinion->setProperty($this);
        }

        return $this;
    }

    public function removeOpinion(Opinion $opinion): self
    {
        if ($this->opinion->contains($opinion)) {
            $this->opinion->removeElement($opinion);
            // set the owning side to null (unless already changed)
            if ($opinion->getProperty() === $this) {
                $opinion->setProperty(null);
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPayType(): ?string
    {
        return $this->pay_type;
    }

    public function setPayType(string $pay_type): self
    {
        $this->pay_type = $pay_type;

        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->due_date;
    }

    public function setDueDate(string $due_date): self
    {
        $this->due_date = $due_date;

        return $this;
    }

    public function getImgPath(): ?string
    {
        return $this->img_path;
    }

    public function setImgPath(?string $img_path): self
    {
        $this->img_path = $img_path;

        return $this;
    }
}
