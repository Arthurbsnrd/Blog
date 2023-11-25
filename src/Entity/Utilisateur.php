<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Utilisateur = null;
    #[ORM\Column(length: 255, nullable: true)]
private ?string $Nom = null;

#[ORM\Column(length: 255, nullable: true)]
private ?string $Prenom = null;

#[ORM\Column(length: 255, nullable: true)]
private ?string $Email = null;

#[ORM\Column(length: 255, nullable: true)]
private ?string $MotDePasse = null;

#[ORM\Column(type: "json", nullable: true)]
private array $Roles = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?string
    {
        return $this->Utilisateur;
    }

    public function setUtilisateur(?string $Utilisateur): static
    {
        $this->Utilisateur = $Utilisateur;

        return $this;
    }
    public function getNom(): ?string
{
    return $this->Nom;
}

public function setNom(?string $Nom): static
{
    $this->Nom = $Nom;

    return $this;
}

public function getPrenom(): ?string
{
    return $this->Prenom;
}

public function setPrenom(?string $Prenom): static
{
    $this->Prenom = $Prenom;

    return $this;
}

public function getEmail(): ?string
{
    return $this->Email;
}
public function setEmail(?string $Email): static
{
    $this->Email = $Email;

    return $this;
}

public function getMotDePasse(): ?string
{
    return $this->MotDePasse;
}

public function setMotDePasse(?string $MotDePasse): static
{
    $this->MotDePasse = $MotDePasse;

    return $this;
}

public function getRoles(): array
{
    return $this->Roles;
}

public function setRoles(array $Roles): static
{
    $this->Roles = $Roles;

    return $this;
}
}
