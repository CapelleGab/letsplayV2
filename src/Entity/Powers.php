<?php

namespace App\Entity;

use App\Repository\PowersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PowersRepository::class)]
class Powers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $imageURL = null;

    #[ORM\Column(length: 50)]
    private ?string $attack = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getImageURL(): ?string
    {
        return $this->imageURL;
    }

    public function setImageURL(string $imageURL): static
    {
        $this->imageURL = $imageURL;

        return $this;
    }

    public function getAttack(): ?string
    {
        return $this->attack;
    }

    public function setAttack(string $attack): static
    {
        $this->attack = $attack;

        return $this;
    }
}
