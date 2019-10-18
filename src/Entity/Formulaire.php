<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="l'email'{{ value }}' n'est pas un email valide", checkMX = true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8, max=255, minMessage="Votre mot de passe est trop court")
     */
    private $motdepasse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8, max=255, minMessage="Votre mot de passe doit être identique")
     */
    private $repetezlemotdepasse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

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

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getRepetezlemotdepasse(): ?string
    {
        return $this->repetezlemotdepasse;
    }

    public function setRepetezlemotdepasse(string $repetezlemotdepasse): self
    {
        $this->repetezlemotdepasse = $repetezlemotdepasse;

        return $this;
    }
}
