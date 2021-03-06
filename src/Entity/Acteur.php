<?php

namespace App\Entity;

use App\Repository\ActeurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActeurRepository::class)
 */
class Acteur
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateAnniversaire;

    /**
     * @ORM\ManyToMany(targetEntity=Films::class, mappedBy="Acteurs")
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDateAnniversaire(): ?\DateTimeInterface
    {
        return $this->dateAnniversaire;
    }

    public function setDateAnniversaire(\DateTimeInterface $dateAnniversaire): self
    {
        $this->dateAnniversaire = $dateAnniversaire;

        return $this;
    }

    /**
     * @return Collection|Films[]
     */
    public function getActeurs(): Collection
    {
        return $this->Acteurs;
    }

    public function addActeur(Films $acteur): self
    {
        if (!$this->Acteurs->contains($acteur)) {
            $this->Acteurs[] = $acteur;
            $acteur->addActeur($this);
        }

        return $this;
    }

    public function removeActeur(Films $acteur): self
    {
        if ($this->Acteurs->removeElement($acteur)) {
            $acteur->removeActeur($this);
        }

        return $this;
    }




}
