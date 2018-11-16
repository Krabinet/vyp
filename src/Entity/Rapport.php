<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rapport
 *
 * @ORM\Table(name="rapport", indexes={@ORM\Index(name="rapport_fk1", columns={"idVisiteur"}), @ORM\Index(name="rapport_fk2", columns={"idMedecin"})})
 * @ORM\Entity
 */
class Rapport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \String|null
     *
     * @ORM\Column(name="date", type="string", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motif", type="string", length=100, nullable=true)
     */
    private $motif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bilan", type="string", length=100, nullable=true)
     */
    private $bilan;

    /**
     * @var \Visiteur
     *
     * @ORM\ManyToOne(targetEntity="Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="id")
     * })
     */
    private $idvisiteur;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedecin", referencedColumnName="id")
     * })
     */
    private $idmedecin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Medicament", inversedBy="idrapport")
     * @ORM\JoinTable(name="offrir",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idRapport", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idMedicament", referencedColumnName="id")
     *   }
     * )
     */
    private $idmedicament;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmedicament = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getBilan()
    {
        return $this->bilan;
    }

    public function setBilan($bilan): self
    {
        $this->bilan = $bilan;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getidvisiteur()
    {
        return $this->idvisiteur;
    }

    public function setidvisiteur($idvisiteur): self
    {
        $this->idvisiteur = $idvisiteur;

        return $this;
    }

    public function getidmedecin()
    {
        return $this->idmedecin;
    }

    public function setidmedecin($idmedecin): self
    {
        $this->idmedecin = $idmedecin;

        return $this;
    }

    public function getidmedicament()
    {
        return $this->idmedicament;
    }

    public function setidmedicament($idmedicament): self
    {
        $this->idmedicament = $idmedicament;

        return $this;
    }

    public function addIdmedicament(Medicament $idmedicament): self
    {
        if (!$this->idmedicament->contains($idmedicament)) {
            $this->idmedicament[] = $idmedicament;
        }

        return $this;
    }

    public function removeIdmedicament(Medicament $idmedicament): self
    {
        if ($this->idmedicament->contains($idmedicament)) {
            $this->idmedicament->removeElement($idmedicament);
        }

        return $this;
    }
}
