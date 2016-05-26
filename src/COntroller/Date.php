<?php



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


}
