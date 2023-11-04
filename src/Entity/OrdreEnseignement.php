<?php

namespace App\Entity;

use App\Repository\OrdreEnseignementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdreEnseignementRepository::class)]
class OrdreEnseignement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ordreEnseignement = null;

    #[ORM\OneToMany(mappedBy: 'ordreEnseignement', targetEntity: Etablissement::class)]
    private Collection $etablissements;

    public function __construct()
    {
        $this->etablissements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdreEnseignement(): ?string
    {
        return $this->ordreEnseignement;
    }

    public function setOrdreEnseignement(string $ordreEnseignement): self
    {
        $this->ordreEnseignement = $ordreEnseignement;

        return $this;
    }

    /**
     * @return Collection<int, Etablissement>
     */
    public function getEtablissements(): Collection
    {
        return $this->etablissements;
    }

    public function addEtablissement(Etablissement $etablissement): self
    {
        if (!$this->etablissements->contains($etablissement)) {
            $this->etablissements->add($etablissement);
            $etablissement->setOrdreEnseignement($this);
        }

        return $this;
    }

    public function removeEtablissement(Etablissement $etablissement): self
    {
        if ($this->etablissements->removeElement($etablissement)) {
            // set the owning side to null (unless already changed)
            if ($etablissement->getOrdreEnseignement() === $this) {
                $etablissement->setOrdreEnseignement(null);
            }
        }

        return $this;
    }
}
