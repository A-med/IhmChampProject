<?php
namespace IIT\IhmBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Date
 *
 * @ORM\Table(name="date", indexes={@ORM\Index(name="idCalendrier", columns={"idCalendrier"})})
 * @ORM\Entity
 */
class Date
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
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Calendrier
     *
     * @ORM\ManyToOne(targetEntity="Calendrier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCalendrier", referencedColumnName="id")
     * })
     */
    private $idcalendrier;



    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
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
     * Set idcalendrier
     *
     * @param \IIT\IhmBundle\Entity\Calendrier $idcalendrier
     * @return Date
     */
    public function setIdcalendrier(\IIT\IhmBundle\Entity\Calendrier $idcalendrier = null)
    {
        $this->idcalendrier = $idcalendrier;

        return $this;
    }

    /**
     * Get idcalendrier
     *
     * @return \IIT\IhmBundle\Entity\Calendrier 
     */
    public function getIdcalendrier()
    {
        return $this->idcalendrier;
    }
}
