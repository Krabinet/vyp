<?php

namespace App\Entity;

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

}
