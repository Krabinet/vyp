<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament")
 * @ORM\Entity
 */
class Medicament
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCommercial", type="string", length=80, nullable=false)
     */
    private $nomcommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="idFamille", type="string", length=10, nullable=false)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="composition", type="string", length=100, nullable=false)
     */
    private $composition;

    /**
     * @var string
     *
     * @ORM\Column(name="effets", type="string", length=100, nullable=false)
     */
    private $effets;

    /**
     * @var string
     *
     * @ORM\Column(name="contreIndications", type="string", length=100, nullable=false)
     */
    private $contreindications;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Rapport", mappedBy="idmedicament")
     */
    private $idrapport;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idrapport = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNomcommercial(): ?string
    {
        return $this->nomcommercial;
    }

    public function setNomcommercial(string $nomcommercial): self
    {
        $this->nomcommercial = $nomcommercial;

        return $this;
    }

    public function getIdfamille(): ?string
    {
        return $this->idfamille;
    }

    public function setIdfamille(string $idfamille): self
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    public function getComposition(): ?string
    {
        return $this->composition;
    }

    public function setComposition(string $composition): self
    {
        $this->composition = $composition;

        return $this;
    }

    public function getEffets(): ?string
    {
        return $this->effets;
    }

    public function setEffets(string $effets): self
    {
        $this->effets = $effets;

        return $this;
    }

    public function getContreindications(): ?string
    {
        return $this->contreindications;
    }

    public function setContreindications(string $contreindications): self
    {
        $this->contreindications = $contreindications;

        return $this;
    }

    /**
     * @return Collection|Rapport[]
     */
    public function getIdrapport(): Collection
    {
        return $this->idrapport;
    }

    public function addIdrapport(Rapport $idrapport): self
    {
        if (!$this->idrapport->contains($idrapport)) {
            $this->idrapport[] = $idrapport;
            $idrapport->addIdmedicament($this);
        }

        return $this;
    }

    public function removeIdrapport(Rapport $idrapport): self
    {
        if ($this->idrapport->contains($idrapport)) {
            $this->idrapport->removeElement($idrapport);
            $idrapport->removeIdmedicament($this);
        }

        return $this;
    }

}
