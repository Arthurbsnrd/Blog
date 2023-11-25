<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Categorie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private $titre;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(?string $Categorie): static
    {
        $this->Categorie = $Categorie;

        return $this;
    }
    public function getTitre(): ?string
{
    return $this->titre;
}

public function setTitre(?string $titre): static
{
    $this->titre = $titre;

    return $this;
}
public function __toString(): string
{
    return $this->getCategorie() ?? '';
}
}
