<?php

namespace App\Entity;

use App\Repository\SousCentreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCentreRepository::class)]
class SousCentre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sousCentre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSousCentre(): ?string
    {
        return $this->sousCentre;
    }

    public function setSousCentre(?string $sousCentre): self
    {
        $this->sousCentre = $sousCentre;

        return $this;
    }
}
