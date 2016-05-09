<?php

namespace IIT\IhmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="competition")
 * @ORM\Entity
 */
class Competition
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
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=100, nullable=false)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="paysOraganisation", type="string", length=50, nullable=false)
     */
    private $paysoraganisation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeb", type="date", nullable=false)
     */
    private $datedeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="typeCompetition", type="string", length=50, nullable=false)
     */
    private $typecompetition;



    /**
     * Set designation
     *
     * @param string $designation
     * @return Competition
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set paysoraganisation
     *
     * @param string $paysoraganisation
     * @return Competition
     */
    public function setPaysoraganisation($paysoraganisation)
    {
        $this->paysoraganisation = $paysoraganisation;

        return $this;
    }

    /**
     * Get paysoraganisation
     *
     * @return string 
     */
    public function getPaysoraganisation()
    {
        return $this->paysoraganisation;
    }

    /**
     * Set datedeb
     *
     * @param \DateTime $datedeb
     * @return Competition
     */
    public function setDatedeb($datedeb)
    {
        $this->datedeb = $datedeb;

        return $this;
    }

    /**
     * Get datedeb
     *
     * @return \DateTime 
     */
    public function getDatedeb()
    {
        return $this->datedeb;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Competition
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set typecompetition
     *
     * @param string $typecompetition
     * @return Competition
     */
    public function setTypecompetition($typecompetition)
    {
        $this->typecompetition = $typecompetition;

        return $this;
    }

    /**
     * Get typecompetition
     *
     * @return string 
     */
    public function getTypecompetition()
    {
        return $this->typecompetition;
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
}
