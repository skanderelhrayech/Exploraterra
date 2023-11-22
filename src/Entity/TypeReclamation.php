<?php

namespace App\Entity;

use App\Repository\TypeReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


#[ORM\Entity(repositoryClass: TypeReclamationRepository::class)]
class TypeReclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(type: "string", length: 255)]
    private $nom;

    #[ORM\OneToMany(targetEntity: "App\Entity\Reclamation", mappedBy: "typeReclamation")]
    private $reclamations;

    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
    }

    // Getters and Setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Reclamation[]
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }
     

    public function __toString()
    {
        return $this->nom; // Return whatever property or representation you want
    }
}

