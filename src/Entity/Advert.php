<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdvertRepository")
 */
class Advert
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="Property")
     */
    private $id_property;

    /**
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="Member")
     * @ORM\JoinColumn(name="id_member", referencedColumnName="id")
     */
    private $id_member;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
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
     * @ORM\Column(type="string", length=255)
     */
    private $img_path;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdMember(): ?int
    {
        return $this->id_member;
    }

    public function setIdMember(int $id_member): self
    {
        $this->id_member = $id_member;

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

    public function setImgPath(string $img_path): self
    {
        $this->img_path = $img_path;

        return $this;
    }
}
