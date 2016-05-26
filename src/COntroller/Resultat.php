<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat", indexes={@ORM\Index(name="idPartie", columns={"idPartie"}), @ORM\Index(name="idEquipe1", columns={"idEquipe1"}), @ORM\Index(name="idEquipe2", columns={"idEquipe2"})})
 * @ORM\Entity
 */
class Resultat
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
     * @var integer
     *
     * @ORM\Column(name="butEq1", type="integer", nullable=false)
     */
    private $buteq1;

    /**
     * @var integer
     *
     * @ORM\Column(name="butEq2", type="integer", nullable=false)
     */
    private $buteq2;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointEq1", type="integer", nullable=false)
     */
    private $pointeq1;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointEq2", type="integer", nullable=false)
     */
    private $pointeq2;

    /**
     * @var \Partie
     *
     * @ORM\ManyToOne(targetEntity="Partie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPartie", referencedColumnName="id")
     * })
     */
    private $idpartie;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipe1", referencedColumnName="id")
     * })
     */
    private $idequipe1;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipe2", referencedColumnName="id")
     * })
     */
    private $idequipe2;


}
