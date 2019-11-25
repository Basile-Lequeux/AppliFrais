<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FichefraisRepository")
 */
class Fichefrais
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $mois;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_justificatifs;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $montant_valide;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_modif;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     */
    private $fkuser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMois(): ?string
    {
        return $this->mois;
    }

    public function setMois(?string $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getNbJustificatifs(): ?int
    {
        return $this->nb_justificatifs;
    }

    public function setNbJustificatifs(?int $nb_justificatifs): self
    {
        $this->nb_justificatifs = $nb_justificatifs;

        return $this;
    }

    public function getMontantValide(): ?float
    {
        return $this->montant_valide;
    }

    public function setMontantValide(?float $montant_valide): self
    {
        $this->montant_valide = $montant_valide;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->date_modif;
    }

    public function setDateModif(?\DateTimeInterface $date_modif): self
    {
        $this->date_modif = $date_modif;

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
