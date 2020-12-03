<?php

namespace App\Entity;

use App\Repository\FilmsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FilmsRepository::class)
 */
class Films
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $realisateur;

    /**
     * @ORM\Column(type="text")
     */
    private $Affiche;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $bande_annonce;

    /**
     * @ORM\ManyToMany(targetEntity=Acteur::class, inversedBy="Acteurs")
     */
    private $Acteurs;

    public function __construct()
    {
        $this->Acteurs = new ArrayCollection();
    }






    





   
 



  

   


   



 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDateAt(): ?\DateTimeInterface
    {
        return $this->DateAt;
    }

    public function setDateAt(\DateTimeInterface $DateAt): self
    {
        $this->DateAt = $DateAt;

        return $this;
    }

    public function getRealisateur(): ?string
    {
        return $this->realisateur;
    }

    public function setRealisateur(string $realisateur): self
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function getAffiche(): ?string
    {
        return $this->Affiche;
    }

    public function setAffiche(string $Affiche): self
    {
        $this->Affiche = $Affiche;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBandeAnnonce(): ?string
    {
        return $this->bande_annonce;
    }

    public function setBandeAnnonce(string $bande_annonce): self
    {
        $this->bande_annonce = $bande_annonce;

        return $this;
    }

    /**
     * @return Collection|Acteur[]
     */
    public function getActeurs(): Collection
    {
        return $this->Acteurs;
    }

    public function addActeur(Acteur $acteur): self
    {
        if (!$this->Acteurs->contains($acteur)) {
            $this->Acteurs[] = $acteur;
        }

        return $this;
    }

    public function removeActeur(Acteur $acteur): self
    {
        $this->Acteurs->removeElement($acteur);

        return $this;
    }






  



}
