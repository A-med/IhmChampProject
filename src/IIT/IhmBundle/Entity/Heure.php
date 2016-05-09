<?php

namespace IIT\IhmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Heure
 *
 * @ORM\Table(name="heure", indexes={@ORM\Index(name="idDate", columns={"idDate"})})
 * @ORM\Entity
 */
class Heure
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var \Date
     *
     * @ORM\ManyToOne(targetEntity="Date")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDate", referencedColumnName="id")
     * })
     */
    private $iddate;



    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return Heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iddate
     *
     * @param \IIT\IhmBundle\Entity\Date $iddate
     * @return Heure
     */
    public function setIddate(\IIT\IhmBundle\Entity\Date $iddate = null)
    {
        $this->iddate = $iddate;

        return $this;
    }

    /**
     * Get iddate
     *
     * @return \IIT\IhmBundle\Entity\Date 
     */
    public function getIddate()
    {
        return $this->iddate;
    }
}
