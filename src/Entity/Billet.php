<?php

namespace App\Entity;

use App\Repository\BilletRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BilletRepository::class)]
class Billet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer le numero siege')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'The number must be at least {{ limit }} characters',
        maxMessage: 'The number cannot exceed {{ limit }} characters'
    )]
    private ?string $numeroSiege = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Entrer le prix')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'The price must be at least {{ limit }} characters',
        maxMessage: 'The price cannot exceed {{ limit }} characters'
    )]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer la classe')]
    #[Assert\Length(
        min: 1,
        max: 255,
        minMessage: 'The class must be at least {{ limit }} characters',
        maxMessage: 'The class cannot exceed {{ limit }} characters'
    )]
    private ?string $classe = null;

    #[ORM\ManyToOne(inversedBy: 'billets')]
    private ?Vol $Vol = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroSiege(): ?string
    {
        return $this->numeroSiege;
    }

    public function setNumeroSiege(string $numeroSiege): self
    {
        $this->numeroSiege = $numeroSiege;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getVol(): ?Vol
    {
        return $this->Vol;
    }

    public function setVol(?Vol $Vol): self
    {
        $this->Vol = $Vol;

        return $this;
    }
}
