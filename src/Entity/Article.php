<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Categorie;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Article = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
private ?string $titre = null;

#[ORM\Column(type: "text", nullable: true)]
private ?string $contenu = null;

#[ORM\Column(type: "datetime", options: ["default" => "CURRENT_TIMESTAMP"])]
private ?\DateTimeInterface $dateCreation;

#[ORM\Column(length: 255, nullable: true)]
private ?string $etat = null;

#[ORM\Column(type: "datetime", nullable: true)]
private ?\DateTimeInterface $dateParution;

#[ORM\ManyToOne(targetEntity: Utilisateur::class)]
private $auteur;

#[ORM\ManyToOne(targetEntity: Categorie::class)]
private $categorie;


public function getTitre(): ?string
{
    return $this->titre;
}

public function setTitre(string $titre): self
{
    $this->titre = $titre;

    return $this;
}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticle(): ?string
    {
        return $this->Article;
    }

    public function setArticle(?string $Article): static
    {
        $this->Article = $Article;

        return $this;
    }

public function getContenu(): ?string
{
    return $this->contenu;
}

public function setContenu(?string $contenu): self
{
    $this->contenu = $contenu;

    return $this;
}

public function getDateCreation(): ?\DateTimeInterface
{
    return $this->dateCreation;
}
public function setDateCreation(?\DateTimeInterface $dateCreation): self
{
    $this->dateCreation = $dateCreation;

    return $this;
}

public function getEtat(): ?string
{
    return $this->etat;
}

public function setEtat(?string $etat): self
{
    $this->etat = $etat;

    return $this;
}

public function getDateParution(): ?\DateTimeInterface
{
    return $this->dateParution;
}

public function setDateParution(?\DateTimeInterface $dateParution): self
{
    $this->dateParution = $dateParution;

    return $this;
}

public function getAuteur(): ?Utilisateur
{
    return $this->auteur;
}

public function setAuteur(?Utilisateur $auteur): self
{
    $this->auteur = $auteur;

    return $this;
}

public function getCategorie():?Categorie
{
    return $this->categorie;
}

public function setCategorie(?Categorie $categorie): self
{
    $this->categorie = $categorie;

    return $this;
}
public function __toString(): string
{
    return $this->getTitre() ?? '';
}

}
