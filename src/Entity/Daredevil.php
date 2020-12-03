<?php

namespace App\Entity;

use App\Repository\DaredevilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DaredevilRepository::class)
 */
class Daredevil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $NomEpisode;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $ImageSerie;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateAt;

    /**
     * @ORM\Column(type="text")
     */
    private $Realisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $episode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEpisode(): ?string
    {
        return $this->NomEpisode;
    }

    public function setNomEpisode(string $NomEpisode): self
    {
        $this->NomEpisode = $NomEpisode;

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

    public function getImageSerie(): ?string
    {
        return $this->ImageSerie;
    }

    public function setImageSerie(string $ImageSerie): self
    {
        $this->ImageSerie = $ImageSerie;

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
        return $this->Realisateur;
    }

    public function setRealisateur(string $Realisateur): self
    {
        $this->Realisateur = $Realisateur;

        return $this;
    }

    public function getEpisode(): ?string
    {
        return $this->episode;
    }

    public function setEpisode(string $episode): self
    {
        $this->episode = $episode;

        return $this;
    }
}
