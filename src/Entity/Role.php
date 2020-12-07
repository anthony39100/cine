<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Acteur::class, inversedBy="Actor")
     */
    private $Actor;

    /**
     * @ORM\ManyToMany(targetEntity=Films::class, inversedBy="Movie")
     */
    private $Films;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    public function __construct()
    {
        $this->Actor = new ArrayCollection();
        $this->Films = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Acteur[]
     */
    public function getActor(): Collection
    {
        return $this->Actor;
    }

    public function addActor(Acteur $actor): self
    {
        if (!$this->Actor->contains($actor)) {
            $this->Actor[] = $actor;
        }

        return $this;
    }

    public function removeActor(Acteur $actor): self
    {
        $this->Actor->removeElement($actor);

        return $this;
    }

    /**
     * @return Collection|Films[]
     */
    public function getFilms(): Collection
    {
        return $this->Films;
    }

    public function addFilm(Films $film): self
    {
        if (!$this->Films->contains($film)) {
            $this->Films[] = $film;
        }

        return $this;
    }

    public function removeFilm(Films $film): self
    {
        $this->Films->removeElement($film);

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }
}
