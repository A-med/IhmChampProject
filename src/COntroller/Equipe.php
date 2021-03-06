<?php



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


}
