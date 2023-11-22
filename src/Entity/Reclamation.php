<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(type: "text", length: 255)]
    #[Assert\NotBlank(message: "Le nom du type de réclamation ne peut pas être vide.")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "Le contenu doit avoir au moins {{ limit }} caractères.",
        maxMessage: "Le contenu ne peut pas dépasser {{ limit }} caractères."
    )]
    private $contenu;

    #[ORM\ManyToOne(targetEntity: "App\Entity\TypeReclamation", inversedBy: "reclamations")]
    #[ORM\JoinColumn(nullable: false)]
    private $typeReclamation;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "L'email ne peut pas être vide.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas une adresse email valide.")]
    private $email;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide.")]
    private $nom;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le prénom ne peut pas être vide.")]
    private $prenom;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le téléphone ne peut pas être vide.")]
    private $telephone;

    // Getters and Setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getTypeReclamation(): ?TypeReclamation
    {
        return $this->typeReclamation;
    }

    public function setTypeReclamation(?TypeReclamation $typeReclamation): self
    {
        $this->typeReclamation = $typeReclamation;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }
}
