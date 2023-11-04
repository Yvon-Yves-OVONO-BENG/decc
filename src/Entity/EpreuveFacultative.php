<?php

namespace App\Entity;

use App\Repository\EpreuveFacultativeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EpreuveFacultativeRepository::class)]
class EpreuveFacultative
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $epreuveFacultative = null;

    #[ORM\OneToMany(mappedBy: 'epreuveFacultative', targetEntity: Candidat::class)]
    private Collection $candidats;

    public function __construct()
    {
        $this->candidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEpreuveFacultative(): ?string
    {
        return $this->epreuveFacultative;
    }

    public function setEpreuveFacultative(?string $epreuveFacultative): self
    {
        $this->epreuveFacultative = $epreuveFacultative;

        return $this;
    }

    /**
     * @return Collection<int, Candidat>
     */
    public function getCandidats(): Collection
    {
        return $this->candidats;
    }

    public function addCandidat(Candidat $candidat): self
    {
        if (!$this->candidats->contains($candidat)) {
            $this->candidats->add($candidat);
            $candidat->setEpreuveFacultative($this);
        }

        return $this;
    }

    public function removeCandidat(Candidat $candidat): self
    {
        if ($this->candidats->removeElement($candidat)) {
            // set the owning side to null (unless already changed)
            if ($candidat->getEpreuveFacultative() === $this) {
                $candidat->setEpreuveFacultative(null);
            }
        }

        return $this;
    }
}
