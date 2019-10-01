<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InformationsLégalesRepository")
 */
class InformationsLégales
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
    private $CGU;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MentionsLégales;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCGU(): ?string
    {
        return $this->CGU;
    }

    public function setCGU(string $CGU): self
    {
        $this->CGU = $CGU;

        return $this;
    }

    public function getMentionsLégales(): ?string
    {
        return $this->MentionsLégales;
    }

    public function setMentionsLégales(string $MentionsLégales): self
    {
        $this->MentionsLégales = $MentionsLégales;

        return $this;
    }
}
