<?php

namespace IIT\IhmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity
 */
class Equipe
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
     * @ORM\Column(name="designation", type="string", length=50, nullable=false)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseLocal", type="string", length=100, nullable=false)
     */
    private $adresselocal;

    /**
     * @var string
     *
     * @ORM\Column(name="typeEquipe", type="string", length=20, nullable=false)
     */
    private $typeequipe;



    /**
     * Set designation
     *
     * @param string $designation
     * @return Equipe
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
     * Set adresselocal
     *
     * @param string $adresselocal
     * @return Equipe
     */
    public function setAdresselocal($adresselocal)
    {
        $this->adresselocal = $adresselocal;

        return $this;
    }

    /**
     * Get adresselocal
     *
     * @return string 
     */
    public function getAdresselocal()
    {
        return $this->adresselocal;
    }

    /**
     * Set typeequipe
     *
     * @param string $typeequipe
     * @return Equipe
     */
    public function setTypeequipe($typeequipe)
    {
        $this->typeequipe = $typeequipe;

        return $this;
    }

    /**
     * Get typeequipe
     *
     * @return string 
     */
    public function getTypeequipe()
    {
        return $this->typeequipe;
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
