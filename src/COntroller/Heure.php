<?php



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


}
