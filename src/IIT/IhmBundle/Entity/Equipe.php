<?php

namespace IIT\IhmBundle\Entity;
use IIT\IhmBundle\Entity\EquipeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 * @ORM\Entity(repositoryClass="IIT\IhmBundle\Entity\EquipeRepository")
 * @ORM\Table(name="equipe")
 *  
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
     * @var integer
     *
     * @ORM\Column(name="j", type="integer", nullable=false)
     */
    private $j;

    /**
     * @var integer
     *
     * @ORM\Column(name="g", type="integer", nullable=false)
     */
    private $g;

    /**
     * @var integer
     *
     * @ORM\Column(name="n", type="integer", nullable=false)
     */
    private $n;

    /**
     * @var integer
     *
     * @ORM\Column(name="p", type="integer", nullable=false)
     */
    private $p;
    
       /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=100, nullable=false)
     */
    private $logo;

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
     * Get j
     *
     * @return integer 
     */
    function getJ() {
        return $this->j;
    }

    /**
     * Get g
     *
     * @return integer 
     */
    function getG() {
        return $this->g;
    }

    /**
     * Get n
     *
     * @return integer 
     */
    function getN() {
        return $this->n;
    }

    /**
     * Get p
     *
     * @return integer 
     */
    function getP() {
        return $this->p;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    function getLogo() {
        return $this->logo;
    }

     /**
     * Set j
     *
     * @param integer $j
     * @return Equipe
     */
    function setJ($j) {
        $this->j = $j;
    }

     /**
     * Set g
     *
     * @param integer $g
     * @return Equipe
     */
    function setG($g) {
        $this->g = $g;
    }

     /**
     * Set n
     *
     * @param integer $n
     * @return Equipe
     */
    function setN($n) {
        $this->n = $n;
    }

     /**
     * Set p
     *
     * @param integer $p
     * @return Equipe
     */
    function setP($p) {
        $this->p = $p;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Equipe
     */
    function setLogo($logo) {
        $this->logo = $logo;
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
    public function __toString() {
        return $this->designation;
    }

    
}
