<?php

namespace App\Entity;

use App\Repository\VolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VolRepository::class)]
class Vol
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer le numero de vol')]
    #[Assert\Length(
        min: 6,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    private ?string $numeroVol = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDepart = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateArrivee = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer le lieu de depart')]
    #[Assert\Length(
        min: 4,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    private ?string $LieuDepart = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer le lieu arrivee')]
    #[Assert\Length(
        min: 4,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    private ?string $LieuArrivee = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer la compagnie aerienne')]
    #[Assert\Length(
        min: 4,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    private ?string $compagnieAerienne = null;
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagePath = null;
    #[ORM\OneToMany(mappedBy: 'Vol', targetEntity: Billet::class)]
    private Collection $billets;

    public function __toString(): string
    {
        // Concatenate relevant properties to create a string representation
        return $this->numeroVol . ' - ' . $this->LieuDepart . ' to ' . $this->LieuArrivee;
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroVol(): ?string
    {
        return $this->numeroVol;
    }

    public function setNumeroVol(string $numeroVol): self
    {
        $this->numeroVol = $numeroVol;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getLieuDepart(): ?string
    {
        return $this->LieuDepart;
    }

    public function setLieuDepart(string $LieuDepart): self
    {
        $this->LieuDepart = $LieuDepart;

        return $this;
    }

    public function getLieuArrivee(): ?string
    {
        return $this->LieuArrivee;
    }

    public function setLieuArrivee(string $LieuArrivee): self
    {
        $this->LieuArrivee = $LieuArrivee;

        return $this;
    }

    public function getCompagnieAerienne(): ?string
    {
        return $this->compagnieAerienne;
    }

    public function setCompagnieAerienne(string $compagnieAerienne): self
    {
        $this->compagnieAerienne = $compagnieAerienne;

        return $this;
    }

    /**
     * @return Collection<int, Billet>
     */
    public function getBillets(): Collection
    {
        return $this->billets;
    }

    public function addBillet(Billet $billet): self
    {
        if (!$this->billets->contains($billet)) {
            $this->billets->add($billet);
            $billet->setVol($this);
        }

        return $this;
    }

    public function removeBillet(Billet $billet): self
    {
        if ($this->billets->removeElement($billet)) {
            // set the owning side to null (unless already changed)
            if ($billet->getVol() === $this) {
                $billet->setVol(null);
            }
        }

        return $this;
            }
        public function getImagePath(): ?string
        {
            return $this->imagePath;
        }

        public function setImagePath(?string $imagePath): self
        {
            $this->imagePath = $imagePath;

            return $this;
        }


}
