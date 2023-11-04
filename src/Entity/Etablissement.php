<?php

namespace App\Entity;

use App\Repository\EtablissementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtablissementRepository::class)]
class Etablissement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomEtablissement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $matricule = null;

    #[ORM\ManyToOne(inversedBy: 'etablissements')]
    private ?Arrondissement $arrondissement = null;

    #[ORM\ManyToOne(inversedBy: 'etablissements')]
    private ?OrdreEnseignement $ordreEnseignement = null;

    #[ORM\ManyToOne(inversedBy: 'etablissements')]
    private ?TypeEnseignement $typeEnseignement = null;

    #[ORM\ManyToOne(inversedBy: 'etablissements')]
    private ?TypeCours $typeCours = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contact = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEtablissement(): ?string
    {
        return $this->nomEtablissement;
    }

    public function setNomEtablissement(?string $nomEtablissement): self
    {
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getArrondissement(): ?Arrondissement
    {
        return $this->arrondissement;
    }

    public function setArrondissement(?Arrondissement $arrondissement): self
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    public function getOrdreEnseignement(): ?OrdreEnseignement
    {
        return $this->ordreEnseignement;
    }

    public function setOrdreEnseignement(?OrdreEnseignement $ordreEnseignement): self
    {
        $this->ordreEnseignement = $ordreEnseignement;

        return $this;
    }

    public function getTypeEnseignement(): ?TypeEnseignement
    {
        return $this->typeEnseignement;
    }

    public function setTypeEnseignement(?TypeEnseignement $typeEnseignement): self
    {
        $this->typeEnseignement = $typeEnseignement;

        return $this;
    }

    public function getTypeCours(): ?TypeCours
    {
        return $this->typeCours;
    }

    public function setTypeCours(?TypeCours $typeCours): self
    {
        $this->typeCours = $typeCours;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }
}
