<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormulaireRepository")
 */
class Formulaire
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
    private $Login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Motdepasse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): self
    {
        $this->Login = $Login;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->Motdepasse;
    }

    public function setMotdepasse(string $Motdepasse): self
    {
        $this->Motdepasse = $Motdepasse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
