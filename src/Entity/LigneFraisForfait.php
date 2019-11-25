<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneFraisForfaitRepository")
 */
class LigneFraisForfait
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FraisForfait")
     */
    private $fkfraisforfait;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\fichefrais")
     */
    private $fkfichefrais;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     */
    private $fkuser;
    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getFkfraisforfait(): ?FraisForfait
    {
        return $this->fkfraisforfait;
    }

    public function setFkfraisforfait(?FraisForfait $fkfraisforfait): self
    {
        $this->fkfraisforfait = $fkfraisforfait;

        return $this;
    }

    public function getFkfichefrais(): ?fichefrais
    {
        return $this->fkfichefrais;
    }

    public function setFkfichefrais(?fichefrais $fkfichefrais): self
    {
        $this->fkfichefrais = $fkfichefrais;

        return $this;
    }

    public function getFkuser(): ?user
    {
        return $this->fkuser;
    }

    public function setFkuser(?user $fkuser): self
    {
        $this->fkuser = $fkuser;

        return $this;
    }
}