<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SaisonRepository")
 */
class Saison
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Episode", mappedBy="saison")
     */
    private $episodes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Musique", mappedBy="saison")
     */
    private $musiques;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function __construct()
    {
        $this->episodes = new ArrayCollection();
        $this->musiques = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Episode[]
     */
    public function getEpisodes(): Collection
    {
        return $this->episodes;
    }

    public function addEpisode(Episode $episode): self
    {
        if (!$this->episodes->contains($episode)) {
            $this->episodes[] = $episode;
            $episode->setSaison($this);
        }

        return $this;
    }

    public function removeEpisode(Episode $episode): self
    {
        if ($this->episodes->contains($episode)) {
            $this->episodes->removeElement($episode);
            // set the owning side to null (unless already changed)
            if ($episode->getSaison() === $this) {
                $episode->setSaison(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Musique[]
     */
    public function getMusiques(): Collection
    {
        return $this->musiques;
    }

    public function addMusique(Musique $musique): self
    {
        if (!$this->musiques->contains($musique)) {
            $this->musiques[] = $musique;
            $musique->setSaison($this);
        }

        return $this;
    }

    public function removeMusique(Musique $musique): self
    {
        if ($this->musiques->contains($musique)) {
            $this->musiques->removeElement($musique);
            // set the owning side to null (unless already changed)
            if ($musique->getSaison() === $this) {
                $musique->setSaison(null);
            }
        }

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
    public function __toString()
    {
        return gettype($this->getEpisodes()) ;
    }

}
