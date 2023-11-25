<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Commentaire = null;


#[ORM\Column(type: "boolean", options: ["default" => true])]
private bool $etat = true;

#[ORM\ManyToOne(targetEntity: Utilisateur::class)]
private $auteur;

#[ORM\ManyToOne(targetEntity: Article::class)]
private $article;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?string $Commentaire): static
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }

public function getEtat(): ?bool
{
    return $this->etat;
}

public function setEtat(?bool $etat): self
{
    $this->etat = $etat;

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

public function getArticle(): ?Article
{
    return $this->article;
}

public function setArticle(?Article $article): self
{
    $this->article = $article;

    return $this;
}
private $isEnabled;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    private $datePublication;

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(\DateTimeInterface $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    

}
