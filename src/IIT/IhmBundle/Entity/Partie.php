<?php
namespace IIT\IhmBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Partie
 *
 * @ORM\Table(name="partie", indexes={@ORM\Index(name="idEquipe", columns={"idEquipe"}), @ORM\Index(name="idStade", columns={"idStade"}), @ORM\Index(name="idCompetition", columns={"idCompetition"}), @ORM\Index(name="idDate", columns={"idDate"})})
 * @ORM\Entity
 */
class Partie
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
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipe", referencedColumnName="id")
     * })
     */
    private $idequipe;

    /**
     * @var \Stade
     *
     * @ORM\ManyToOne(targetEntity="Stade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStade", referencedColumnName="id")
     * })
     */
    private $idstade;

    /**
     * @var \Competition
     *
     * @ORM\ManyToOne(targetEntity="Competition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCompetition", referencedColumnName="id")
     * })
     */
    private $idcompetition;

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
     * @return Partie
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

    /**
     * Set idcompetition
     *
     * @param \IIT\IhmBundle\Entity\Competition $idcompetition
     * @return Partie
     */
    public function setIdcompetition(\IIT\IhmBundle\Entity\Competition $idcompetition = null)
    {
        $this->idcompetition = $idcompetition;

        return $this;
    }

    /**
     * Get idcompetition
     *
     * @return \IIT\IhmBundle\Entity\Competition 
     */
    public function getIdcompetition()
    {
        return $this->idcompetition;
    }

    /**
     * Set idstade
     *
     * @param \IIT\IhmBundle\Entity\Stade $idstade
     * @return Partie
     */
    public function setIdstade(\IIT\IhmBundle\Entity\Stade $idstade = null)
    {
        $this->idstade = $idstade;

        return $this;
    }

    /**
     * Get idstade
     *
     * @return \IIT\IhmBundle\Entity\Stade 
     */
    public function getIdstade()
    {
        return $this->idstade;
    }

    /**
     * Set idequipe
     *
     * @param \IIT\IhmBundle\Entity\Equipe $idequipe
     * @return Partie
     */
    public function setIdequipe(\IIT\IhmBundle\Entity\Equipe $idequipe = null)
    {
        $this->idequipe = $idequipe;

        return $this;
    }

    /**
     * Get idequipe
     *
     * @return \IIT\IhmBundle\Entity\Equipe 
     */
    public function getIdequipe()
    {
        return $this->idequipe;
    }
}
